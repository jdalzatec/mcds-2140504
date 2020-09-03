<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("games", function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("image")->default("imgs/no-game.png");
            $table->text("description");
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreignId("category_id")->constrained();
            $table->boolean("slider")->default(0);
            $table->float("price")->default(69.3);
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
        Schema::dropIfExists("games");
    }
}
