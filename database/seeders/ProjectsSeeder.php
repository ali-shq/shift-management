<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c = 0;

        while($c++ < 5) {
            Project::create([
                'name' => 'Project '.$c
            ]);
        }
    }
}
