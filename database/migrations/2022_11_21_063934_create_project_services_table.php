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
        Schema::create('project_services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('clientname')->nullable();
            $table->string('shortdescription')->nullable();
            $table->string('thumbnail')->nullable();
            $table->bigInteger('servicesid')->nullable();
            $table->string('completiondate')->nullable();
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
        Schema::dropIfExists('project_services');
    }
};
