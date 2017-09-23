<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script>
        window.Laravel = <?php echo json_encode([
             'app' => \Auth::check() == 1 ? 'ture' : 'false'
        ]); ?>

    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/images/logo.png" height="65">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/">首&nbsp;&nbsp;页</a></li>
                        <li><a href="{{ route('projects') }}">众筹项目</a></li>
                        <li><a href="{{ route('tidings') }}">众筹新闻</a></li>
                        <li><a href="{{ route('properties') }}">股权转让</a></li>
                        <li><a href="{{ route('aboutus') }}">联系我们</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" class="menu-green"><span>登录</span></a></li>
                            <li><a href="{{ route('register') }}" class="menu-green ml10"><span>注册</span></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-top: 17.5px;">
                                    <img src="{{ Auth::user()->headimgurl }}" style="border-radius: 50%"> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('home') }}">
                                          个人中心
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            注销
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <flash data="{{ session('flash') }}"></flash>

        <footer>
            <div class="container">
                <div class="col-md-12">
                    <div class="col-md-8 menu-box">
                        <ul class="menu">
                            <li><a href="{{ route('login') }}">首&nbsp;&nbsp;页</a></li>
                            <li><a href="{{ route('login') }}">众筹项目</a></li>
                            <li><a href="{{ route('login') }}">众筹新闻</a></li>
                            <li><a href="{{ route('login') }}">股权转让</a></li>
                            <li><a href="{{ route('login') }}">联系我们</a></li>
                        </ul>
                        <p>
                          地址：浙江省杭州市拱墅区祥园路88号智慧信息产业园M座10楼
                          <br/>
                          电话：400-125-2366&nbsp;&nbsp;邮箱：sjx@163.com
                        </p>
                    </div>

                    <div class="col-md-3 col-md-offset-1 menu-qrcode">
                        <div class="qrcode">
                          <img src="/images/wechat.png" alt="">
                          <p>公众号二维码</p>
                        </div>
                        <div class="qrcode">
                          <img src="/images/pay.png" alt="">
                          <p>支付宝二维码</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                <hr style="border-top: 1px solid #6e6e6e;">
                </div>

                <div class="col-md-12 legal">
                  Copyright &copy; 2017 Copyright Holder All Rights Reserved.
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
