<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreOptionsToDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->timestamp('get_data')->nullable();
            $table->string('get_number');
            $table->timestamp('fzk_data')->nullable();
            $table->string('fzk_number');
            
            $table->string('size');
            $table->integer('weight');
            $table->integer('parts_count');
            $table->string('storage');
            $table->string('material');
            $table->string('safety');
            $table->string('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {            
            $table->dropColumn('get_data');
            $table->dropColumn('get_number');
            $table->dropColumn('fzk_data');
            $table->dropColumn('fzk_number');            
            $table->dropColumn('size');
            $table->dropColumn('weight');
            $table->dropColumn('parts_count');
            $table->dropColumn('storage');
            $table->dropColumn('material');
            $table->dropColumn('safety');
            $table->dropColumn('author');
        });
    }
}
