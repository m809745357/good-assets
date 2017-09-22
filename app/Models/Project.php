<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $appends = ['isFavorited'];
    public function path()
    {
        return "/projects/{$this->id}";
    }

    public function isCompleteChips()
    {
        return $this->status === 1;
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favorited');
    }

    public function favorite()
    {
        $attributes = ['user_id' => auth()->id()];

        if (! $this->isFavorited($attributes)) {
            $this->favorites()->create($attributes);
        }
    }

    public function isFavorited($attributes)
    {
        return $this->favorites()->where($attributes)->exists();
    }

    public function getIsFavoritedAttribute()
    {
        return $this->isFavorited(['user_id' => auth()->id()]);
    }
}
