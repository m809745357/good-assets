<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $guarded = [];

    public function path()
    {
        return "/favorites/" . $this->id;
    }

    public function favorited()
    {
        return $this->morphTo();
    }
}
