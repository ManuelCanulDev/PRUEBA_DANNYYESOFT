<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_users', function (Blueprint $table) {
            $table->id();
            $table->string('username',45);
            $table->string('email',45);
            $table->string('S_Nombre',45)->nullable();
            $table->string('S_Apellidos',45)->nullable();
            $table->string('S_FotoPerfilUrl',255)->nullable();
            $table->tinyInteger('S_Activo')->default(1);
            $table->string('password',100);
            $table->rememberToken();
            $table->string('email_verified_at',191);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('tw_rol_id')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_users');
    }
}
