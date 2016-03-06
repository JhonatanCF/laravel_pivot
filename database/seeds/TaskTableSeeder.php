<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([ 'name' => 'Formatear PC' ]);
        Task::create([ 'name' => 'Limpiar fisicamente el PC' ]);
        Task::create([ 'name' => 'Instalar SO' ]);
        Task::create([ 'name' => 'Instalar Juegos' ]);
        Task::create([ 'name' => 'Configurar impresora' ]);
    }
}
