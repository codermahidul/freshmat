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
        Schema::create('comments_replies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commentId');
            $table->unsignedBigInteger('userId');
            $table->text('reply');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('commentId')->references('id')->on('comments')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('userId')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_replies');
    }
};
