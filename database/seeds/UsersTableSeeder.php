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
            [
                'name' => 'Anais Restaurant',
                'email' => 'bistrotrestaurant@gmail.com',
                'password' => bcrypt('prova123'),
                'address' => 'via 1',
                'p_iva' => '22334455668',
                'image' => 'uploads/jury.jpeg',
                'phone' => '1234567890',
                'typologies' => 
                    [
                        '1',
                        '3',
                        '7'
                    ]
            ],
        ];


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
            
            $newUser->typologies()->attach($user['typologies']);
        }
    }
}
