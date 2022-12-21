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
        Schema::create('our_services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('shortdescription')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('projecctimage')->nullable();
            $table->string('projectdetails')->nullable();
            $table->string('challeges')->nullable();
            $table->string('solutions')->nullable();
            $table->string('projectimage1')->nullable();
            $table->string('projectimage2')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('our_services');
    }
};
