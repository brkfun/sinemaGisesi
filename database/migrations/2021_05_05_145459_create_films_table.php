<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_turu_id')->nullable();
            $table->text('kod')->index('film_kodu');
            $table->text('adi');
            $table->text('resim')->nullable();
            $table->text('yonetmen_adi')->nullable();
            $table->text('yonetmen_soyadi')->nullable();
            $table->text('suresi')->nullable();
            $table->dateTime('vizyon_tarihi')->nullable();
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
        Schema::dropIfExists('films');
    }
}
