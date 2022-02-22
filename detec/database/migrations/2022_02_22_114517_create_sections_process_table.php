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
        Schema::create('sections_process', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Sections');
           
        });

        Schema::table('sections_process', function(Blueprint $table) {
            $table->foreign ('id_Sections')->references('id')->on('sections');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections_process');
    }
}
