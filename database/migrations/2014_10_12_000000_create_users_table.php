<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //integer unsigned increment
            $table->string('name'); //varchar 255char
            //$table->text('descripcion'); //texto mayor a 255char
            $table->string('email')->unique(); //No se puede repetir en la DB
            $table->timestamp('email_verified_at')->nullable();
            //Siempre que tengamos un campo que pueda quedar vacio debemos colocar el método nullable();
            $table->string('password');
            $table->rememberToken(); //Registra un token cuando colocamos el check de recordar credenciales
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
