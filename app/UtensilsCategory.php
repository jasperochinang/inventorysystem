<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtensilsCategory extends Model
{
    public function utensils_category(){
		return $this->belongsTo(UtensilsCategory::class);
	}
}
