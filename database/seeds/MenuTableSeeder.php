<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i < 8; $i++) {
        	Menu::create([
        		'name' => 'Menu '.$i,
        		'url' => 'https://localhost/pruebas/menu_'.$i,
    		]);
        }
    }
}
