@extends('letter.home.app')
@section('title', '致时光·未来')

@section('content')
<!-- 页面主体 -->
<div  class="slidePage-container"  id="slidePage-container">
	<div class="item page5 banner banner5">
		<div class="chushu-con step step1 slideDown" data-delay="100">
			<img src="{{asset('letter/static/images/logo.png')}}">
			<h2>给未来寄去温暖的问候</h2>
			<p>Send warm greetings to the future</p>
			<button><a class="j-create-book" href="/time-letter.html">立即写信</a></button>
		</div>
	</div>
</div>
@endsection