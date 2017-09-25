<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    public function oauth(Request $request)
    {
        return \Socialite::with('weixin')->redirect();
    }

    public function callback(Request $request)
    {
        $oauthUser = \Socialite::with('weixin')->user();

        dump($oauthUser->user);

        Auth::login($this->createWechatUser($oauthUser->user));

        return redirect('/home');
    }

    protected function createWechatUser($weixinUser)
    {
        if ($user = User::where(['unionid' => $weixinUser->unionid])->exists()) {
            $user = User::fill([
                'openid' => $weixinUser->openid,
                'unionid' => $weixinUser->unionid,
                'name' => $weixinUser->nickname,
                'headimgurl' => $weixinUser->headimgurl,
                'gender' => $weixinUser->sex
            ])->save();
        }

        return $user;
    }
}
