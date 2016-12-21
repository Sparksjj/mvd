<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenToPagesAndVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
        Schema::table('videos', function (Blueprint $table) {
            $table->integer('projector_id')->unsigned();
            $table->foreign('projector_id')->references('id')->on('projectors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign('book_id');
        });
        Schema::table('videos', function (Blueprint $table) {
            $table->dropForeign('projector_id');
        });
    }
}
