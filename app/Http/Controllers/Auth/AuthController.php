<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    protected $weixinUser;

    protected $where;

    public function oauth(Request $request)
    {
        return \Socialite::with('weixin')->redirect();
    }

    public function callback(Request $request)
    {
        $oauthUser = \Socialite::with('weixin')->user();

        dump($oauthUser->user);

        $this->weixinUser = $oauthUser->user;

        $this->where = array('unionid' => $this->weixinUser->unionid);

        Auth::login(
            User::where($this->where)->exists()
            ? $this->createWechatUser()
            : User::where($this->where)->get()
        );

        return redirect('/home');
    }

    protected function createWechatUser()
    {
        return User::fill([
            'openid' => $this->weixinUser->openid,
            'unionid' => $this->weixinUser->unionid,
            'name' => $this->weixinUser->nickname,
            'headimgurl' => $this->weixinUser->headimgurl,
            'gender' => $this->weixinUser->sex
        ])->save() :
    }
}
