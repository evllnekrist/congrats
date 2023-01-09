<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class EventEvents extends Model
{
    protected $table = 'ms_event_detail_event';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function event(){
        return $this->belongsTo('App\Http\Models\Invitation\Event', 'code');
    }
}
