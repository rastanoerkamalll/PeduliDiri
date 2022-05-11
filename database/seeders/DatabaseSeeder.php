<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Perjalanan;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10) . '@gmail.com',
        //     'password' => bcrypt('sdntilil4')
        // ]);

        Perjalanan::factory(30)->create();
    }
}
