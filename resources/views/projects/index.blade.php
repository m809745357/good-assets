@extends('layouts.app')

@section('content')
<img src="/images/projects.png" alt="" width="100%">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jtwh">
              <strong>众筹项目</strong>
              <span class="hr"></span>
              <span>ALL&nbsp;PROJECT&nbsp;RAISED</span>
            </div>
        </div>
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
