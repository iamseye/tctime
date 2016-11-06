<?php

use Illuminate\Database\Seeder;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ages')->insert([
            'range' => 'under 18',
        ]);
        DB::table('ages')->insert([
            'range' => '18~35',
        ]);
        DB::table('ages')->insert([
            'range' => '35~65',
        ]);
        DB::table('ages')->insert([
            'range' => 'above 65',
        ]);
    }
}

