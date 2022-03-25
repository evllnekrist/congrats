<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class WeddingLogs extends Model
{
    protected $table = 'tr_wedding_management_log';
    const CREATED_AT = 'created_at';

    public function wedding(){
        return $this->belongsTo('App\Http\Models\Invitation\Wedding', 'code');
    }
}
