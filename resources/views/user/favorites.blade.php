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
<div class="container">
    <div class="row">
        @foreach ($projects as $project)
          <div class="col-md-4 project">
            <div class="project-img">
              <img src="{{ $project->image }}" width="100%">
              @if ($project->isCompleteChips())
                <span class="icon over">已结束</span>
              @else
                <span class="icon">募集中</span>
              @endif
            </div>
            <div class="project-desc">
              <h4 class="title">{{ $project->title }}</h4>
              <p class="desc">{{ $project->desc }}</p>
              <p class="money">目标金额：BTC{{ $project->money }}</p>
              <div class="project-desc-button">
                <a href="{{ $project->path() }}" class="btn btn-desc flex">
                  查看详情
                </a>
                <img src="/images/unstar.png" class="star">
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
