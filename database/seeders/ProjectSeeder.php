<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        for ($i=0; $i <= 10; $i++) { 
            $elem = new Project();
            $elem -> project_title=fake()->domainName();
            $elem -> url=fake()->url();
            $elem -> description=fake()->paragraph();
            $elem -> date_creation=fake()->date();
            $elem -> save();
        }
    }
}
