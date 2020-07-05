<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('follow', function (Blueprint $table) {
            // $table->bigIncrements('follower_id');
            // $table->integer('followed_id')->unsigned();
            $table->bigIncrements('follower_id');
            $table->unsignedBigInteger('followed_id');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            // $table->foreign('follower_id')->references('id')->on('user');
            // $table->foreign('followed_id')->references('id')->on('user');
            // $table->unsignedBigInteger('follower_id')->constrained('user_table');
            // $table->unsignedBigInteger('followed_id')->constrained('user_table');
        });
        Schema::table('follow', function (Blueprint $table) {
            $table->foreign('follower_id')->references('id')->on('user');
            $table->foreign('followed_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follow');
    }
}
