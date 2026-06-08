<?php

namespace App\Http\Controllers;

use App\Events\CreateOrder;
use App\Models\Package;
use CinetPay\CinetPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaiementController extends Controller
{
    public function initier(Request $request)
    {
        $packageId = Session::get('selected_package_id');
        $package = Package::findOrFail($packageId);

        $montant = $package->price;
        $transactionId = uniqid('TRX_');

        $cp = new CinetPay(
            env('CINETPAY_SITE_ID'),
            env('CINETPAY_API_KEY')
        );

        $cp->setTransId($transactionId);
        $cp->setDesignation('Paiement commande');
        $cp->setTransDate(date('Y-m-d H:i:s'));
        $cp->setAmount($montant);
        $cp->setCurrency('XAF');
        $cp->setNotifyUrl(env('CINETPAY_NOTIFY_URL'));
        $cp->setReturnUrl(env('CINETPAY_RETURN_URL'));
        $cp->setLang('fr');
        $cp->setCustPhone($request->input('telephone'));
        $cp->setPaymentMethods(['MOBILE_MONEY']);

        $cp->generatePaymentLink();

        return redirect($cp->_cinetPayLink);
    }

    public function notify(Request $request)
    {
        $cp = new CinetPay(
            env('CINETPAY_SITE_ID'),
            env('CINETPAY_API_KEY')
        );

        $transactionId = $request->input('cpm_trans_id');

        $cp->setTransId($transactionId);
        $cp->getPayStatus();

        if ($cp->_cpm_result === '00') {
            $paymentInfo = [
                'transaction_id' => $cp->_cpm_trans_id ?? $transactionId,
                'payment_method' => 'cinetpay_mobile',
                'paid_amount' => $cp->_cpm_amount ?? null,
                'paid_currency' => $cp->_cpm_currency ?? null,
                'payment_status' => 'completed',
            ];

            CreateOrder::dispatch($paymentInfo);
        }

        return response('OK');
    }

    public function retour(Request $request)
    {
        return redirect()->route('payment.success');
    }
}