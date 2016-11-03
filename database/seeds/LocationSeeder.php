<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => '舊城區 Downtown',
        ]);
        DB::table('locations')->insert([
            'name' => '南屯區 Nantun',
        ]);
        DB::table('locations')->insert([
            'name' => '草悟道區 Calligraphy Path',
        ]);
        DB::table('locations')->insert([
            'name' => '中西區 MidWest',
        ]);
        DB::table('locations')->insert([
            'name' => '霧峰區 Wufang',
        ]);

    }
}
