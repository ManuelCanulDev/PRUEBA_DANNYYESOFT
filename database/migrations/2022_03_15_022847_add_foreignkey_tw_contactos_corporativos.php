<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyTwContactosCorporativos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tw_corporativos', function (Blueprint $table) {
            $table->foreignId('FK_Asignado_id');
            $table->foreign('FK_Asignado_id')->references('id')->on('tw_contactos_corporativos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tw_corporativos', function (Blueprint $table) {
            $table->dropColumn('FK_Asignado_id');
        });
    }
}
