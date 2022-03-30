<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class WeddingInvites extends Model
{
    protected $table = 'ms_wedding_detail_invite';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function wedding(){
        return $this->belongsTo('App\Http\Models\Invitation\Wedding', 'code');
    }
}
