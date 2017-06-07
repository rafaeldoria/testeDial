<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelaPessoa extends Migration
{
  
    public function up()
    {
        Schema::create('pessoa', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->string('email', 255);
            $table->string('telefoneCelular', 15);
            $table->date('datanascimento');
            $table->integer('cep');
            $table->string('endereco', 255);            
            $table->string('bairro', 255);
            $table->string('cidade', 255);
            $table->string('estado', 2);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('pessoa');
    }
}
