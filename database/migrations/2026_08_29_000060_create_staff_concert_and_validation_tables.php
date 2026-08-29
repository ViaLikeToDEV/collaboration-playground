<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('staff_concert', function (Blueprint $table) {
            $table->foreignId('staff_id')->constrained('staff', 'staff_id')->cascadeOnDelete();
            $table->foreignId('concert_id')->constrained('concerts', 'concert_id')->cascadeOnDelete();
            $table->primary(['staff_id', 'concert_id']);
        });

        Schema::create('ticket_validation_log', function (Blueprint $table) {
            $table->id('validation_id');
            $table->foreignId('ticket_id')->constrained('tickets', 'ticket_id')->cascadeOnDelete();
            $table->foreignId('staff_id')->constrained('staff', 'staff_id')->restrictOnDelete();
            $table->dateTime('validation_time');
            $table->string('result');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ticket_validation_log');
        Schema::dropIfExists('staff_concert');
    }
};
