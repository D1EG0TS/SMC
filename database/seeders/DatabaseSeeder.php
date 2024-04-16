<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
   
        $user = new User;
        $user->name = 'Administrador';
        $user->email = 'administrador@diego.com';
        $user->password = 'administrador123';
        $user->role = 'admin';

        $user->save();
    }
}
