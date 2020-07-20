<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Processo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processo', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('parametro_1');
            $table->string('parametro_2');
            $table->string('justificativa_k');
            $table->string('justificativa_l');
            $table->timestamps();
        });
        Schema::table('processo', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processo');
    }
}
