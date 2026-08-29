<?php

namespace App\Enums;

enum Role: string
{
    case CUSTOMER = 'CUSTOMER';
    case ORGANIZER = 'ORGANIZER';
    case STAFF = 'STAFF';
    case ADMIN = 'ADMIN';
}
