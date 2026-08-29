<?php

namespace App\Enums;

enum AnomalyType: string
{
    case PAYMENT_FRAUD_CARD_TESTING = 'PAYMENT_FRAUD_CARD_TESTING';
    case SEAT_HOARDING_ABUSE = 'SEAT_HOARDING_ABUSE';
    case CHARGEBACK_ABUSE = 'CHARGEBACK_ABUSE';
}
