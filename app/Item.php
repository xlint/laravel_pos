<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     *  Get the category for the items
     * 	Mendapatkan kategori dari item tertentu
     */

   	public function category(){
   		return $this->belongsTo('App\Category');
   	}
}
