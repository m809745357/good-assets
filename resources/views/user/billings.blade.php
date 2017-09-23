@extends('layouts.app')

@section('content')
@include('user.menu')
<div class="container" style="width: 100%;background-color: #f7f7f7">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 profile">
            <div class="panel panel-default profile-panel">
                <div class="panel-heading" style="padding: 15px;">修改密码</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                          <label for="password-old" class="col-md-3 control-label profile-label">旧的密码</label>
                          <div class="col-md-8">
                            <input type="password" class="form-control none" id="password-old" placeholder="请输旧的密码">
                          </div>
                        </div>
                        <hr class="profile-hr">
                        <div class="form-group">
                          <label for="password-new" class="col-md-3 control-label profile-label">新的密码</label>
                          <div class="col-md-8">
                            <input type="password" class="form-control none" id="password-new" placeholder="请输新的密码">
                          </div>
                        </div>
                        <hr class="profile-hr">
                        <div class="form-group">
                          <label for="password-confirm" class="col-md-3 control-label profile-label">重复密码</label>
                          <div class="col-md-8">
                            <input type="password" class="form-control none" id="password-confirm" placeholder="请输重复密码">
                          </div>
                        </div>
                        <hr class="profile-hr">
                        <div class="form-group">
                          <div class="col-md-offset-3 col-md-6">
                            <button type="submit" style="margin: .5rem 0px 1rem;" class="btn btn-default btn-desc btn-block">修改密码</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
