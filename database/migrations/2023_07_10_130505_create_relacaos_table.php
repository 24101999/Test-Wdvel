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
        Schema::create('relacaos', function (Blueprint $table) {
            $table->id();
            $table->string('relacao')->unique();
            $table->timestamps();
        });
        Schema::create('relacaos_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('relacao')->unique();
            $table->foreignId("relacao_id")->constrained('relacaos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("usuario_id")->constrained('usuarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('relacaos_usuario');
        Schema::dropIfExists('relacaos');
    }
};
