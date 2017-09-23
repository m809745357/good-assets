@extends('layouts.app')

@section('content')
@include('user.menu')
<div class="container">
    <div class="row" style="margin-top: 1rem">
        @foreach ($favorites as $favorite)
          <div class="col-md-4 project">
            <div class="project-img">
              <img src="{{ $favorite->favorited->image }}" width="100%">
              @if ($favorite->favorited->isCompleteChips())
                <span class="icon over">已结束</span>
              @else
                <span class="icon">募集中</span>
              @endif
            </div>
            <div class="project-desc">
              <h4 class="title">{{ $favorite->favorited->title }}</h4>
              <p class="desc">{{ $favorite->favorited->desc }}</p>
              <p class="money">目标金额：BTC{{ $favorite->favorited->money }}</p>
              <div class="project-desc-button">
                <a href="{{ $favorite->favorited->path() }}" class="btn btn-desc flex">
                  查看详情
                </a>
                <star :data="{{ $favorite->favorited }}"></star>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
