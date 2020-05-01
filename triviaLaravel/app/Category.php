<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function questions() {
        return $this->hasMany('App\Question', 'category_id')->withPivot();
    }
}
