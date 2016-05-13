<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // 后台职位表
    //job_name 职位名称
    //regoin_name 地区名称
    //t_id 顶级分类
    //r_id 二级分类
    //o_id 职业名称
    //is_new 是否最新
    //is_hot 是否最热
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('j_id');
            $table->string("job_name",60);
            $table->string("regoin_name",60);
            $table->integer("t_id");
            $table->integer("r_id");
            $table->integer("o_id");
            $table->integer("is_new");
            $table->integer("is_hot");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job');
    }
}
