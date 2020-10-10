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
        //Primer parámetro es el nombre de la tabla que queremos que tenga en la bd
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            /*
            No genera una columna en sí
            Por ejemplo, laravel guarda la info de los usuarios que han visitado
            la página para visitas posteriores.
            //Específicamente para el botón "recuerda me"
            */
            $table->rememberToken();
            /*
            Como esta columna no estaba al inicio no puedo volver a realizar
            php artisan migrate
            porque no va a actualizar, revisar la docu para ver lo que procede
            */
            $table->integer('estado');
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
        Schema::dropIfExists('users');
    }
}
