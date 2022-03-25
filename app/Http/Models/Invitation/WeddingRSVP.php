<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class WeddingRSVP extends Model
{
    protected $table = 'tr_wedding_rsvp';
    protected $fillable = [
                            'code',
                            'sender_name',
                            'sender_address',
                            'attend',
                        ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function wedding(){
        return $this->belongsTo('App\Http\Models\Invitation\Wedding', 'code');
    }
}
