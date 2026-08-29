<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->foreignId('customer_id')->constrained('customers', 'customer_id')->restrictOnDelete();
            $table->foreignId('concert_id')->constrained('concerts', 'concert_id')->restrictOnDelete();
            $table->dateTime('booking_date');
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', ['PENDING', 'COMPLETED', 'CANCELLED', 'FAILED', 'EXPIRED'])->default('PENDING');
            $table->dateTime('expiry_time');
            $table->timestamps();
        });

        Schema::create('booking_seat', function (Blueprint $table) {
            $table->foreignId('booking_id')->constrained('bookings', 'booking_id')->cascadeOnDelete();
            $table->foreignId('seat_id')->constrained('seats', 'seat_id')->restrictOnDelete();
            $table->primary(['booking_id', 'seat_id']);
        });

        Schema::create('seat_lock_log', function (Blueprint $table) {
            $table->id('lock_id');
            $table->foreignId('booking_id')->constrained('bookings', 'booking_id')->cascadeOnDelete();
            $table->foreignId('seat_id')->constrained('seats', 'seat_id')->restrictOnDelete();
            $table->dateTime('locked_at');
            $table->dateTime('expired_at')->nullable();
            $table->dateTime('released_at')->nullable();
            $table->enum('status', ['LOCKED', 'EXPIRED', 'RELEASED', 'CONVERTED_TO_BOOKING'])->default('LOCKED');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seat_lock_log');
        Schema::dropIfExists('booking_seat');
        Schema::dropIfExists('bookings');
    }
};
