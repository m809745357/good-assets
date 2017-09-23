<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile', 'mobile', 'gender', 'headimgurl'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function path()
    {

        return 'users/' . $this->id;
    }

    public function favorites()
    {
        return $this->hasMany(Models\Favorite::class, 'user_id')->with('favorited');
    }

    public function billing()
    {
        return $this->hasOne(Models\Billing::class, 'user_id');
    }

    public function myBilling() {
        if (! $this->billing()->exists()) {
            $this->billing()->create(['user_id' => $this->id]);
            return $this->billing;
        }
        return $this->billing;
    }
}
