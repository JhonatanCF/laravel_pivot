<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];
    //
    public function users($value='')
    {
        return $this->belongsToMany('\App\User', 'menu_task_user')
            ->withPivot('menu_id','status');
    }

    public function menu() {
        return $this->belongsToMany('\App\Menu','menu_task_user')
            ->withPivot('user_id','status');
    }
}
