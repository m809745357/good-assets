<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function path()
    {
        return "/projects/{$this->id}";
    }

    public function isCompleteChips()
    {
        return $this->status === 1;
    }
}
