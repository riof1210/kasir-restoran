<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Larapus";
        $adminRole->save();


        //membuat Sample Admin
        $userAdmin = new User;
        $userAdmin->name = "Admin Larapus";
        $userAdmin->email = "adminlarapus@gmail.com";
        $userAdmin->password = bcrypt("rahasia");
        $userAdmin->save();
        $userAdmin->attachRole($adminRole);

    }
}
