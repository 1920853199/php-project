<?php

/**
 * @author Lee Chan <491126240@qq.com>
 */


namespace App\Jobs;

use App\Models\Letter;
use Illuminate\Bus\Queueable;
use Illuminate\Database\QueryException;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

// 代表这个类需要被放到队列中执行，而不是触发时立即执行
class SendMailQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $letter;

    protected $email;

    protected $template;

    /**
     * 任务可以尝试的最大次数。
     *
     * @var int
     */
    public $tries = 5;


    /**
     * 初始化 创建队列
     * Create a new job instance.
     *
     * CloseOrder constructor.
     * @param $letter
     * @param $email
     * @param $template
     * @param $delay
     */
    public function __construct(Letter $letter,$email,$template = 'mail.default', $delay = 1)
    {
        $this->letter = $letter;
        $this->email = $email;
        $this->template = $template;

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
        $t1 = time();
        $email = $this->email;
        $title = '致时光·未来提醒您,您有一封来自'.$this->letter->create_time.'的信';
        Mail::send($this->template, ['letter' => $this->letter], function ($message) use ($email, $title) {
            $message->to($email)->subject($title);
        });

        echo '发送邮件：'.$email.'(时间：'.date('Y-m-d H:i:s').' 用时：'.(time() - $t1).'秒)';
        DB::connection('letter')->table('letter')->where('id',$this->letter->id)->update(['status'=>'1']);
    }

    /**
     * 任务失败的处理过程
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function failed(\Exception $exception)
    {
        var_dump($exception->getMessage());
    }
}
