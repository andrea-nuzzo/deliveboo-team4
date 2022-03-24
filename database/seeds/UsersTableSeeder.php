<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use App\Typology;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // [
            //     'name' => 'Porca Vacca',
            //     'email' => 'porcavacca@gmail.com',
            //     'password' => bcrypt('prova123'),
            //     'address' => 'Via Marco Polo - c/o ipermercato Leone Agostini, Viareggio, 55049',
            //     'p_iva' => '22334455669',
            //     'image' => 'uploads/porca-vacca.jpeg',
            //     'phone' => '0564 28699',
            //     'typologies' => 
            //         [
            //             '6',
            //             '10',
            //         ]
            // ],
            // [
            //     'name' => 'Mondo Kebab',
            //     'email' => 'mondokebab@gmail.com',
            //     'password' => bcrypt('prova123'),
            //     'address' => 'Via Coppino 333, Viareggio, 55049',
            //     'p_iva' => '21334455669',
            //     'image' => 'uploads/mondo-kebab.jpeg',
            //     'phone' => '344 2677343',
            //     'typologies' => 
            //         [
            //             '1',
            //             '8',
            //         ]
            // ],
            // [
            //     'name' => 'Sakura Fusion',
            //     'email' => 'sakurafusion@gmail.com',
            //     'password' => bcrypt('prova123'),
            //     'address' => 'Viale Europa 29, Viareggio, 55049',
            //     'p_iva' => '21234455669',
            //     'image' => 'uploads/sakura-fusion.jpeg',
            //     'phone' => '0584 1640107',
            //     'typologies' => 
            //         [
            //             '4',
            //         ]
            // ],
            // [
            //     'name' => 'Dolce Mazzini',
            //     'email' => 'dolcemazzini@gmail.com',
            //     'password' => bcrypt('prova123'),
            //     'address' => 'Via Giusseppe Mazzini, 184, Viareggio, 55049',
            //     'p_iva' => '21231455669',
            //     'image' => 'uploads/dolce-mazzini.jpeg',
            //     'phone' => '350 9204721',
            //     'typologies' => 
            //         [
            //             '3',
            //             '1'
            //         ]
            // ],
            // [
            //     'name' => 'Mirice Poke - Pokeria',
            //     'email' => 'miricepoke@gmail.com',
            //     'password' => bcrypt('prova123'),
            //     'address' => "25 Piazza Massimo D'Azeglio, Viareggio, 55049",
            //     'p_iva' => '21231455969',
            //     'image' => 'uploads/mirice-poke.jpeg',
            //     'phone' => '0584 344567',
            //     'typologies' => 
            //         [
            //             '5',
            //         ]
            // ],
            // [
            //     'name' => 'Dolcemaro',
            //     'email' => 'dolcemaro@gmail.com',
            //     'password' => bcrypt('prova123'),
            //     'address' => "Via Giuseppe Mazzini, 110, Viareggio, 55049",
            //     'p_iva' => '91231455969',
            //     'image' => 'uploads/dolcemaro.jpeg',
            //     'phone' => '0584 1842096',
            //     'typologies' => 
            //         [
            //             '2',
            //             '7'
            //         ]
            // ],
            // [
            //     'name' => 'La Maison Del Tramezzino',
            //     'email' => 'lamaisondeltramezzino@gmail.com',
            //     'password' => bcrypt('prova123'),
            //     'address' => "Via San Martino 174, Viareggio, 55049",
            //     'p_iva' => '91931455969',
            //     'image' => 'uploads/tramezzino.jpeg',
            //     'phone' => '348 5841855',
            //     'typologies' => 
            //         [
            //             '9',
            //             '2'
            //         ]
            // ],
            [
                'name' => 'Oh My Chicken fast food',
                'email' => 'ohmychickenfastfood@gmail.com',
                'password' => bcrypt('prova123'),
                'address' => "Via M Coppino 247, Viareggio, 55049",
                'p_iva' => '91931455969',
                'image' => 'uploads/oh-my-chicken-fast-food.jpeg',
                'phone' => '348 9712879',
                'typologies' => 
                    [
                        '6',
                        '10'
                    ]
            ],
            [
                'name' => 'Alibaba - Ottimo Kebab',
                'email' => 'alibabaottimokebab@gmail.com',
                'password' => bcrypt('prova123'),
                'address' => "32 Via Giuseppe Zanardelli, Viareggio, 55049",
                'p_iva' => '91931455969',
                'image' => 'uploads/alibaba-ottimo-kebab.jpeg',
                'phone' => '345 3272248',
                'typologies' => 
                    [
                        '10',
                    ]
            ],
            [
                'name' => 'La Piazzetta Gelateria',
                'email' => 'lapiazzettagelateria@gmail.com',
                'password' => bcrypt('prova123'),
                'address' => "Via Battisti 116/118, Viareggio, 55049",
                'p_iva' => '91931455969',
                'image' => 'uploads/la-piazzetta-gelateria.jpeg',
                'phone' => '347 2261456',
                'typologies' => 
                    [
                        '3',
                        '7'
                    ]
            ],

        ];

        // americano , hamburger , kebab, pizza, sushi, dessert, poke, gelato

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = $user['password'];
            $newUser->address = $user['address'];
            $newUser->p_iva = $user['p_iva'];
            $newUser->image = $user['image'];
            $newUser->phone = $user['phone'];
            $newUser->slug = Str::of($newUser->name)->slug('-');

            $newUser->save();
            
            $newUser->typologies()->sync($user['typologies']);
        }
    }
}
