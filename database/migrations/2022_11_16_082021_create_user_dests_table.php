<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->constrained('users')->on('users');
            // $table->foreignId('destination_id')->references('id')->constrained('destinations')->on('destinations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_dests');
    }
};
