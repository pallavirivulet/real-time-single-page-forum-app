<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Reply;
use App\Models\Category;

class Question extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hashMany(Reply::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
