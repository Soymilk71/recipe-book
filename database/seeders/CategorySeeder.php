<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create(['name' => 'Ontbijt']);
        category::create(['name' => 'Avondeten']);
        category::create(['name' => 'Lunch']);
        category::create(['name' => 'Dessert']);
        category::create(['name' => 'Voorgerecht']);
        category::create(['name' => 'Amuse']);
        category::create(['name' => 'Tussengerecht']);
        category::create(['name' => 'Soep']);
        category::create(['name' => 'Drinken']);
        category::create(['name' => 'Alcohol']);
        category::create(['name' => 'Vega']);
        category::create(['name' => 'Vegan']);
        category::create(['name' => 'Glutenvrij']);
        category::create(['name' => 'Lactosevrij']);
        category::create(['name' => 'Carnivoor']);
        category::create(['name' => 'Pesketarisch']);
        //
    }
}
