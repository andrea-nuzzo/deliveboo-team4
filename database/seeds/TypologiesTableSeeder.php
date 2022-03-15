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
            [
                'name' => 'pizza',
                'image' => 'typologies/pizza.png'
            ],
            [
                'name' => 'italiano',
                'image' => 'typologies/pasta.png'
            ],
            [
                'name' => 'dessert',
                'image' => 'typologies/dessert.png'
            ],
            [
                'name' => 'sushi',
                'image' => 'typologies/sushi.png'
            ],
            [
                'name' => 'poke', 
                'image' => 'typologies/poke.png'
            ],
            [
                'name' => 'americano', 
                'image' => 'typologies/barbeque-1.png'
            ],
            [
                'name' => 'gelato', 
                'image' => 'typologies/ice-cream.png'
            ],
            [
                'name' => 'kebab', 
                'image' => 'typologies/kebab.png'
            ],
            [
                'name' => 'sandwich', 
                'image' => 'typologies/sandwich.png'
            ],
            [
                'name' => 'hamburger', 
                'image' => 'typologies/burgers-1.png'
            ],

        ];

        foreach ($typologies as $typology) {
            $newTypology = new Typology();
            $newTypology->type = $typology['name'];
            $newTypology->slug = Str::of($newTypology->type)->slug('-');
            $newTypology->image = $typology['image']; 
            $newTypology->save();
        }
    }
}
