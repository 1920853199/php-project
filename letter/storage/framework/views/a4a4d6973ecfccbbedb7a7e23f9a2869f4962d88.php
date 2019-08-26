
<?php $__env->startSection('title', '致时光·未来-首页'); ?>

<?php $__env->startSection('content'); ?>
<!-- 页面主体 -->
<div  class="slidePage-container"  id="slidePage-container">
	<div class="item page5 banner banner5">
		<div class="chushu-con step step1 slideDown" data-delay="100">
			<img src="<?php echo e(asset('letter/static/images/logo.png')); ?>">
			<h2>给未来寄去温暖的问候</h2>
			<p>Send warm greetings to the future</p>
			<button><a class="j-create-book" href="/time-letter.html">立即写信</a></button>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('letter.home.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wwwroot/letter/resources/views/letter/home/index.blade.php ENDPATH**/ ?>