<?php

namespace App\Services;

use App\Models\Payment;

class PaymentService
{
    public function processPayment(array $payload): Payment
    {
        return new Payment($payload);
    }

    public function verifyStatus(Payment $payment): Payment
    {
        return $payment;
    }
}
