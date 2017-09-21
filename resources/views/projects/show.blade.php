@extends('layouts.app')

@section('content')
<img src="/images/projects.png" alt="" width="100%">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jtwh tab">
                <li class="change" data-change="content">项目介绍</li>
                <li data-change="ico">ICO细则</li>
                <li data-change="team">团队介绍</li>
                <li data-change="issue">常见问题</li>
            </div>
        </div>
        <div class="col-md-12 tab-menu" id="content">
            <img src="{{ $project->image }}" width="100%">
            <h4>{{ $project->title }}</h4>
            <p>{{ $project->desc }}</p>
            {!! $project->content !!}
        </div>
        <div class="col-md-12 tab-menu" id="ico">
            {!! $project->ico !!}
        </div>
        <div class="col-md-12 tab-menu" id="team">
            {!! $project->team !!}
        </div>
        <div class="col-md-12 tab-menu" id="issue">
            {!! $project->issue !!}
        </div>
    </div>
</div>
@endsection
