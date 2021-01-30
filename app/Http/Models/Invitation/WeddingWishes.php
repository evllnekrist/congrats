<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class WeddingWishes extends Model
{
    protected $table = 'tr_wedding_wishes';
    protected $fillable = [
                            'code',
                            'sender_name',
                            'message',
                        ];

    public function wedding(){
        return $this->belongsTo('App\Http\Models\Invitation\Wedding', 'code');
    }
}
