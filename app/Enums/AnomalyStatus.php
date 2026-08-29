<?php

namespace App\Enums;

enum AnomalyStatus: string
{
    case UNRESOLVED = 'UNRESOLVED';
    case INVESTIGATING = 'INVESTIGATING';
    case RESOLVED = 'RESOLVED';
}
