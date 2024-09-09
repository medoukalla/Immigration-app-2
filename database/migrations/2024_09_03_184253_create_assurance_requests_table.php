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
        Schema::create('assurance_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->default(null);
            $table->string('date', 50)->default(null);
            $table->string('sex', 10)->default(null);
            $table->string('phone', 50)->default(null);
            $table->string('email', 50)->default(null);
            $table->string('assurance', 50)->default(null);
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
        Schema::dropIfExists('assurance_requests');
    }
};
