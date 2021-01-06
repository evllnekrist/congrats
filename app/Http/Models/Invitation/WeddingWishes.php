<?php

namespace App\Http\Models\Invitation;

use Illuminate\Database\Eloquent\Model;

class WeddingWishes extends Model
{
    protected $table = 'tr_wedding_wishes';

    // public function member(){
    //     return $this->belongsTo('App\Http\Models\Member', 'card_id');
    // }
    // public function transaction(){
    //     return $this->hasOne('App\Http\Models\MemberTransaction','code','transaction_code');
    // }
}
