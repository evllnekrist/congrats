<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'ms_event';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function rsvp(){
        return $this->hasMany('App\Http\Models\Invitation\EventRSVP','code','code');
    }
    public function wishes(){
        return $this->hasMany('App\Http\Models\Invitation\EventWishes','code','code');
    }
    public function event(){
        return $this->hasMany('App\Http\Models\Invitation\EventEvents','code','code');
    }
}
