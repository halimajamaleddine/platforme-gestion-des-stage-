<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satgiaire', function (Blueprint $table) {
            $table->id();
            $table->name('name');
            $table->prenom('prenom');
            $table->departement('departement');
            $table->email('email')->unique();
            $table->password('password');
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
        Schema::dropIfExists('satgiaire');
    }
};
