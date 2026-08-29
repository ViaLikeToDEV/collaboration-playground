<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->primary();
            $table->foreign('customer_id')->references('user_id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('event_organizers', function (Blueprint $table) {
            $table->unsignedBigInteger('organizer_id')->primary();
            $table->foreign('organizer_id')->references('user_id')->on('users')->cascadeOnDelete();
            $table->foreignId('company_id')->constrained('companies', 'company_id')->restrictOnDelete();
            $table->timestamps();
        });

        Schema::create('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id')->primary();
            $table->foreign('staff_id')->references('user_id')->on('users')->cascadeOnDelete();
            $table->foreignId('company_id')->constrained('companies', 'company_id')->restrictOnDelete();
            $table->timestamps();
        });

        Schema::create('admins', function (Blueprint $table) {
            $table->unsignedBigInteger('admin_id')->primary();
            $table->foreign('admin_id')->references('user_id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
        Schema::dropIfExists('staff');
        Schema::dropIfExists('event_organizers');
        Schema::dropIfExists('customers');
    }
};
