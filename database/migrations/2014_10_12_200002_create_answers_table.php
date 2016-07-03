<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('title');
            $table->boolean('is_true');
            $table->timestamps();
            $table->integer('quention_id')->unsigned();
        });
        Schema::table('answers', function($table) {
            
            $table->foreign('quention_id')->references('id')->on('quentions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
