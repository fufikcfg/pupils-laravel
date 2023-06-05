<?php

use App\Models\Classes;
use App\Models\Students;
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
        $classA = factory(Classes::class)->state('class_a')->create();
        $classB = factory(Classes::class)->state('class_b')->create();
        $classC = factory(Classes::class)->state('class_c')->create();
        $classD = factory(Classes::class)->state('class_d')->create();
        factory(\App\Models\Students::class, 100)->create();
        factory(\App\User::class, 1)->create();
    }
}
