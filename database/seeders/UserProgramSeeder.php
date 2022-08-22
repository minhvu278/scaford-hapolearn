<?php

namespace Database\Seeders;

use App\Models\UserProgram;
use Illuminate\Database\Seeder;

class UserProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProgram::factory()->times(50)->create();
    }
}
