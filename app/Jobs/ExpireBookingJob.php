<?php

namespace App\Jobs;

use App\Enums\BookingStatus;
use App\Models\Booking;
use App\Services\SeatLockService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ExpireBookingJob implements ShouldQueue
{
    use Queueable;

    public function __construct(public int $bookingId)
    {
    }

    public function handle(SeatLockService $seatLockService): void
    {
        $booking = Booking::query()->with('seats')->find($this->bookingId);

        if (! $booking || $booking->status !== BookingStatus::PENDING) {
            return;
        }

        $booking->status = BookingStatus::EXPIRED;
        $booking->save();

        foreach ($booking->seats as $seat) {
            $seatLockService->releaseSeat($seat->seat_id);
        }
    }
}
