<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
