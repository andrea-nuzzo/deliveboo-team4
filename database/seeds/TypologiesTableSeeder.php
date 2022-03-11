<?php

use Illuminate\Database\Seeder;
use App\Typology;
use Illuminate\Support\Str;

class TypologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typologies = [
            'pizza', 'italiano', 'sushi', 'dessert', 'poke', 'americano', 'gelato', 'kebab', 'sandwich','hamburger'
        ];

        foreach ($typologies as $typology) {
            $newTypology = new Typology();
            $newTypology->type = $typology;
            $newTypology->slug = Str::of($newTypology->type)->slug('-');
            // $newTypology->image = ####; 
            $newTypology->save();
        }
    }
}
