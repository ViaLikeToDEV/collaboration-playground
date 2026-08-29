<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('system_anomaly', function (Blueprint $table) {
            $table->id('anomaly_id');
            $table->foreignId('booking_id')->constrained('bookings', 'booking_id')->cascadeOnDelete();
            $table->foreignId('reviewed_by_admin_id')->nullable()->constrained('admins', 'admin_id')->nullOnDelete();
            $table->enum('type', ['PAYMENT_FRAUD_CARD_TESTING', 'SEAT_HOARDING_ABUSE', 'CHARGEBACK_ABUSE']);
            $table->text('message');
            $table->dateTime('timestamp');
            $table->enum('status', ['UNRESOLVED', 'INVESTIGATING', 'RESOLVED'])->default('UNRESOLVED');
            $table->text('resolve_reason')->nullable();
        });

        Schema::create('anomaly_attachment', function (Blueprint $table) {
            $table->id('attachment_id');
            $table->foreignId('anomaly_id')->constrained('system_anomaly', 'anomaly_id')->cascadeOnDelete();
            $table->string('file_path');
            $table->timestamps();
        });

        Schema::create('audit_log', function (Blueprint $table) {
            $table->id('log_id');
            $table->foreignId('user_id')->constrained('users', 'user_id')->restrictOnDelete();
            $table->string('action');
            $table->dateTime('timestamp');
            $table->string('ip_address', 45)->nullable();
            $table->string('target_type')->nullable();
            $table->unsignedBigInteger('target_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_log');
        Schema::dropIfExists('anomaly_attachment');
        Schema::dropIfExists('system_anomaly');
    }
};
