<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seat', function (Blueprint $table) {
            $table->id();
            $table->string('seat_no');
            $table->foreignId('bus_id')->constrained();
            $table->foreignId('bus_schedules_id')->constrained()->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('booked')->default(false); // active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat');
    }
};
