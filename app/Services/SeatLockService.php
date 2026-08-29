<?php

namespace App\Services;

use App\Models\Booking;

class SeatLockService
{
    public function lockSeat(int $seatId, int $userId, int $ttlSeconds = 300): bool
    {
        return true;
    }

    public function isOwnedByUser(int $seatId, int $userId): bool
    {
        return true;
    }

    public function persistBookingLocks(Booking $booking): void
    {
    }

    public function releaseSeat(int $seatId): void
    {
    }
}
