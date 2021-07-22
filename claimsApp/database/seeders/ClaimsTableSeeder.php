<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ClaimsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $Claims = array();
        for($i=0; $i<=10; $i++) {
            $Claims[] = array(
                "user_id" => rand(1,10),
                "claim_text" => $faker->text(350),
            );
        }
        DB::table("claims")->insert($Claims);
    }
}
