<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
  public function entries()
  {
    return $this->belongsToMany('App\Entry');
  }
}
