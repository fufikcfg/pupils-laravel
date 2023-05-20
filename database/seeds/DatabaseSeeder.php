<?php

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
//        factory(\App\Models\Students::class, 100)->create();
        factory(\App\User::class, 1)->create();
    }
}
