<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
          'todo' => 'piano'
        ]);
        DB::table('todos')->insert([
          'todo' => 'cooking'
        ]);
        DB::table('todos')->insert([
          'todo' => 'sleep'
        ]);
    }
}
