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
        Schema::create('invoices_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('invoiceId');
            $table->string('quantity')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('productId')->references('id')->on('products')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('invoiceId')->references('id')->on('invoices')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices_products');
    }
};
