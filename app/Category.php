<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Get Children Category
    public function children(){
      return $this->hasMany(self::class, 'parent_id');
    }
}
