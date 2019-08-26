
<?php $__env->startSection('title', '给未来写一封信-致时光·未来'); ?>

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

		.li{
			display: inline;font-size: 18px;padding: 10px 5px;cursor: pointer;
		}

		input[type=text]{
			padding: 10px 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 60%;
		}
		.content{
			margin: 30px 20px;
		}
		.c div{
			margin-bottom: 10px;
		}
		textarea{
			width: 80%;
			padding: 10px 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			height: 300px;
		}
		.span{
			border: 1px solid #ccc;
			padding: 8px 10px;
			border-radius: 5px;
			cursor: pointer;
		}

		.i{
			cursor: pointer;
		}

		.box{
			width: 700px;
			height: 400px;
			position:absolute;
			top: 50%;
			border: 1px solid #ccc;
			padding: 50px;
			background-color: #FFFFFF;
			z-index: 10002;;
			margin-top: -300px;
			left: 50%;
			margin-left: -400px;
			overflow-y: auto;
			display: none;
		}
		.fix{
			display: none;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			background-color:#000000;
			opacity: 0.2;
		}
		ii{
			position: fixed;
			top: 50%;
			margin-top: -320px;
			right: 50%;
			margin-right: -415px;
			z-index: 1000;
			padding: 2px 10PX;
			border-radius: 50%;
			background-color: #000;
			color: #FFF;
			cursor: pointer;
		}

		/* 滚动槽 */
		::-webkit-scrollbar {
			width: 6px;
			height: 6px;
		}
		::-webkit-scrollbar-track {
			border-radius: 3px;
			background: rgba(0,0,0,0.06);
			-webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.08);
		}
		/* 滚动条滑块 */
		/*::-webkit-scrollbar-thumb {
			border-radius: 3px;
			background: rgba(0,0,0,0.12);
			-webkit-box-shadow: inset 0 0 10px rgba(0,0,0,0.2);
		}*/

		a{
			color: rgb(102, 102, 102);
		}
		#save{
			padding: 10px 30px;
			border: 1px solid #ccc;
			margin-left: 20px;
			cursor: pointer;
		}
	</style>
	<!-- 页面主体 -->
	<div class="about-page">
		<ul style="margin-bottom: 10px;">
			<li class="li" style="font-size: xx-large">
				电子信件
			</li>
			<li class="li">
				纸质信件
			</li>
		</ul>
		<hr>
		<div class="content">
			<div class="c">
				<div>
					<label>收信邮箱：</label>
					<input name="email" type="text" placeholder="请填写收件邮箱，如example@example.com">
				</div>
			</div>

			<div style="margin-bottom: 10px">
				<label>寄信人：</label>
				<input name="sender" type="text" placeholder="请填写寄件人姓名">
			</div>

			<div style="display: none" class="c">
				<div>
					<label>收信人：</label>
					<input name="receiver" type="text" placeholder="请填写收件人姓名">
				</div>
				<div>
					<label>收信电话：</label>
					<input name="tel" type="text" placeholder="请填写收件人手机号码">
				</div>
				<div>
					<label>收信地址：</label>
					<input name="address" type="text" placeholder="请填写收件地址，填写省、市、区、街道、楼号">
				</div>
			</div>

			<div>
				<label>收信时间：</label>
				<span class="span" value="<?php echo date('Y-m-d',time()+60*60*24*365/2);?>">半年</span>
				<span class="span" value="<?php echo date('Y-m-d',time()+60*60*24*365);?>">一年</span>
				<span class="span" value="<?php echo date('Y-m-d',time()+60*60*24*365*2);?>">两年</span>
				<span class="span" value="<?php echo date('Y-m-d',time()+60*60*24*365*3);?>">三年</span>
				<span class="span" value="<?php echo date('Y-m-d',time()+60*60*24*365*5);?>">五年</span>
				<input class="time-input" type="text" style="width: 30%" placeholder="输入日期，如：<?php echo date('Y-m-d',time());?>">
			</div>
			<input type="hidden" class="time" name="time">
			<input type="hidden" class="type" value="0" name="type">
			<div style="margin: 10px 0px">
				<input name="agreement" value="1" checked type="checkbox"> <i class="i">使用承诺</i>
				<div class="box">
					<ii>X</ii>
					<b>致时光·未来内容规范</b><br>
					1. 你理解并同意，给未来写封信一直致力于为用户提供文明健康、规范有序的网络环境，你不得利用给未来写封信发送如下干扰给未来写封信正常运营，以及侵犯其他用户或第三方合法权益的内容，包括但不限于：<br>

					1.1 发送违反中华人民共和国国家法律法规禁止的内容：<br>

					（1）违反宪法确定的基本原则的；<br>

					（2）危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；<br>

					（3）损害国家荣誉和利益的；<br>

					（4）煽动民族仇恨、民族歧视，破坏民族团结的；<br>

					（5）破坏国家宗教政策，宣扬邪教和封建迷信的；<br>

					（6）散布谣言，扰乱社会秩序，破坏社会稳定的；<br>

					（7）散布淫秽、色情、赌博、暴力、恐怖或者教唆犯罪的；<br>

					（8）侮辱或者诽谤他人，侵害他人合法权益的；<br>

					（9）煽动非法集会、结社、游行、示威、聚众扰乱社会秩序；<br>

					（10）以非法民间组织名义活动的；<br>

					（11）不符合《即时通信工具公众信息服务发展管理暂行规定》及遵守法律法规、社会主义制度、国家利益、公民合法利益、公共秩序、社会道德风尚和信息真实性等“七条底线”要求的；<br>

					（12）含有法律、行政法规禁止的其他内容的。<br>

					1.2 发送侵害他人名誉权、肖像权、知识产权、商业秘密等合法权利的内容；<br>

					1.3 发送涉及他人隐私、个人信息或资料的；<br>

					1.4 发送骚扰、广告信息及垃圾信息或含有任何性或性暗示的；<br>

					1.5 发送无实质意义、测试意图等不属于向未来对话的范畴的内容；<br>

					1.6 发送未表明本人真实身份的匿名信件；<br>

					1.7 发送其他违反使用者当地法律法规、政策及公序良俗、社会公德或干扰给未来写封信正常运营和侵犯其他用户或第三方合法权益内容的信息。<br>

					若违反上述任意一种行为，给未来写封信将立刻禁止发送相关信件，并将关联的手机设备永久封禁，加入黑名单。严重者将向警方提供信息，进行法律追责并要求赔偿经济损失。<br>

				</div>
			</div>
			<div>
				<div id="content">
				</div>
			</div>
			<div style="margin-top: 30px;">
				<a href="/">返回</a>
				<a id="save">发送</a>
			</div>
		</div>
	</div>
	<div class="fix"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptsAfterJs'); ?>
