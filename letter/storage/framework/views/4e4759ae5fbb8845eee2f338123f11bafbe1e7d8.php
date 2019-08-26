
<?php $__env->startSection('title', '常见问题-致时光·未来'); ?>

<?php $__env->startSection('content'); ?>
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
		<h3>我在这个网站写信，会不会泄露隐私啊？</h3>
		<p>
			私密信件不会泄露，邮件发送是全自动运行，内部存储也有一定加密措施，防止泄露。
		</p>
		<h3>为什么到了时间没有收到信呢？</h3>
		<p>
			没有收到信的可能性有很多，很大一部分用户是写错了邮件地址。因此首先请大家一定检查邮件地址是否正确。
		还有极少量的用户，邮箱会把收到的信放到垃圾箱中去，因此建议将我们的发信地址1920853199@qq.com，直接加到邮箱的收信白名单中。
			如果是纸质书信因为地区地址或者其他非人为因素问题可能会存在3-7个工作日的时间差。
		</p>
		<h3>我可以删除以前的时光信么？</h3>
		<p>
			不犹豫，不后悔。
		这是邮递员大叔很喜欢，也很奉行的一句话。
		我们的产品形态非常开放，任何人都可以方便地写信，邮递员大叔希望大家能够为自己的行为负责，而不是寄希望于删掉以前的信。
		有些事情，发生了就是发生了，时光永远是向前走的。写给未来，其实也是希望让未来的自己，坚持现在做下的决定。
		</p>
		<h3>可以给任何人写信么？</h3>
		<p>
			是的，可以给任何人写信。只要保证邮件地址，或者邮寄地址没问题就能送到。
		</p>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('letter.home.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wwwroot/letter/resources/views/letter/home/problem.blade.php ENDPATH**/ ?>