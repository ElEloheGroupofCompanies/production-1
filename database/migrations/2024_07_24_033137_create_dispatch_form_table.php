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
        Schema::create('dispatch_forms', function (Blueprint $table) {
            $table->id();
            $table->date('date_dispatched');
            $table->string('location');
            $table->string('dispatch_AM');
            $table->string('dispatch_PM')->nullable();
            $table->string('lumpia')->nullable();
            $table->string('inasal')->nullable();
            $table->string('lechon_manok')->nullable();
            $table->string('vinegar1_5L')->nullable();
            $table->string('paper_bag_1')->nullable();
            $table->string('paper_bag_2')->nullable();
            $table->string('paper_bag_3')->nullable();
            $table->string('paper_bag_4')->nullable();
            $table->string('cellophane_10x14')->nullable();
            $table->string('patok')->nullable();
            $table->string('manila_paper')->nullable();
            $table->string('lpg_50kgs')->nullable();
            $table->string('lpg_11kgs')->nullable();
            $table->string('oil_can')->nullable();
            $table->string('oil_litres')->nullable();
            $table->string('dishwashing1_5L')->nullable();
            $table->string('dishwashing_1L')->nullable();
            $table->string('flour')->nullable();
            $table->string('free_flour')->nullable();
            $table->string('free_10x14')->nullable();
            $table->string('free_paperbag')->nullable();
            $table->string('free_patok')->nullable();
            $table->string('free_vinegar1_5L')->nullable();
            $table->string('others_amount')->nullable();
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
        Schema::dropIfExists('dispatch_forms');
    }
};
