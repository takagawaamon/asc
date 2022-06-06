<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function users()   
    {
    return $this->hasMany('App\User');  
    }
    public function getByPosition(int $limit_count = 20)
    {
     return $this->users()->with('position')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
