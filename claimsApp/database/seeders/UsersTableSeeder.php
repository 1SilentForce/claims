<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array();
        for($i=0; $i<=10; $i++) {
            $users[] = array(
                "Name" => Str::random(7),
                "FirstName" => Str::random(9),
                "Email" => Str::slug(Str::random(5))."@gmail.com",
                "Password" => bcrypt(54336642)
            );
        }
        DB::table("users")->insert($users);
        // можно использовать и фабрику... но при условии, что не нужен будет паоль для логина.
    }
}
