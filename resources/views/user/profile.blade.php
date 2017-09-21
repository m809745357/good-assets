@extends('layouts.app')

@section('content')
<div class="second-nav">
    <ul class="second-navbar-nav">
        <li><a href="{{ route('home') }}">个人信息</a></li>
        <li><a href="{{ route('tidings') }}">修改密码</a></li>
        <li><a href="{{ route('favorites') }}">我的收藏</a></li>
        <li><a href="{{ route('billings') }}">开票信息</a></li>
    </ul>
</div>
<div class="container" style="width: 100%;background-color: #f7f7f7">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 profile">
            <div class="panel panel-default profile-panel">
                <div class="panel-heading">个人信息</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">用户名</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control none" id="username" placeholder="请输入用户名">
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="phone" class="col-sm-2 control-label">手机号</label>
                          <div class="col-sm-8">
                            <input type="tel" class="form-control none" id="phone" placeholder="请输入手机号">
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="gander" class="col-sm-2 control-label">性别</label>
                          <div class="col-sm-8 gander">
                            <label class="radio-inline">
                            <input type="radio" id="gender1" value="1"> 男
                            </label>
                            <label class="radio-inline">
                            <input type="radio" id="gender2" value="2"> 女
                            </label>
                            <label class="radio-inline">
                            <input type="radio" id="gender3" value="3"> 保密
                            </label>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-default btn-desc btn-block">保存</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
