<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dateInput');
            $table->date('dateDist');
            $table->date('delivery');
            $table->string('address');
            $table->timestamps();

            $table->unsignedBigInteger('idThematicAreas');
            $table->unsignedBigInteger('idEmployers');
            $table->unsignedBigInteger('idProcess');
            $table->unsignedBigInteger('idAdministrativeRegions');
            $table->unsignedBigInteger('idActivitys');
           // $table->unsignedBigInteger('idDemandsEmployers');
            $table->unsignedBigInteger('idInteresteds');
            $table->unsignedBigInteger('idTechniqueAreas');


            $table->foreign('idThematicAreas')->references('id')->on('thematicAreas')->onDelete('cascade');
            $table->foreign('idEmployers')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('idProcess')->references('id')->on('process')->onDelete('cascade');
            $table->foreign('idAdministrativeRegions')->references('id')->on('administrativeRegions')->onDelete('cascade');
            $table->foreign('idActivitys')->references('id')->on('activitys')->onDelete('cascade');
            
            $table->foreign('idInteresteds')->references('id')->on('interesteds')->onDelete('cascade');
            $table->foreign('idTechniqueAreas')->references('id')->on('techniqueAreas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demands');
    }
}
