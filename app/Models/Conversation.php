<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function message()
    {
        return $this->hasMany(Message_store::class);

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
