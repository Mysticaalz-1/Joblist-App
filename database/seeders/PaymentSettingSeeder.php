<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment_settings = array(
            array(
                "id" => 1,
                "key" => "paypal_status",
                "value" => "active",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 06:40:25",
            ),
            array(
                "id" => 2,
                "key" => "paypal_mode",
                "value" => "sandbox",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 04:28:55",
            ),
            array(
                "id" => 3,
                "key" => "paypal_country",
                "value" => "US",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 04:28:55",
            ),
            array(
                "id" => 4,
                "key" => "paypal_currency",
                "value" => "USD",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 04:28:55",
            ),
            array(
                "id" => 5,
                "key" => "paypal_currency_rate",
                "value" => "1",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 04:28:55",
            ),
            array(
                "id" => 6,
                "key" => "paypal_client_id",
                "value" => "your_paypal_client_id",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 06:30:33",
            ),
            array(
                "id" => 7,
                "key" => "paypal_secret_key",
                "value" => "your_paypal_secret_key",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 06:30:33",
            ),
            array(
                "id" => 8,
                "key" => "paypal_app_key",
                "value" => "App_key",
                "created_at" => "2023-10-23 04:28:55",
                "updated_at" => "2023-10-23 04:28:55",
            ),
            array(
                "id" => 9,
                "key" => "stripe_status",
                "value" => "active",
                "created_at" => "2023-10-24 06:58:34",
                "updated_at" => "2023-10-24 06:58:34",
            ),
            array(
                "id" => 10,
                "key" => "stripe_country",
                "value" => "US",
                "created_at" => "2023-10-24 06:58:34",
                "updated_at" => "2023-10-24 06:58:34",
            ),
            array(
                "id" => 11,
                "key" => "stripe_currency",
                "value" => "USD",
                "created_at" => "2023-10-24 06:58:35",
                "updated_at" => "2023-10-24 06:58:35",
            ),
            array(
                "id" => 12,
                "key" => "stripe_currency_rate",
                "value" => "1",
                "created_at" => "2023-10-24 06:58:35",
                "updated_at" => "2023-10-24 06:58:35",
            ),
            array(
                "id" => 13,
                "key" => "stripe_key",
                "value" => "pk_test_your_stripe_public_key",
                "created_at" => "2023-10-24 06:58:35",
                "updated_at" => "2023-10-24 07:00:25",
            ),
            array(
                "id" => 14,
                "key" => "stripe_secret_key",
                "value" => "sk_test_your_stripe_secret_key",
                "created_at" => "2023-10-24 06:58:35",
                "updated_at" => "2023-10-24 07:00:25",
            ),
            array(
                "id" => 15,
                "key" => "razorpay_status",
                "value" => "active",
                "created_at" => "2023-10-24 10:35:24",
                "updated_at" => "2023-10-24 10:35:24",
            ),
            array(
                "id" => 16,
                "key" => "razorpay_country",
                "value" => "IN",
                "created_at" => "2023-10-24 10:35:24",
                "updated_at" => "2023-10-24 10:35:24",
            ),
            array(
                "id" => 17,
                "key" => "razorpay_currency",
                "value" => "INR",
                "created_at" => "2023-10-24 10:35:24",
                "updated_at" => "2023-10-24 10:35:24",
            ),
            array(
                "id" => 18,
                "key" => "razorpay_currency_rate",
                "value" => "83",
                "created_at" => "2023-10-24 10:35:24",
                "updated_at" => "2023-10-24 10:35:24",
            ),
            array(
                "id" => 19,
                "key" => "razorpay_key",
                "value" => "rzp_test_your_razorpay_key",
                "created_at" => "2023-10-24 10:35:24",
                "updated_at" => "2023-10-24 11:22:36",
            ),
            array(
                "id" => 20,
                "key" => "razorpay_secret_key",
                "value" => "your_razorpay_secret_key",
                "created_at" => "2023-10-24 10:35:24",
                "updated_at" => "2023-10-24 11:22:36",
            ),
        );

        \DB::table('payment_settings')->insert($payment_settings);

    }
}
