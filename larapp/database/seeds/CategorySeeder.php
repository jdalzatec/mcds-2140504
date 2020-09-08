<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name" => "my category",
            "description" => "this is just a category",
        ]);

        $category = new Category();
        $category->name = "another category";
        $category->description = "this is another category";
        $category->save();
    }
}
