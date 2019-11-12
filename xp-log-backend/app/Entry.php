<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

    public function badges()
    {
      return $this->belongsToMany('App\Badge');
    }
}
