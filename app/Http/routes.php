<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('pivot', function () {
    $user = \App\User::find(1);
    echo '<h3>Usuario '. $user->name .'</h3>';

    //obteniendo los menus asociados al User
    foreach ($user->menu as $menu) {
    	echo '<br>--------------------<br>';
        //obteniendo los datos de un menu específico
        echo $menu->name;
        echo $menu->url.' -- ';
        //obteniendo datos de la tabla pivot por menu
        echo $menu->pivot->task_id.' -- ';
        echo $menu->pivot->status;
    }

    echo '<br/><h3>Tareas del usuario</h3>';
    //obteniendo los tasks asociados al User
    foreach ($user->tasks as $task) {
        echo '<br>-------<br>';
        //obteniendo los datos de un task específico
        echo $task->name .' -- ';
        //obteniendo datos de la tabla pivot por task
        echo $task->pivot->menu_id .' -- ';
        echo $task->pivot->status;
    }
});

/*
	https://styde.net/pivot-tables-con-eloquent-en-laravel/
	Opcion para Guardar
	$user= User::find(1);

	$user->tasks()->attach('Aquí id task',['menu_id'=>'id menu', 'status'=>true]);
*/


/*
-----------------------------------------------------------------------
||
||	Explicacion detalada de relacion n-n.  Crear y eliminar registros relacionados
||	http://codehero.co/laravel-4-desde-cero-eloquent-orm-ii/
||
-----------------------------------------------------------------------
*/