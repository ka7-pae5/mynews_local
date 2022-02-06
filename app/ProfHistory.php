<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfHistory extends Model
{
    //
     protected $guarded = array('id');
     public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
    public function profhistories()
    {
        return $this->hasMany('App\ProfHistory');

    }
}
