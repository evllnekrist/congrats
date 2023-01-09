<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class EventWishes extends Model
{
    protected $table = 'tr_event_wishes';
    protected $fillable = [
                            'code',
                            'sender_name',
                            'message',
                        ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function event(){
        return $this->belongsTo('App\Http\Models\Invitation\Event', 'code');
    }
}
