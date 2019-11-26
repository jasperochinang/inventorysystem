<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentsCategory extends Model
{
    public function equipments_category(){
		return $this->belongsTo(EquipmentsCategory::class);
	}
}
