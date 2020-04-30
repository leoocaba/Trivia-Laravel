<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function categories() {
        return $this->belongsTo('App\Category');
    }
}
