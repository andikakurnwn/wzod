<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class DBUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([

            'role_id' => 1,
            'name' => 'Andika Kurniawan',
            'phone' => '081574083369',
            'email' => 'andikakurnwn@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}