<script src="//unpkg.com/wangeditor/release/wangEditor.min.js"></script>
<script>
	$(function () {
		$('ul li').click(function () {
			$(this).css('font-size','xx-large').siblings().css('font-size','18px');
			var index = $(this).index();
			$('.content').children('.c').eq(index).show().siblings('.c').hide();
			$('.time').val('');
			$('.time-input').val('');
			$('.type').val(index);
			$('.span').css('background-color','#FFFFFF').css('border','1px solid #ccc');
		});

		$('div span').click(function () {
			$(this).css('background-color','#ffd132').css('border','1px solid #ffd132').siblings('span').css('background-color','#FFFFFF').css('border','1px solid #ccc');
			$('.time').val($(this).attr('value'));
		});

		$('.time-input').blur(function () {
			$('.time').val($(this).val());
			$('.span').css('background-color','#FFFFFF').css('border','1px solid #ccc');
		});


		$('i').click(function () {
			$(this).next('div').toggle();
			$('.fix').show();
		});

		$('ii').click(function () {
			$('.box').hide();
			$('.fix').hide();
		});

		var E = window.wangEditor;
		var editor = new E('#content');
		//editor.customConfig.uploadImgShowBase64 = true;
		editor.customConfig.uploadImgMaxSize = 5 * 1024 * 1024;
		editor.customConfig.uploadFileName = 'images';
		editor.customConfig.uploadImgServer = '/upload.html'; // 上传图片到服务器
		editor.customConfig.uploadImgHeaders = {
			'X-CSRF-TOKEN' : '<?php echo e(csrf_token()); ?>'
		};
		editor.create();



		$('#save').click(function ()  {
			var str = '';

			var type = $('input[name="type"]').val();
			str += '&type='+type;

			var sender = $('input[name="sender"]').val();

			if(sender == ''){
				alert('寄信人姓名不能为空！');
				return false;
			}
			str += '&sender='+sender;


			if(type == 0) {
				var email = $('input[name="email"]').val();

				if(email == ''){
					alert('邮箱不能为空！');
					return false;
				}

				var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
				if(!reg.test(email))
				{
					alert("邮箱格式不对");
					return false;
				}

				str += '&email='+email;
			}else {

				var receiver = $('input[name="receiver"]').val();

				if(receiver == ''){
					alert('收信人姓名不能为空！');
					return false;
				}

				str += '&receiver='+receiver;

				var tel = $('input[name="tel"]').val();

				if(tel == ''){
					alert('收信人电话不能为空！');
					return false;
				}


				if(!/^(?:0[1-9][0-9]{1,2}-)?[2-8][0-9]{6,7}$/.test(tel) && !(/^1(3|4|5|7|8)\d{9}$/.test(tel))) {
					alert('电话号码有误，请重填');
					return false;
				}


				str += '&tel='+tel;

				var address = $('input[name="address"]').val();

				if(address == ''){
					alert('收信人地址不能为空！');
					return false;
				}

				str += '&address='+address;
			}

			var time = $('input[name="time"]').val();
			if(time == ''){
				alert('日期不能为空！');
				return false;
			}
			str += '&time='+time;

			var agreement = $('input[name="agreement"]').prop('checked');
			if(agreement == false){
				alert('请先同意协议！');
				return false;
			}
			str += '&agreement='+agreement;
			var content_text = editor.txt.text();
			var content_html = editor.txt.html();
			if(content_text == ''){
				alert('信内容不能为空！');
				return false;
			}
			str += '&content_text='+content_text;
			str += '&content_html='+content_html;

			$.ajax({
				url: "/letter-save.html",
				headers: { 'X-CSRF-TOKEN' : '<?php echo e(csrf_token()); ?>' },
				type:'post',
				data:str,
				success: function(data){
					if(data.code == 200){
						alert('不犹豫，不后悔。信已寄出，祝您生活愉快！');
						window.location.reload();
					}
					console.log(data);
				}
			});


		});
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('letter.home.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wwwroot/letter/resources/views/letter/home/letter.blade.php ENDPATH**/ ?>