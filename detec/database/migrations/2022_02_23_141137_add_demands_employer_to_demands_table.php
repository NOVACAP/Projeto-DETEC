<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDemandsEmployerToDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demands', function (Blueprint $table) {
            $table->unsignedBigInteger('idDemandsEmployers');
            $table->foreign('idDemandsEmployers')->references('id')->on('demandsEmployers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::table('demands', function (Blueprint $table) {
            $table->dropForeign('demands_idDemandsEmployers_foreign'); //[table]_[column]_foreign
            $table->dropColumn('idDemandsEmployers');
        });
    }
}
