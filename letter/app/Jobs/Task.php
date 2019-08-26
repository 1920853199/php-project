<?php

namespace App\Jobs;

use App\Models\Letter;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

// 代表这个类需要被放到队列中执行，而不是触发时立即执行
class Task implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $letter;


    /**
     * 初始化 创建队列
     * Create a new job instance.
     * Task constructor.
     * @param Letter $letter
     * @param $delay
     */
    public function __construct(Letter $letter, $delay = 0)
    {
        $this->letter = $letter;
        // 设置延迟的时间，delay() 方法的参数代表多少秒后执行
        $this->delay($delay);
    }

    /**
     * 定义这个任务类具体的执行逻辑
     * 当队列处理器从队列中取出队列任务时，会调用 handle() 方法
     *
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->letter->type == 0){
            dispatch(new SendMailQueue($this->letter,$this->letter->email));
        }else{
            dispatch(new SendMailQueue($this->letter,'1920853199@qq.com'));
        }

    }
}
