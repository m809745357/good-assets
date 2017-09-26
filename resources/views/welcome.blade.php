@extends('layouts.app')

@section('content')
<img src="/images/top.png" alt="" width="100%">
<div class="container">
    <div class="row">
        @include('layouts.title', ['title' => '为什么选择我们', 'desc' => 'WHY&nbsp;CHOOSE&nbsp;US'])
        <div class="col-md-12">
            <div class="col-md-3 op">
                <div class="cricle">
                    <img src="/images/001.png" alt="">
                </div>
                <h5>实时操作，精效沟通</h5>
                <p>为新手更快了解市场，稳健投资</p>
            </div>
            <div class="col-md-3 op">
                <div class="cricle">
                    <img src="/images/002.png" alt="">
                </div>
                <h5>精准定位，数据分析</h5>
                <p>实时推荐网罗市场热点</p>
            </div>
            <div class="col-md-3 op">
                <div class="cricle">
                    <img src="/images/003.png" alt="">
                </div>
                <h5>咨询研究，文档整理</h5>
                <p>抓住商线痛点，投资领跑者</p>
            </div>
            <div class="col-md-3 op">
                <div class="cricle">
                    <img src="/images/004.png" alt="">
                </div>
                <h5>精选项目，实战操练</h5>
                <p>实时更新项目动态，简单易懂</p>
            </div>
        </div>
        @include('layouts.title', ['title' => '项目介绍', 'desc' => 'PROJECT&nbsp;INTRODUCTION'])
        <div class="col-md-12" style="margin-bottom: 2rem">
            <div class="col-md-6">
                <img src="/uploads/{{ $configs['project']['value'] }}" width="90%" style="margin-left: 5%">
            </div>
            <div class="col-md-6 posts">
                {!! $configs['project']['description'] !!}
            </div>
        </div>
    </div>
</div>
@endsection
