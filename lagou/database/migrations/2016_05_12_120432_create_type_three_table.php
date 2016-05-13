<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeThreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //职位表
    //occupation 为相对应的职位
    //r_id 为二级分类的id
    public function up()
    {
        Schema::create('type_three', function (Blueprint $table) {
            $table->increments('o_id');
            $table->string("occupation",60);
            $table->integer("r_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('type_three');
    }
}
