<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function from()
    {
        return $this->belongsTo(User::class, from);
    }

    public function to()
    {
        return $this->belongsTo(User::class, 'to');
    }
}
