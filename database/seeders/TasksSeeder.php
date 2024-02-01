<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $project_ids = array_flip(Project::all(['id'])->pluck('id')->toArray());

        $tasks = [];

        foreach($project_ids as $project_id => &$priority) {

            ++$priority;

            $c = 0;

            while(++$c < 10) {

                $tasks[] = [
                    'project_id' => $project_id,
                    'priority' => $priority,
                    'title' => "Task $c $priority",
                    'description' => "Description for task $c $priority",
                    'created_at' => now(),
                    'updated_at' => now()
                ];
    
            }
    


        }

        Task::insert($tasks);

    }
}
