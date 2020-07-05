<?php

use Illuminate\Database\Seeder;

class ReceptenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('recepten')->insert([
        "src" => "/img/1.png",
        "ingrredients" => "",
        "description" => "",
      ]);

      DB::table('recepten')->insert([
        "src" => '/img/1.png',
        "ingrredients" => "",
        "description" => "",
      ]);

      DB::table('recepten')->insert([
        "src" => '/img/1.png',
        "ingrredients" => "",
        "description" => "",
      ]);

      DB::table('recepten')->insert([
        "src" => '/img/1.png',
        "ingrredients" => "",
        "description" => "",
      ]);

      DB::table('recepten')->insert([
        "src" => '/img/1.png',
        "ingrredients" => "",
        "description" => "",
      ]);

      DB::table('recepten')->insert([
        "src" => '/img/1.png',
        "ingrredients" => "",
        "description" => "",
      ]);

      DB::table('recepten')->insert([
        "src" => '/img/1.png',
        "ingrredients" => "",
        "description" => "",
      ]);

      DB::table('recepten')->insert([
        "src" => '/img/1.png',
        "ingrredients" => "",
        "description" => "",
      ]);
    }
}
