<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Replacement;
use App\Models\Appliance;
use App\Models\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }

    public function runWithReplacementsAndAppliances(): void
    {
        $this->call([
            Replacement::class,
            Appliance::class,
            Brand::class,
        ]);
    }

}
