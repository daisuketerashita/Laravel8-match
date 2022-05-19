<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    public function toUserId()
    {
        return $this->belongsTo('App\Models\User','to_user_id','id');
    }

    public function fromUserId()
    {
        return $this->belongsTo('App\Models\User','from_user_id','id');
    }
}
