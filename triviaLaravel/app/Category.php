<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function question() {
        return $this->belongsTo('App\Question', 'category_id');
    }
}
