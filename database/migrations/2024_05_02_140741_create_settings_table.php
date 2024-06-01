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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->default('default/logo.png');
            $table->string('footerLogo')->default('default/footer-logo.png');
            $table->string('favicon')->default('favicon.png');
            $table->enum('topbar',['show','hide'])->default('show');
            //Social Login
            $table->enum('flstatus',['enable','disable'])->default('disable');
            $table->string('fbAppId')->nullable();
            $table->string('fbSecretKey')->nullable();
            $table->string('fbRedirectUrl')->nullable();
            $table->enum('glstatus',['enable','disable'])->default('disable');
            $table->string('glClientId')->nullable();
            $table->string('glSecretKey')->nullable();
            $table->string('glRedirectUrl')->nullable();
            //Fb Pixel
            $table->enum('fbPixelStatus',['enable','disable'])->default('disable');
            $table->string('fbAppIdPixel')->nullable();            
            //Google Analytic
            $table->enum('glanalyticStatus',['enable','disable'])->default('disable');
            $table->string('analiticTrackingId')->nullable();            
            //Google Recaptcha
            $table->enum('glrecaptchaStatus',['enable','disable'])->default('disable');
            $table->string('captchaSiteKey')->nullable();
            $table->string('captchaSecretKey')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
