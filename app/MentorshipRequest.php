<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MentorshipRequest extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function interests()
    {
        return $this->hasMany(Interest::class);
    }
}
