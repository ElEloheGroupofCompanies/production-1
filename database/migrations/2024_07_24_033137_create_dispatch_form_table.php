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
        Schema::create('dispatch_form', function (Blueprint $table) {
            $table->id();
            $table->date('date_dispatched');
            $table->string('location');
            $table->string('dispatch_AM');
            $table->string('dispatch_PM');
            $table->string('lumpia');
            $table->string('inasal');
            $table->string('lechon_manok');
            $table->string('vinegar_1_5L');
            $table->string('paper_bag_1');
            $table->string('paper_bag_2');
            $table->string('paper_bag_3');
            $table->string('paper_bag_4');
            $table->string('cellophane_10x14');
            $table->string('patok');
            $table->string('manila_paper');
            $table->string('lpg_50kg');
            $table->string('lpg_11kg');
            $table->string('oil_can');
            $table->string('oil_litres');
            $table->string('dishwashing1_5L');
            $table->string('diswashing_1L');
            $table->string('flour');
            $table->string('free_flour');
            $table->string('free_10x14');
            $table->string('free_paperbag');
            $table->string('free_patok');
            $table->string('free_vinegar1_5L');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispatch_form');
    }
};
