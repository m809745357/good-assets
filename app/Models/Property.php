<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function path()
    {
        return '/properties/' . $this->id;
    }
}
