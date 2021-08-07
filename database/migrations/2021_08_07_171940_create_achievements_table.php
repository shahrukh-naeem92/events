<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() : void
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('required_number_of_tasks');
            $table->unsignedBigInteger('achievement_group_id');
            $table->tinyInteger('order');
            $table->timestamps();
            $table->foreign('achievement_group_id')->references('id')->on('achievement_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('achievements');
    }
}
