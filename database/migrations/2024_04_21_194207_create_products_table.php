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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('shortDescription');
            $table->longText('description')->nullable();
            $table->integer('regularPrice')->nullable();
            $table->integer('selePrice');
            $table->enum('unitType',['kg','gram','pics','dozen','liter']);
            $table->unsignedBigInteger('categoryId');
            $table->string('thumbnail');
            $table->string('sku');
            $table->string('tags')->nullable();
            $table->enum('status',['active','deactive'])->default('active');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('categoryId')->references('id')->on('product_categories')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
