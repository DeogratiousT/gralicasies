<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('author_id');
            $table->mediumText('description');
            $table->mediumText('ingredients');
            $table->integer('number_of_ingredients');
            $table->longText('directions'); // Preparation steps
            $table->integer('people'); // Number of people to be fed by the meal
            $table->integer('video_views')->nullable(); // Number of Views
            $table->unsignedBigInteger('category_id');
            $table->integer('preparation_time'); // In minutes
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
        Schema::dropIfExists('recipes');
    }
}
