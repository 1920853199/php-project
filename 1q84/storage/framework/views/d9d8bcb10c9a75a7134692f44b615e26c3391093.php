<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>站点地图 - 1Q84</title>
    <meta name="keywords" content="1Q84">
    <meta name="description" content="1Q84">
    <link rel="stylesheet" href="<?php echo e(asset('index/css/map.css')); ?>" type="text/css">
</head>
<body>
<div style="width: 80%;margin:50px auto">
    <ul>
        <li><a href="/admin/article.html" title="新增句子" >新增句子</a></li>
        <li><a href="/" title="首页" >首页</a></li>
        <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="article/<?php echo e($v->id); ?>.html" title="<?php echo e(str_replace('》','',str_replace('《','',$v->author))); ?>" ><?php echo e(str_replace('》','',str_replace('《','',$v->author))); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('js/collect.js')); ?>"></script>
<script>

    (function(){

        //2、随机颜色
        var li = document.querySelectorAll("li");
        var chars = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];
        function generateMixed(n) {
            var res = "#";
            var id;
            for(var i = 0; i < n ; i ++) {
                id= Math.floor(Math.random()*16);
                res += chars[id];
            }
            return res;
        }

        for(var i = 0;i < li.length;i++){
            li[i].style.backgroundColor = generateMixed(6);
        }

    })()
</script>
<?php /**PATH /home/wwwroot/1q84/resources/views/index/map.blade.php ENDPATH**/ ?>