<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $guarded = [];

    public function path()
    {
        return '/billings/' . $this->id;
    }
}
