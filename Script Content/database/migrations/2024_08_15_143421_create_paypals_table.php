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
        Schema::create('paypals', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['enable','disable'])->default('disable');
            $table->enum('accountMode',['live','sandbox'])->default('sandbox');
            $table->string('countryName')->default('United States of America');
            $table->string('currencyName')->default('USD');
            $table->string('currencyRatePerUSD')->nullable();
            $table->string('paypalClientId')->nullable();
            $table->string('paypalClientSecret')->nullable();
            $table->string('image')->default('default/paymentGetway/paypal.jpg');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paypals');
    }
};
