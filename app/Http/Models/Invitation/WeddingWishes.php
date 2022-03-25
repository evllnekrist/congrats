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
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function wedding(){
        return $this->belongsTo('App\Http\Models\Invitation\Wedding', 'code');
    }
}
