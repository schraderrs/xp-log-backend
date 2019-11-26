<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  public function teachers()
  {
    return $this->belongsToMany('App\Teacher');
  }

  protected $fillable = [
      'name', 'email', 'password', 'biography'
  ];
}
