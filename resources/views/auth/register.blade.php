@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 register">
            <div class="col-md-12  register-form">
                <form class="form-horizontal register-box" method="POST" action="{{ route('register') }}" style="margin-bottom: 20px;">
                  <div class="form-group">
                      <div class="col-md-12">
                          <h4 style="text-align: center">用户注册</h4>
                      </div>
                  </div>
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-2 col-md-offset-2 control-label"><span class="required">*</span>用户名</label>

                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-2 col-md-offset-2 control-label"><span class="required">*</span>邮箱</label>

                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-2 col-md-offset-2 control-label"><span class="required">*</span>设置密码</label>

                    <div class="col-md-6">
                      <div class="input-group">
                        <div class="input-group-addon"><img src="/images/password.png" width="15" height="15"></div>
                        <input id="password" type="password" class="form-control" name="password" required>
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
                    <label for="password-confirm" class="col-md-2 col-md-offset-2 control-label"><span class="required">*</span>确认密码</label>

                    <div class="col-md-6">
                      <div class="input-group">
                        <div class="input-group-addon"><img src="/images/password.png" width="15" height="15"></div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <div class="input-group-addon"><img src="/images/keyword.png" width="15" height="15"></div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-top: 40px;">
                    <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-block btn-success">
                        立即注册
                      </button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
