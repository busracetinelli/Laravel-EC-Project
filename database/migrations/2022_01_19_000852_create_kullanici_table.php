<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKullaniciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kullanici', function (Blueprint $table) {
            $table->increments('id')->start_from(1);
            $table->text('ad');
            $table->text('soyad');
            $table->text('mail');
            $table->text('tel_No');
            $table->text('k_Adi');
            $table->text('sifre');
            $table->integer('uyelik_Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici');
    }
}
