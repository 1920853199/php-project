<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> 每一次心灵的洗礼 - 1Q84</title>
    <meta name="keywords" content="句子迷,灵魂的归宿,经典语录,1Q84">
    <meta name="description" content="句子迷,灵魂的归宿,经典语录,1Q84,在这里寻找最纯净的灵魂跟最真实的自己">
    <link rel="stylesheet" href="<?php echo e(asset('index/css/index.css')); ?>" type="text/css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>
<div style="width: 80%;margin:50px auto">
    <div style="border: 1px solid #CCC;padding: 20px 30px">
        <div style="text-align: left">
            <span>&ensp;&ensp;&ensp;&ensp;</span>
            <?php echo e($info->content); ?>

        </div>
        <div style="text-align:right;padding-top: 20px">
            —— <?php echo e($info->author); ?>

        </div>
        <div style="border-top: 1px solid #CCC;padding-top: 20px;margin-top: 20px">
            <div style="float: right;" class="user">
                <span><a href="javascript:;" class="like" id="<?php echo e($info->id); ?>">喜欢<span>(<?php echo e($info->like); ?>)</span></a></span>
                <span><a href="javascript:;" class="review-but">评论<span>(<?php echo e($info->review); ?>)</span></a></span>
                <span><a href="/map.html" title="1Q84">站点地图</a></span>
                <span><a href="javascript:;" class="sync" title="1Q84">刷新</a></span>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="content" style="display: none">
            <div class="review-content">

                <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="review">
                        <div><span style="color: #00acc1"><?php echo e($v->username); ?></span> 评论 :</div>
                        <div>
                            <span>&ensp;&ensp;&ensp;&ensp;</span><?php echo e($v->content); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="form">
                <div>
                    <input type="text" id="username" placeholder="昵称">
                </div>
                <div>
                    <textarea placeholder="内容" id="content"></textarea>
                </div>
                <div style="text-align: right">
                    <a id="but" aid="<?php echo e($info->id); ?>" href="javascript:;">评论</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(function () {

        $('.like').click(function () {
            var id = $(this).attr('id');
            $.ajax({
                url: "/like.html",
                headers: { 'X-CSRF-TOKEN' : '<?php echo e(csrf_token()); ?>' },
                type:'post',
                data:"id="+id,
                success: function(data){
                    if(data === false){
                        return;
                    }

                    var num = $('.like span').html();
                    num = num.replace('(', '');
                    num = num.replace(')', '');
                    $('.like span').html('('+(parseInt(num)+1)+')');

                }
            });
        });


        $('.sync').click(function () {
            $.ajax({
                url: "/sync.html",
                headers: { 'X-CSRF-TOKEN' : '<?php echo e(csrf_token()); ?>' },
                type:'post',
                success: function(data){
                    if(data.code == 200){
                        window.location.reload();
                    }

                }
            });
        });



        $('.review-but').click(function () {
            $('.content').toggle();
        });

        $('#but').click(function () {

            var username = $('#username').val();
            var content = $('#content').val();
            var id = $(this).attr('aid');
            if(username == '' || content == '' || id == ''){
                alert('昵称跟内容不能为空.');
                return;
            }

            $.ajax({
                url: "/review.html",
                headers: { 'X-CSRF-TOKEN' : '<?php echo e(csrf_token()); ?>' },
                type:'post',
                data:"id="+id+'&username='+username+'&content='+content,
                success: function(data){
                    if(data.code !== 200){
                        alert('评论异常.');
                        return;
                    }
                    var str = '<div class="review">' +
                        '<div><span style="color: #00acc1">'+username+'</span> 评论 :</div>'+
                        '<div><span>&ensp;&ensp;&ensp;&ensp;</span>'+content+
                        '</div></div>';
                    $('.review-content').prepend(str);



                    var num = $('.review-but span').html();
                    num = num.replace('(', '');
                    num = num.replace(')', '');
                    $('.review-but span').html('('+(parseInt(num)+1)+')');

                    //$('#username').val('');
                    $('#content').val('');
                }
            });
        });


    });
</script><?php /**PATH /home/wwwroot/1q84/resources/views/index/index.blade.php ENDPATH**/ ?>