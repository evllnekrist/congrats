<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $table = 'ms_wedding';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function rsvp(){
        return $this->hasMany('App\Http\Models\Invitation\WeddingRSVP','code','code');
    }
    public function wishes(){
        return $this->hasMany('App\Http\Models\Invitation\WeddingWishes','code','code');
    }
    public function event(){
        return $this->hasMany('App\Http\Models\Invitation\WeddingEvents','code','code');
    }
}
