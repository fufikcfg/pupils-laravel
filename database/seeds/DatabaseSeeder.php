<?php

use App\Models\Classes;
use App\Models\Role as RoleAlias;
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
//        factory(Classes::class)->state('class_a')->create();
//        factory(Classes::class)->state('class_b')->create();
//        factory(Classes::class)->state('class_c')->create();
//        factory(Classes::class)->state('class_d')->create();

//        factory(RoleAlias::class)->state('role_a')->create();
//        factory(RoleAlias::class)->state('role_b')->create();
        factory(RoleAlias::class, 1)->create();

        factory(\App\User::class, 1)->create();

        factory(Students::class, 1)->create();
    }
}
