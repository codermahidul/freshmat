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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('shortTitle');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('quote');
            $table->string('listItemOne');
            $table->string('listItemTwo');
            $table->string('listItemThree');
            $table->string('listItemFour');
            $table->string('f1icon');
            $table->string('f1title');
            $table->text('f1description');
            $table->string('f2icon');
            $table->string('f2title');
            $table->text('f2description');
            $table->string('f3icon');
            $table->string('f3title');
            $table->text('f3description');
            $table->string('w1title');
            $table->string('w1description');
            $table->string('w2title');
            $table->string('w2description');            
            $table->string('w3title');
            $table->string('w3description');            
            $table->string('w4title');
            $table->string('w4description');
            $table->string('c1icon');
            $table->string('c1number');
            $table->string('c1text');
            $table->string('c2icon');
            $table->string('c2number');
            $table->string('c2text');
            $table->string('c3icon');
            $table->string('c3number');
            $table->string('c3text');
            $table->string('c4icon');
            $table->string('c4number');
            $table->string('c4text');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
