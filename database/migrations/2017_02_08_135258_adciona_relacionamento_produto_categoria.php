<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdcionaRelacionamentoProdutoCategoria extends Migration
{

    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->integer('categoria_id');
        });
    }

    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('categoria_id');
        });
    }
}
