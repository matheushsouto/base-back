<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $modules = [
            ['id' => 34, 'name' => 'Stories', 'slug' => 'stories', 'menu' => 'ADMIN'],

        ];

        DB::table('modules')->insert($modules);
    }
}
