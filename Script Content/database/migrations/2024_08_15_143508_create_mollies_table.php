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
        Schema::create('mollies', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['enable','disable'])->default('disable');
            $table->string('countryName')->default('United States of America');
            $table->string('currencyName')->default('USD');
            $table->string('currencyRatePerUSD')->nullable();
            $table->string('mollieKey')->nullable();
            $table->string('image')->default('default/paymentGetway/mollie.png');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mollies');
    }
};
