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
        Schema::create('receivable_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('receivable_id')->nullable();
            $table->foreign('receivable_id')->references('id')->on('receivables')->nullable();
            $table->string('product_name')->nullable();
            $table->string('price')->nullable();
            $table->string('qty')->nullable();
            $table->string('total')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receivable_details');
    }
};
