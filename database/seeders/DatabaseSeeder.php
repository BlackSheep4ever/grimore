<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        $this->call(FeatsSeeder::class);
        $this->call(ArmorsSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(WeaponsSeeder::class);
        $this->call(BackgroundSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(WpnPropertiesSeeder::class);
    }
}
