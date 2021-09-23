<?php

namespace App\Models;

use App\Models\Question;
use App\Models\User;
use App\Models\Like;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function like()
    {
        return $this->hashMany(Like::class);
    }
}
