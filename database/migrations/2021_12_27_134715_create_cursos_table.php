<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nomedocurso', 45);
            $table->integer('qntmax');
            $table->string('descricao', 200);
            $table->dateTime('datacriacao')->useCurrent();
            $table->dateTime('dataupdate')->useCurrent();
            $table->string('categoria', 45);
            $table->float('mensalidade');
            $table->string('status', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}