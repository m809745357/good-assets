@extends('layouts.app')

@section('content')
<img src="/images/tidings-top.png" alt="" width="100%">
<div class="container">
    <div class="row">
        @include('layouts.title', ['title' => '众筹新闻', 'desc' => 'ALL&nbsp;TIDING&nbsp;RAISED'])
        @foreach ($tidings as $tiding)
          <div class="col-md-12 tiding">
            <div class="col-md-3 tiding-img">
              <img src="{{ $tiding->image }}" width="100%">
            </div>
            <div class="col-md-9 tiding-desc">
              <a href="{{ $tiding->path() }}">
                <h4 class="title">{{ $tiding->title }}</h4>
              </a>
              <p class="created_at">{{ $tiding->created_at }}</p>
              <p class="desc">{{ $tiding->desc }}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
