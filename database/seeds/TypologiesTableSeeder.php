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
                'image' => '1bHQflpj4uhmW2ntZKmDd_hK_vcNg-y_w'
            ],
            [
                'name' => 'italiano',
                'image' => '1QA4EgXEzAi35UGk8mxporB7hY-P0nxep'
            ],
            [
                'name' => 'dessert',
                'image' => '1aQ2i91S1PiAKVpCh-EDsE6N3ByHQo0a5'
            ],
            [
                'name' => 'sushi',
                'image' => '18tIe9EBHznAWYVa9p710GL-u3yCkJuyE'
            ],
            [
                'name' => 'poke', 
                'image' => '1pImPM2fk8Q9eK5I4p1defUn9hbquNWus'
            ],
            [
                'name' => 'americano', 
                'image' => '1ceo7PvgNrDwpZh6XePBC46ekhu-91ffu'
            ],
            [
                'name' => 'gelato', 
                'image' => '15DNT3aljcHnd6wlL_-yQOFVbgHpDBkhx'
            ],
            [
                'name' => 'kebab', 
                'image' => '1RRe_f5jtf4ElASDMnxs5-7ZOzbJz5KiO'
            ],
            [
                'name' => 'sandwich', 
                'image' => '1HN_PrTjXZrQyksBeDz-n3FrS8G4WIiCJ'
            ],
            [
                'name' => 'hamburger', 
                'image' => '1ceo7PvgNrDwpZh6XePBC46ekhu-91ffu'
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
