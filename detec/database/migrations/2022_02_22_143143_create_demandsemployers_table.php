<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandsemployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandsEmployers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idDemands');
            $table->unsignedBigInteger('idEmployers');

            $table->foreign('idDemands')->references('id')->on('demands')->onDelete('cascade');
            $table->foreign('idEmployers')->references('id')->on('employers')->onDelete('cascade');
           
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandsemployers');
    }
}
