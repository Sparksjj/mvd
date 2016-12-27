<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('document_id_to')->unsigned();
            $table->foreign('document_id_to')->references('id')->on('documents');
            $table->integer('document_id_from')->unsigned();
            $table->foreign('document_id_from')->references('id')->on('documents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents_documents');
    }
}
