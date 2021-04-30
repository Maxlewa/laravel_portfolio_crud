<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persos', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 20);
            $table->string('prenom', 20);
            $table->string('job', 50);
            $table->string('website', 40);
            $table->integer('phone');
            $table->string('city', 30);
            $table->string('country', 30);
            $table->integer('age');
            $table->string('degree', 20);
            $table->string('email', 40);
            $table->text('intro');
            $table->text('bio');
            $table->text('italic');
            $table->string('state', 40);
            $table->string('image', 60);
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
        Schema::dropIfExists('persos');
    }
}
