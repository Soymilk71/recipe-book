<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use FakerRestaurant\Provider\en_US\Restaurant as RestaurantProvider;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Heb de restaurant faker library gebruikt dus ik kan niet echt fake() gebruiken 
        $this->faker->addProvider(new RestaurantProvider($this->faker));

        return [
            //dan maar the long way $this->faker->method()
            'titel' => $this->faker->foodName(),
            'beschrijving' => $this->faker->text(maxNbChars: 40),
            'recept' => $this->faker->text(maxNbChars: 200),
            'category_id' => \App\Models\category::inRandomOrder()->first()->id,
        ];
    }
    /*
    wil je de factory gebruiken?

    Zal je eerst wat categorieen moeten toevoegen aan je andere table, want de factory haalt data op uit een foreign key
    gelukkig heb ik een seeder gemaakt (/database/seeders/CategorySeeder.php)
    Run deze met:
    
    php artisan db:seed --class=CategorySeeder

    doe daarna:

    php artisan tinker

    run daarna het commando:

    App\Models\Recipe::Factory()->create()

    dit genereert random set aan data. 
    als je meer wilt hebben moet je in de Factory() method een nummer meegeven!
    App\Models\Recipe::Factory(300)->create()
    dat is wat ik deed.

    weet niet wat er gebeurt als je 20000 intypt. ben eigenlijk wel benieuwd

    --- DOE DIT NIET ---
    Heb nog geen paginering toegevoegd dus mijn webpagina moet nu 20000 recepten inladen.
    */
}

