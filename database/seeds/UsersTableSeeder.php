<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

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
                'name' => 'Juryiii',
                'email' => 'juryii@gmail.com',
                'password' => bcrypt('prova123'),
                'address' => 'via 1',
                'p_iva' => '12345678828',
                'image' => 'uploads/jury.jpeg',
                'phone' => '1234567890',
            ]
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
        }
    }
}
