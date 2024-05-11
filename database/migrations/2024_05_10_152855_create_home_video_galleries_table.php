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
        Schema::create('home_video_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('shortTitle');
            $table->string('offerText');
            $table->text('description')->nullable();
            $table->string('link');
            $table->string('thumbnail1');
            $table->string('video1');
            $table->string('thumbnail2');
            $table->string('video2');
            $table->string('thumbnail3');
            $table->string('video3');
            $table->string('thumbnail4');
            $table->string('video4');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_video_galleries');
    }
};
