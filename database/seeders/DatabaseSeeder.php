<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Branch;
use App\Models\Cat;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Branch::factory()->count(10)->create()
            ->each(function (Branch $branch) {
                Cat::factory()->for($branch)->count(random_int(1, 15))->create();
                Employee::factory()->for($branch)->count(random_int(1, 15))->create();
            });
    }
}
