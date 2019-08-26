@extends('letter.home.app')
@section('title', '关于我们-致时光·未来')

@section('content')
	<style>

		body{
			color: rgb(102, 102, 102);
			font-size: 13px;
			font-family: 微软雅黑;
			background: rgb(246, 246, 246);
		}
		header{
			position: unset;
			background-color: #FFFFFF;
		}
		header .chushula {
			color: #000;
		}
		header .top-nav .login button {
			color: #000;
			border: 1px solid #000;
			background: rgba(255, 255, 255, 0.1);
		}
		header .top-nav > a {
			color: #000;
		}

		.about-page{
			width: 70%;
			margin: 40px auto 0;
			padding: 30px 50px;
			box-shadow: 1px 1px 1px #f2f2f2;
			border: 1px solid #f2f2f2;
			background: #fff;
			line-height: 26px;
		}

		.about-page h3{
			font-size: 20px;
			line-height: 22px;
			color: #31d489;
			margin-bottom: 20px;
		}
		.about-page p{
			display: block;
			margin-block-start: 1em;
			margin-block-end: 1em;
			margin-inline-start: 0px;
			margin-inline-end: 0px;
		}

	</style>
	<!-- 页面主体 -->
	<div class="about-page">
		<h3>致时光·未来 —— 给未来一封信</h3>
		<p>
			看看过去那個一路走來，<br>
			跌跌撞撞，<br>
			曾经落泪曾经受伤，<br>
			却始终没有放弃过前进的自己。<br>
			如果你抬头，<br>
			你有什么话是你想跟未来的自己说的呢？<br>
			写下一封时光信，<br>
			让现在的自己在未来等你。<br>
		</p>
	</div>
@endsection
