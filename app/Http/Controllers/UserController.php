<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.profile');
    }

    public function reset()
    {
        return view('user.reset');
    }

    public function update(Request $request, User $user)
    {
        if (! $this->checkPassword()) {
            return response()->json([
                'message' => '旧密码错误！',
            ], 422);
        }

        $user->fill(
            $this->checkPasswordConfirmed()
            ? ['password' => Hash::make($request->password)]
            : $this->checkProfile()
        )->save();

        if ($request->wantsJson()) {
            return response()->json([
                'data' => $user
            ], 201);
        }
    }

    protected function checkProfile()
    {
        return request()->validate([
            'name' => 'required',
            'mobile' => [
                'required',
                Rule::unique('users')->ignore(auth()->user()->id),
            ],
            'gender' => 'required',
        ]);
    }

    protected function checkPassword()
    {
        $password_old = request('password_old');
        if (! $password_old) {
            return true;
        }

        return Hash::check($password_old, auth()->user()->password);
    }

    protected function checkPasswordConfirmed()
    {
        if (! request('password')) {
            return false;
        }

        return request()->validate([
            'password' => 'required|confirmed',
        ]);
    }
}
