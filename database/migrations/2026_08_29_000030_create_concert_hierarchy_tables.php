<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->id('concert_id');
            $table->foreignId('company_id')->constrained('companies', 'company_id')->restrictOnDelete();
            $table->foreignId('organizer_id')->constrained('event_organizers', 'organizer_id')->restrictOnDelete();
            $table->string('name');
            $table->string('artist');
            $table->dateTime('date_time');
            $table->string('venue');
            $table->timestamps();
        });

        Schema::create('zones', function (Blueprint $table) {
            $table->id('zone_id');
            $table->foreignId('concert_id')->constrained('concerts', 'concert_id')->cascadeOnDelete();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->unsignedInteger('capacity');
            $table->timestamps();
        });

        Schema::create('seats', function (Blueprint $table) {
            $table->id('seat_id');
            $table->foreignId('zone_id')->constrained('zones', 'zone_id')->cascadeOnDelete();
            $table->string('row');
            $table->string('number');
            $table->enum('status', ['AVAILABLE', 'LOCKED', 'BOOKED'])->default('AVAILABLE');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seats');
        Schema::dropIfExists('zones');
        Schema::dropIfExists('concerts');
    }
};
