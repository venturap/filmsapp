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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('poster')->nullable();
            $table->date('release_date');
            $table->integer('duration');
            $table->integer('rating');
            $table->integer('budget')->nullable();
            $table->integer('revenue')->nullable();
            $table->timestamps();
            $table->foreignId('director_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
