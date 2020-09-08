<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "fullname" => "Juan David Alzate Cardona",
            "email" => "jdalzatec@unal.edu.co",
            "phone" => 18000117711,
            "birthdate" => "2020-12-12",
            "gender" => "Male",
            "address" => "street 20 Arroway",
            "password" => bcrypt("admin"),
            "created_at" => now()
        ]);

        $user = new User();
        $user->fullname = "Chuleta asesina";
        $user->email = "chuleta@gmail.com";
        $user->phone = 3245678909;
        $user->birthdate = "1990-10-10";
        $user->gender = "Male";
        $user->address = "street happyland";
        $user->password = bcrypt("amiguito");
        $user->save();
    }
}
