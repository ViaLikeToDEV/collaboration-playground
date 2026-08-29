<?php

namespace App\Enums;

enum BookingStatus: string
{
    case PENDING = 'PENDING';
    case COMPLETED = 'COMPLETED';
    case CANCELLED = 'CANCELLED';
    case FAILED = 'FAILED';
    case EXPIRED = 'EXPIRED';
}
