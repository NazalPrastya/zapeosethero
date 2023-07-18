<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        // User::create([
        //     'name' => 'Nazal Gusti Prastya',
        //     'kelamin' => 'Laki-laki',
        //     'email' => 'nazalprastya@gmail.com',
        //     'instagram' => 'nzlprst',
        //     'biodata' => 'saya lahir di sana dan berkembang disini dan akan kembali kesana saat waktunya telah tiba ya begitulah kehidpan gweh',
        //     'password' => bcrypt('password'),
        //     'image' => '/murid/nazal.jpg'
        // ]);

        // User::create([
        //     'name' => 'Pasha Mauludfi Lesmana',
        //     'kelamin' => 'Laki-laki',
        //     'email' => 'pmauludfi@gmail.com',
        //     'instagram' => '_lesmana15',
        //     'biodata' => 'aku adalah anak terpintar di smkn 1 ciomas dan aku berusaha untuk membantai dunia ini agar aku dapat hidup bebas di dunia ini ',
        //     'password' => bcrypt('password'),
        //     'image' => '/murid/pasha.jpg'
        // ]);

        // User::create([
        //     'name' => 'Sayyid Alwan',
        //     'kelamin' => 'Laki-laki',
        //     'email' => 'alwan@gmail.com',
        //     'instagram' => 'alwannlagi',
        //     'biodata' => 'saya lahir di sana dan berkembang disini dan akan kembali kesana saat waktunya telah tiba ya begitulah kehidpan gweh',
        //     'password' => bcrypt('password'),
        //     'image' => '/murid/alwan.jpg'
        // ]);

        // User::create([
        //     'name' => 'Hafizh Miftahul Fikry',
        //     'kelamin' => 'Laki-laki',
        //     'email' => 'hafizh@gmail.com',
        //     'instagram' => 'fuwamifu_',
        //     'biodata' => 'saya lahir di sana dan berkembang disini dan akan kembali kesana saat waktunya telah tiba ya begitulah kehidpan gweh',
        //     'password' => bcrypt('password'),
        //     'image' => '/murid/hafizh.jpg'
        // ]);

        Admin::create([
            'name' => 'Nazal',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('mxr532xm532')
        ]);

        Admin::create([
            'name' => 'Nazal',
            'email' => 'nazalganteng@gmail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
