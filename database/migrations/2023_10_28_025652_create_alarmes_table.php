<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlarmesTable extends Migration
{
    public function up()
    {
        Schema::create('alarmes', function (Blueprint $table) {
            $table->bigIncrements('id_alarme');
            $table->unsignedBigInteger('id_equipamento');
            $table->string('descricao');
            $table->enum('classificacao', ['Urgente', 'Emergente', 'Ordinário']);
            $table->timestamps();

            $table->foreign('id_equipamento')->references('id_equipamento')->on('equipamentos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alarmes');
    }
}