@extends('layouts.app')

@section('content')
<img src="/images/tidings-top.png" alt="" width="100%">
<div class="container">
    <div class="row">
        <div class="col-md-12 tiding-detail">
            <h3 class="tiding-title flex">新闻资讯</h3>
            <a class="back" href="{{ route('tidings') }}">返回</a>
        </div>
        <div class="col-md-12 tiding-detail-desc">
            <hr style="border-top: 1px solid #dddddd;">
            <h4>{{ $tiding->title }}</h4>
            <p>{{ $tiding->created_at }}</p>
        </div>
        <div class="col-md-12 tiding-body">
            {!! $tiding->body !!}
        </div>
    </div>
</div>
@endsection
