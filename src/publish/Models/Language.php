<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function lang()
    {
    	return $this->belongsTo('App\Lang','lang');
    }
}
