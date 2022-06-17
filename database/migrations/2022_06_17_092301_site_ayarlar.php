<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SiteAyarlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_ayarlar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_adi', 450);
            $table->string('site_baslik', 450);
            $table->string('site_keywords', 300);
            $table->string('site_meta_aciklama', 300);
            $table->string('site_adres', 512);
            $table->string('site_telefon', 25);
            $table->string('site_mail', 128);
            $table->string('logo', 1024);
            $table->string('favicon', 1024);
            $table->text('site_header_tag');
            $table->text('site_body_tag');
            $table->string('site_facebook', 255);
            $table->string('site_instagram', 255);
            $table->string('site_twitter', 255);
            $table->string('site_youtube', 255);
            $table->boolean('slider_aktif_pasif')->default(0);
            $table->boolean('banners_aktif_pasif')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
