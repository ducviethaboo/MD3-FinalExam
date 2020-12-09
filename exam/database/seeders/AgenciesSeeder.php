<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('agencies')->insert([
            'agencyName' => 'aaa',
            'agencyPhone' => 'aaa',
            'agencyEmail' => 'aaa',
            'agencyManager' => 'aaa',
            'status' => 'aaa',
        ]);
    }
}
