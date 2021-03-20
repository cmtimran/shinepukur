<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   public function blogcategories(){
    return $this->belongsTo('App\Blogcategory', 'blogcategory_id');
	}
}
