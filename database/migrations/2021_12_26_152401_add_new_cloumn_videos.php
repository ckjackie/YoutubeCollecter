<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewCloumnVideos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
          $table->integer('comment_id')->nullable();
          $table->integer('video_list_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('videos', function (Blueprint $table) {
        $table->dropColumn('comment_id');
    });
    }
}
