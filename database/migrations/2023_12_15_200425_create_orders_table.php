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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('prenom', 50);
            $table->string('nom_de_famille', 50);
            $table->string('email', 50);
            $table->string('numero', 50);
            $table->string('jour', 5);
            $table->string('mois', 5);
            $table->string('annee', 8);
            $table->string('pays', 50);
            $table->string('sexe', 8);
            
            $table->boolean('payed')->default(false);

            $table->unsignedBigInteger('house_id');

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
        Schema::dropIfExists('orders');
    }
};
