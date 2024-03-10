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
    Schema::create('bus_schedules', function (Blueprint $table) {
        $table->id();
        $table->foreignId('bus_id')->constrained();
        $table->foreignId('operator_id')->constrained();
        $table->foreignId('region_id')->constrained();
        $table->foreignId('sub_region_id')->constrained();
        $table->date('depart_date');
        $table->date('return_date');
        $table->dateTimeTz('depart_time');
        $table->dateTimeTz('return_time');
        $table->string('pickup_address');
        $table->string('dropoff_address');
        $table->decimal('fare_amount', 10, 2); // Change the precision and scale as needed
        $table->boolean('status')->default(0); // active
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_schedules');
    }
};
