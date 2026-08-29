<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case PROMPTPAY = 'PROMPTPAY';
    case CREDIT_CARD = 'CREDIT_CARD';
}
