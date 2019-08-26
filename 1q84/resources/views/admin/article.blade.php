<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>1Q84</title>
    <meta name="keywords" content="1Q84">
    <meta name="description" content="1Q84">
    <link rel="stylesheet" href="{{ asset('index/css/index.css') }}" type="text/css">
</head>
<style>
    form div input,textarea{
        width: 100%;
        padding: 10px;
    }
</style>
<body>
<div style="width: 80%;margin:50px auto">
    <form method="post" action="{{route('article.save')}}">
        @csrf
        <div>
            <textarea placeholder="内容描述" name="content"></textarea>
        </div>
        <div>
            <input type="text" value="" placeholder="作者"  name="author">
        </div>
        <div style="margin: 12px 0px">
            <input type="text" value="" placeholder="越大越靠前" name="hash">
        </div>
        <div>
            <input type="submit" value="保存">
            <a href="/map.html">返回</a>
        </div>
    </form>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/collect.js')}}"></script>

