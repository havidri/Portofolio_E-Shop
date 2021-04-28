<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Confirm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_confirm', function (Blueprint $table){
            $table->increments('id_confirm');
            $table->string('id_user');
            $table->string('id_chckout');
            $table->string('invoice');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
