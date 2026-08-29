<?php

namespace App\Services;

use App\Models\Booking;

class BookingService
{
    public function createBooking(array $payload): Booking
    {
        return new Booking($payload);
    }

    public function confirmBooking(Booking $booking): Booking
    {
        return $booking;
    }

    public function cancelBooking(Booking $booking): Booking
    {
        return $booking;
    }

    public function checkExpiry(Booking $booking): bool
    {
        return false;
    }
}
