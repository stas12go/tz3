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
        Schema::create('apartments_mortgage_programs', function (Blueprint $table) {
            $table->foreignId('apartment_id')->references('id')->on('apartments');
            $table->foreignId('mortgage_program_id')->references('id')->on('mortgage_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments_mortgage_programs');
    }
};
