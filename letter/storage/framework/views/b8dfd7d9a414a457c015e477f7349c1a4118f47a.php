<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo e($letter->title); ?></title>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div style="width: 80%;margin: auto">
            <div style="text-align: center;font-size: 20px;">
                <?php echo e($letter->title); ?>

            </div>
            <div style="font-size: 16px;margin-bottom:20px">
                <?php echo trim($letter->content_html); ?>

            </div>
            <div style="text-align: center;text-align: right">
                来自：致时光·未来  <span style="padding-left: 20px"></span>信息：<?php echo e($letter->sender); ?> 于 <?php echo e($letter->create_time); ?> 发
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/wwwroot/1q84/resources/views/mail/default.blade.php ENDPATH**/ ?>