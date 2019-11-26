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

    function getEntry(entry_id){
      data = this.db.get('SELECT * FROM entries WHERE entry_id = entry_id')
      return data
    }

    function addEntry(){

    }
}
