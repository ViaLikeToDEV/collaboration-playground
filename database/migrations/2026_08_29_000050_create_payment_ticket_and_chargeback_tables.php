<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('booking_id')->unique()->constrained('bookings', 'booking_id')->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->enum('method', ['PROMPTPAY', 'CREDIT_CARD']);
            $table->enum('status', ['PENDING', 'COMPLETED', 'FAILED', 'EXPIRED'])->default('PENDING');
            $table->dateTime('payment_date')->nullable();
            $table->string('provider_transaction_id')->nullable();
            $table->string('decline_code')->nullable();
            $table->enum('risk_level', ['LOW', 'MEDIUM', 'HIGH'])->nullable();
            $table->string('card_fingerprint')->nullable();
            $table->timestamps();
        });

        Schema::create('tickets', function (Blueprint $table) {
            $table->id('ticket_id');
            $table->foreignId('booking_id')->constrained('bookings', 'booking_id')->cascadeOnDelete();
            $table->foreignId('concert_id')->constrained('concerts', 'concert_id')->restrictOnDelete();
            $table->foreignId('seat_id')->unique()->constrained('seats', 'seat_id')->restrictOnDelete();
            $table->string('qr_code')->unique();
            $table->boolean('is_used')->default(false);
            $table->timestamps();
        });

        Schema::create('chargebacks', function (Blueprint $table) {
            $table->id('chargeback_id');
            $table->foreignId('payment_id')->constrained('payments', 'payment_id')->cascadeOnDelete();
            $table->string('provider_chargeback_id')->unique();
            $table->text('reason');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['OPEN', 'WON', 'LOST', 'RESOLVED'])->default('OPEN');
            $table->dateTime('created_at');
            $table->dateTime('resolved_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chargebacks');
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('payments');
    }
};
