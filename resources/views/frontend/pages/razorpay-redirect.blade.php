<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Razorpay</title>
    <style>
        .razorpay-payment-button {
            display: none;
        }
    </style>
</head>
<body>
    <span style="background:red">NE FERMEZ PAS CETTE PAGE !</span>
    @php
        $packageId = session()->get('selected_package_id');
        $package = App\Models\Package::findOrFail($packageId);

        $totalPayableAmount = ($package->price * config('payment.razorpay_currency_rate')) * 100;

    @endphp

<form action="{{ route('razorpay.payment') }}">
    <script src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="{{ config('payment.razorpay_key') }}"
    data-currency="{{ config('payment.razorpay_currency') }}"
    data-amount="{{ $totalPayableAmount }}"
    data-buttontext="Payer avec Razorpay"
    data-name="Paiement"
    data-description="Paiement du forfait"
    data-prefill.name=""
    data-prefill.email=""
    data-theme.color=""
    ></script>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var button = document.querySelector(".razorpay-payment-button");
        button.click();
    })
</script>
</body>
</html>
