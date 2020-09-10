<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("games")->insert([
            "name" => "GTA",
            "description" => "This is a cool game",
            "user_id" => 1,
            "category_id" => 1,
            "slider" => 1,
            "price" => 100,
            "created_at" => now()
        ]);

        $game = new Game();
        $game->name = "Halo";
        $game->description = "This is a cool game";
        $game->user_id = 2;
        $game->category_id = 2;
        $game->slider = 1;
        $game->price = 30;
        $game->save();
    }
}
