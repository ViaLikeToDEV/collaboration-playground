<?php

namespace App\Enums;

enum SeatLockStatus: string
{
    case LOCKED = 'LOCKED';
    case EXPIRED = 'EXPIRED';
    case RELEASED = 'RELEASED';
    case CONVERTED_TO_BOOKING = 'CONVERTED_TO_BOOKING';
}
