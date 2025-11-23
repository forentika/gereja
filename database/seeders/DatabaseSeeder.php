<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            FaqSeeder::class,
            JemaatSeeder::class,
            UserSeeder::class,
        ]);
    }
}
