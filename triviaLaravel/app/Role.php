<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
