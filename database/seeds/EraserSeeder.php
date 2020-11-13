<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EraserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('erasers')->insert([
            'amount' => 100
        ]);
    }
}
