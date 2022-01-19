<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKullaniciAdresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kullanici_adres', function (Blueprint $table) {
            $table->increments('id')->start_from(1);
            $table->integer('k_Id');
            $table->integer('il_Id');
            $table->integer('ilce_Id');
            $table->text('posta_Kodu');
            $table->text('satir1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici_adres');
    }
}
