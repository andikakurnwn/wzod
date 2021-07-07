<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DBRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([

            'slug' => 'super-admin',
            'name' => 'Super Admin'

        ]);

        Role::create([

            'slug' => 'admin',
            'name' => 'Admin'

        ]);

        Role::create([

            'slug' => 'member',
            'name' => 'Member'

        ]);
    }
}
