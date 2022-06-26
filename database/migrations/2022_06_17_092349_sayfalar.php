<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sayfalar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayfalar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baslik', 300);
            $table->string('slug', 350);
            $table->string('kisa_aciklama', 300);
            $table->string('meta_etiketler', 300);
            $table->text('aciklama');
            $table->string('gorsel', 255);
            $table->integer('menu_id')->unsigned();
            $table->integer('ust_sayfa_id')->nullable();
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
            $table->foreign('ust_sayfa_id')->references('id')->on('sayfalar')->onDelete('cascade');
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
