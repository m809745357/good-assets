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
                    <h3>联系地址</h3>
                    <p>为新手更快了解市场，稳健投资</p>
                    <span class="label label-default">Address</span>
                </div>
            </div>
            <div class="col-md-4 aboutus">
                <div class="cricle aboutus-cricle">
                    <img src="/images/phone.png" alt="">
                </div>
                <div class="aboutus-desc">
                    <h3>联系电话</h3>
                    <p>18367831980</p>
                    <span class="label label-default">Phone</span>
                </div>
            </div>
            <div class="col-md-4 aboutus">
                <div class="cricle aboutus-cricle">
                    <img src="/images/email.png" alt="">
                </div>
                <div class="aboutus-desc">
                    <h3>邮箱地址</h3>
                    <p>company@huishuit.com</p>
                    <span class="label label-default">Email</span>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="height: 536px;margin: 2rem 0;">

        </div>
    </div>
</div>
@endsection
