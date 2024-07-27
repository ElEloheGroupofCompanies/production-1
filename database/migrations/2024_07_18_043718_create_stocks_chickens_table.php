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
        Schema::create('stocks_chickens', function (Blueprint $table) {
            $table->id();
            $table->date('date_added');
            $table->string('chicken_kilo_types');
            $table->string('beginning_stocks');
            $table->string('chops_made');
            $table->string('dispatch_AM');
            $table->string('dispatch_PM');
            $table->string('ending_stocks');
            $table->string('ending_whole_chicken')->nullable();
            $table->string('total_marinated_chicken')->nullable();
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
        Schema::dropIfExists('stocks_chickens');
    }
};
