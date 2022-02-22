<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionsProcess', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idSections');
            $table->unsignedBigInteger('idProcess');

            $table->foreign('idSections')->references('id')->on('sections')->onDelete('cascade');
            $table->foreign('idProcess')->references('id')->on('process')->onDelete('cascade');
           
           
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectionsProcess');
    }
}
