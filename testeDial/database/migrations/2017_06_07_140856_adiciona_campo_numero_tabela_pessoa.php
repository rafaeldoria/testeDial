<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCampoNumeroTabelaPessoa extends Migration
{
    
    public function up()
    {
        Schema::table('pessoa', function($table){
           $table->string('numero',100);
        });
    }

    
    public function down()
    {
        Schema::table('pessoa', function($table){
            $table->dropColumn('numero');
        });
    }
}
