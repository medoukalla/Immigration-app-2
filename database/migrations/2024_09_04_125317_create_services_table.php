<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('title', 250)->default(null);
            $table->string('mini_description', 250)->default(null);
            $table->string('icon', 250)->default(null);
            $table->string('image', 250)->default(null);
            $table->longText('content')->nullable();
            $table->string('slug', 250)->default(null);
            $table->string('active', 50)->default(null);
            $table->string('lang', 25)->default(null);
            $table->string('route_name', 50)->default(null);

            $table->timestamp('deleted_at')->nullable()->default(null);
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
        Schema::dropIfExists('services');
    }
}
