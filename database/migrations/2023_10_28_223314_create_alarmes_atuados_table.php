<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlarmesAtuadosTable extends Migration
{
    public function up()
    {
        Schema::create('alarmes_atuados', function (Blueprint $table) {
            $table->bigIncrements('id_alarme_atuado');
            $table->unsignedBigInteger('id_alarme');
            $table->dateTime('entrada');
            $table->dateTime('saida')->nullable();
            $table->string('status');
            $table->text('descricao_alarme');
            $table->text('descricao_equipamento');
            $table->timestamps();
            
            $table->foreign('id_alarme')->references('id_alarme')->on('alarmes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alarmes_atuados');
    }
}