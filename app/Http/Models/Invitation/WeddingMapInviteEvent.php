<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class WeddingMapInviteEvent extends Model
{
    protected $table = 'ms_wedding_detail_invite_event_map';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function wedding(){
        return $this->belongsTo('App\Http\Models\Invitation\Wedding', 'code');
    }
}
