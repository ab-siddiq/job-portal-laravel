<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function jobs(){
        return $this->hasMany('App\Job');
    }
}
