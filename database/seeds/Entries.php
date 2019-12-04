<?php

use Illuminate\Database\Seeder;

class Entries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('entries')->insert([
        'badge_id' => Int::random(10),
        'media_id' => Int::random(10).'@gmail.com',
        'student_id' => Int::random(10),
        'body' => Str::random(10),
      ]);
    }
}
