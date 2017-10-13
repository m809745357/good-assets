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

       	//dd($oauthUser->user);

        $weixinUser = $oauthUser->user;

	//dd($this->createWechatUser());
	//dd(User::where($this->where)->exists());	
        \Auth::login(
            User::where('unionid', $weixinUser['unionid'])->exists()
            ? User::where('unionid', $weixinUser['unionid'])->first()
            : $this->createWechatUser($weixinUser)
        );

        return redirect('/home');
    }

    protected function createWechatUser($weixinUser)
    {
        return User::create([
            'openid' => $weixinUser['openid'],
            'unionid' => $weixinUser['unionid'],
            'name' => $weixinUser['nickname'],
            'headimgurl' => $weixinUser['headimgurl'],
	    'gender' => $weixinUser['sex'],
	    'password' => bcrypt('password')
        ]);
    }
}
