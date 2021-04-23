<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $beers=['Heineken', 'Ceres', 'Moretti', 'Peroni', 'Best Brau', 'Ichnusa', 'Becks', 'Nastro Azzurro', 'Corona Extra', 'Krombacher', 'Tuborg'];
        foreach ($beers as $beer) {
        DB::table('beers')->insert([
            'name' => $beer,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        }
    }
}
