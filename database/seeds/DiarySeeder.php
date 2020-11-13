<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diaries')->insert([
            'amount' => 100
        ]);
    }
}
