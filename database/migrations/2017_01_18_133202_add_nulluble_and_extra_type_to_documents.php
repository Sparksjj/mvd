<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullubleAndExtraTypeToDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
           /* 
            $table->string('get_number')->nullable()->change();
            $table->string('fzk_number')->nullable()->change();            
            $table->string('size')->nullable()->change();
            $table->integer('weight')->nullable()->change();
            $table->integer('parts_count')->nullable()->change();
            $table->string('storage')->nullable()->change();
            $table->string('material')->nullable()->change();
            $table->string('safety')->nullable()->change();
            $table->string('author')->nullable()->change();
            
            $table->text('description_ru')->nullable()->change();
            $table->text('description_en')->nullable()->change();*/
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
            
         /*   $table->string('get_number')->change();
            $table->string('fzk_number')->change();            
            $table->string('size')->change();
            $table->integer('weight')->change();
            $table->integer('parts_count')->change();
            $table->string('storage')->change();
            $table->string('material')->change();
            $table->string('safety')->change();
            $table->string('author')->change();
            $table->text('description_ru')->change();
            $table->text('description_en')->change();*/
        });
    }
}
