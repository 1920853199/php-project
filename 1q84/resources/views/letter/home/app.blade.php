<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="给自己一封信,给未来的自己一封信,写信,未来的自己" />
    <meta name="keywords" content="给自己一封信,给未来的自己一封信,写信,未来的自己" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '')</title>
    <link rel="shortcut icon" href="{{asset('letter/static/images/logo.png')}}" />
    <link rel="bookmark" href="{{asset('letter/static/images/logo.png')}}" type="image/x-icon"　/>
    <!-- 滚动翻页 -->
    <link rel="stylesheet" type="text/css" href="{{asset('letter/static/css/slidepage.css')}}">
    <link rel="stylesheet" href="{{asset('letter/static/css/css-reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('letter/static/css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('letter/static/css/index.css')}}">

</head>
<body>
<!-- 页面顶部 -->
<header>
    <a class="chushula" href="/letter.html">
        <img style="width: 32px" src="{{asset('letter/static/images/logo.png')}}">
        <h1 style="line-height: 22px">致时光·未来</h1>
        <span>www.iletter.cc</span>
    </a>
    <nav class="top-nav">
        <a href="/about.html">关于我们</a>
        <a href="/problem.html">常见问题</a>
        {{--<div class="login clear">
            <!-- 未登录 -->
            <button class="j-login-register">登录/注册</button>
        </div>--}}
    </nav>
</header>

@yield('content')

<!-- 底部导航(banner1—添加.banner1-about、banner6) -->
<nav class="about clear banner1-about step step1 slideDown" data-delay="500">
    <a href="/about.html" target="_blank">关于我们</a>
    <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=491126240@qq.com" target="_blank">意见反馈</a>
    <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备16068764号</a>
</nav>
<script type="text/javascript" src="{{asset('letter/static/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('letter/static/js/slidepage.min.js')}}"></script>
<!--<script type="text/javascript" src="{{asset('letter/static/js/jquery.cookie.min.js')}}"></script>
<script type="text/javascript" src="{{asset('letter/static/js/index.min.js')}}"></script>-->
<script type="text/javascript" src="{{asset('js/collect.js')}}"></script>
@yield('scriptsAfterJs')
</body>
</html>
