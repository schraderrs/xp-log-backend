<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
          'name' => Str::random(10),
          'email' => Str::random(10).'@gmail.com',
          'password' => Str::random(10),
        ]);
    }
}
