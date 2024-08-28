<?php

namespace Database\Seeders;

use App\Models\sys\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::factory(10)->create();
    }
}
