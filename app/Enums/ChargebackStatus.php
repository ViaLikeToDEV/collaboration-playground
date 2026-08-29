<?php

namespace App\Enums;

enum ChargebackStatus: string
{
    case OPEN = 'OPEN';
    case WON = 'WON';
    case LOST = 'LOST';
    case RESOLVED = 'RESOLVED';
}
