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
        Schema::create('payables', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->string('date')->nullable();
            $table->string('created_by')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('supplier')->nullable();
            $table->string('saleman')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('term')->nullable();
            $table->string('total')->default('0');
            $table->string('remaining')->default('0');
            $table->string('payment_status')->default('pending');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->nullable();
            $table->longText('attachments')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payables');
    }
};
