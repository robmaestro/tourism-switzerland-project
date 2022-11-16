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
            $table->id('user_dest_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('destination_id')->references('destination_id')->on('destinations')->onDelete('no action')->onUpdate('no action');
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
