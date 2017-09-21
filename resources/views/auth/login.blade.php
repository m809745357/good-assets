@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 login">
            <div class="col-md-8 login-img">
              <img src="/images/login-img.png" width="100%">
            </div>
            <div class="col-md-4 login-form">
                <form class="form-horizontal login-box" method="POST" action="{{ route('login') }}">
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4 style="text-align: center">用户登录</h4>
                        </div>
                    </div>
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-2 control-label">邮&nbsp;&nbsp;箱</label>

                        <div class="col-md-10">
                            <div class="input-group">
                                <div class="input-group-addon"><img src="/images/username.png" width="15" height="15"></div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="邮箱" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-2 control-label">密&nbsp;&nbsp;码</label>

                        <div class="col-md-10">
                            <div class="input-group">
                                <div class="input-group-addon"><img src="/images/password.png" width="15" height="15"></div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="密码" required>
                                <div class="input-group-addon"><img src="/images/keyword.png" width="15" height="15"></div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <a class="btn-link pull-right" href="{{ route('password.request') }}">
                                忘记登录密码?
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-success btn-block">
                                立即登录
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="col-md-12">
                                还没有账号？
                                <a class="btn-link pull-right" href="{{ route('register') }}">
                                    免费注册>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="col-md-12" style="text-align: center">
                                <p>……第三方账号登录……</p>
                            </div>
                            <div class="col-md-12">
                                <div class="wechat-login">
                                    <img src="/images/wechat-icon.png" alt="">
                                    <p>微信登录</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
