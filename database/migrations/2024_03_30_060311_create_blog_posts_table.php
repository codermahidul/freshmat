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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('categoryId');
            $table->string('title');
            $table->longText('description');
            $table->string('slug')->nullable();
            $table->string('thumbnail');
            $table->integer('react')->default(0);
            $table->string('seoTitle');
            $table->string('seoDescription');
            $table->enum('status',['publish','draft'])->default('publish');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('userId')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->foreign('categoryId')->references('id')->on('blog_categories')->onDelete('RESTRICT')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
