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
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->id();
            $table->string('b1icon');
            $table->string('b2icon');
            $table->string('b3icon');
            $table->string('b4icon');
            $table->string('b1title');
            $table->string('b2title');
            $table->string('b3title');
            $table->string('b4title');
            $table->string('b1text');
            $table->string('b2textOne');
            $table->string('b2textTwo')->nullable();
            $table->string('b3textOne');
            $table->string('b3textTwo')->nullable();
            $table->string('b4textOne');
            $table->string('b4textTwo')->nullable();
            $table->string('b4textUrlOne');
            $table->string('b4textUrlTwo');
            $table->string('image');
            $table->string('googleMap',1000);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_pages');
    }
};
