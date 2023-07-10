<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao')->default('ola spu padao');
            $table->tinyInteger('status')->default(1);
            $table->dateTime('cadastrado')->default('2023-01-01');
            $table->dateTime('alterado')->default('2023-01-01');
            $table->foreignId('usuario_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->unsigned()->nullable();
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
        Schema::dropIfExists('tarefas');
    }
};
