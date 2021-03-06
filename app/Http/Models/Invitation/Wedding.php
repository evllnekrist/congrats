<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $table = 'ms_wedding';

    public function rsvp(){
        return $this->hasMany('App\Http\Models\Invitation\WeddingRSVP','code','code');
    }
    public function wishes(){
        return $this->hasMany('App\Http\Models\Invitation\WeddingWishes','code','code');
    }
}
