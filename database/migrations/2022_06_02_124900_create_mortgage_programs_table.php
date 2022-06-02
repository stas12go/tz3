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
    public function up(): void
    {
        Schema::create('mortgage_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->tinyInteger('interest_rate', false, true)->comment('Процентная ставка.');
            $table->tinyInteger('max_term', false, true)->comment('Максимальный срок предоставления ипотеки.');
            $table->tinyInteger('min_initial_fee', false, true)->comment('Минимальный первоначальный взнос. Измеряется в процентах.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('mortgage_programs');
    }
};
