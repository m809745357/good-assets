@extends('layouts.app')

@section('content')
<img src="/images/aboutus-top.png" alt="" width="100%">
<div class="container">
    <div class="row">
        @include('layouts.title', ['title' => '关于我们', 'desc' => 'ABOUT&nbsp;US'])
        <div class="col-md-12" style="margin-top: 40px;">
            <div class="col-md-4 aboutus">
                <div class="cricle aboutus-cricle">
                    <img src="/images/address.png" alt="">
                </div>
                <div class="aboutus-desc">
                    <h3>{{ $configs['address']['description'] }}</h3>
                    <p style="height: 2em;margin: 0 10%;">{{ $configs['address']['value'] }}</p>
                    <span class="label label-default">Address</span>
                </div>
            </div>
            <div class="col-md-4 aboutus">
                <div class="cricle aboutus-cricle">
                    <img src="/images/phone.png" alt="">
                </div>
                <div class="aboutus-desc">
                    <h3>{{ $configs['mobile']['description'] }}</h3>
                    <p style="height: 2em;margin: 0 10%;">{{ $configs['mobile']['value'] }}</p>
                    <span class="label label-default">Phone</span>
                </div>
            </div>
            <div class="col-md-4 aboutus">
                <div class="cricle aboutus-cricle">
                    <img src="/images/email.png" alt="">
                </div>
                <div class="aboutus-desc">
                    <h3>{{ $configs['email']['description'] }}</h3>
                    <p style="height: 2em;margin: 0 10%;">{{ $configs['email']['value'] }}</p>
                    <span class="label label-default">Email</span>
                </div>
            </div>
        </div>
        <baidumap
            latitude="{{ $configs['latitude']['value'] }}"
            longitude="{{ $configs['longitude']['value'] }}"
            title="{{ config('app.name') }}"
            address="{{ $configs['address']['value'] }}">

        </baidumap>
    </div>
</div>
@endsection
