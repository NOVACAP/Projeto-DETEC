<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSectionsprocessToProcesstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process', function (Blueprint $table) {
           $table->unsignedBigInteger('idSectionProcess');
            $table->foreign('idSectionProcess')->references('id')->on('demandsEmployers')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('process', function (Blueprint $table) {
            $table->dropForeign('process_idSectionProcess_foreign'); //[table]_[column]_foreign
            $table->dropColumn('idSectionProcess');

        });
    }
}
