<?php

use App\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
                'name' => 'Pinsa bufalotta',
                'ingredients' => 'Basilico fresco, mozzarella bufala, polpa pomodoro, pomodori confit',
                'description' => '',
                'price' => 6.90,
                'visible' => 1,
                'image' => 'uploads/pinsa-bufalotta.jpeg',
                // ognuno deve inserire lo user id del proprio Porca Vacca
                'user_id' => 4,
                'category_id' => null,
            ],
            [
                'name' => 'Angus Anto spacca',
                'ingredients' => 'Pane, anelli di cipolla, friarielli, hamburger di angus, mozzarella intera, anelli di peperoncino, pomodoro',
                'description' => '',
                'price' => 9.50,
                'visible' => 1,
                'image' => 'uploads/angus-anto-spacca.jpeg',
                // ognuno deve inserire lo user id del proprio Porca Vacca
                'user_id' => 4,
                'category_id' => null,
            ],
            [
                'name' => 'Crispy tacos',
                'ingredients' => 'Tortillas, insalata, pepite di pollo, pomodoro, salsa miky',
                'description' => '',
                'price' => 6.90,
                'visible' => 1,
                'image' => 'uploads/crispy-tacos.jpeg',
                // ognuno deve inserire lo user id del proprio Porca Vacca
                'user_id' => 4,
                'category_id' => null,
            ],
            [
                'name' => 'Chili hot dog',
                'ingredients' => 'Pane, BBQ, fagioli al chili, würstel gigante, bacon, tabasco',
                'description' => '',
                'price' => 6.50,
                'visible' => 1,
                'image' => 'uploads/chili-hot-dog.jpeg',
                // ognuno deve inserire lo user id del proprio Porca Vacca
                'user_id' => 4,
                'category_id' => null,
            ],
            [
                'name' => 'Gallotto',
                'ingredients' => 'Galletto intero, spezie piccanti, olio',
                'description' => '',
                'price' => 9.50,
                'visible' => 1,
                'image' => 'uploads/gallotto.jpeg',
                // ognuno deve inserire lo user id del proprio Porca Vacca
                'user_id' => 4,
                'category_id' => null,
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish = new Dish();
            $newDish->name = $dish['name'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->description = $dish['description'];
            $newDish->price = $dish['price'];
            $newDish->visible = $dish['visible'];
            $newDish->image = $dish['image']; 
            $newDish->user_id = $dish['user_id'];
            $newDish->category_id = $dish['category_id'];
            $newDish->save();
        }
    }
}
