<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarRelacionamentoProdutoCategoria extends Migration
{

    public function up(){
        Schema::table('produtos', function ($table) {
            $table->integer('categoria_id')->default(1);            
        });
    }

    public function down(){
        Schema::table('produtos', function ($table) {
            $table->dropColumn('categoria_id');            
        });
    }
}
