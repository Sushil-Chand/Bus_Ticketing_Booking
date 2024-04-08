<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUserIdFromBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop foreign key constraint first
        Schema::table('buses', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['user_id']);
        });

        // Then drop the column
        Schema::table('buses', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buses', function (Blueprint $table) {
            // Add back the column
            $table->unsignedBigInteger('user_id');
            
            // Re-add foreign key constraint if needed
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }
}

