<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Project_Name');
            $table->string('Project_Location');
            $table->decimal('Project_Value',9,2);
            $table->string('Implementing_Agency');
            $table->string('Development_Partner');
            $table->string('Project_Contractor');
            $table->enum('status', ['Not yet started','Postponed', 'Completed', 'On Progress']);
            $table->integer('Happy_votes');
            $table->integer('Sad_votes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
