<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Model::unguard();*/

        $this->call(TaskTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(UserTableSeeder::class);

        /*Model::reguard();*/
    }
}
