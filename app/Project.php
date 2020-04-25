<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    Protected $guarded= [];

    public function getRouteKeyName(){

        return ('url');
    }
}
