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
        Schema::create('payment_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('receivable_id')->nullable();
            $table->foreign('receivable_id')->references('id')->on('receivables')->nullable();
            $table->unsignedBigInteger('payable_id')->nullable();
            $table->foreign('payable_id')->references('id')->on('payables')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('remaining')->nullable();
            $table->string('balance')->nullable();
            $table->string('paying_amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('account_no')->nullable();
            $table->string('payment_term')->nullable();
            $table->string('date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_histories');
    }
};
