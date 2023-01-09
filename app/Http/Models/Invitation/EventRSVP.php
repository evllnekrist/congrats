<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class EventRSVP extends Model
{
    protected $table = 'tr_event_rsvp';
    protected $fillable = [
                            'code',
                            'sender_name',
                            'sender_address',
                            'attend',
                        ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function event(){
        return $this->belongsTo('App\Http\Models\Invitation\Event', 'code');
    }
}
