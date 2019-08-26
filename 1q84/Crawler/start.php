<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Beanbun\Beanbun;
use Beanbun\Middleware\Parser;
use Beanbun\Lib\Db;
use Beanbun\Lib\Helper;

class IndexController extends \App\Http\Controllers\Controller
{

    public function index($i){


        Db::$config = [
            '1q84' => [
                'server' => '127.0.0.1',
                'port' => '3306',
                'username' => 'root',
                'password' => '2014gaokao',
                'database_name' => '1q84',
                'database_type' => 'mysql',
                'charset' => 'utf8',
            ],
        ];

        $beanbun = new Beanbun;
        $beanbun->name = '1Q84';
        $beanbun->count = 5;
        $beanbun->timeout = 60;
        //https://www.centos.bz/tag/nginx-2/

        //$beanbun->seed = 'https://www.juzimi.com/article/%E6%B4%BB%E7%9D%80';
        $beanbun->seed = 'https://www.juzimi.com/writer/%E7%8E%8B%E5%B0%8F%E6%B3%A2?page='.$i;

        $beanbun->max = 100;
        /*$beanbun->urlRegex = [
            '/https:\/\/www.juzimi.com\/article\/%E5%B9%B3%E5%87%A1%E7%9A%84%E4%B8%96%E7%95%8C\?page=(\d*)/'
        ];*/
        $beanbun->middleware(new Parser());

        $beanbun->fields = [
            [
                'name' => 'item',
                'children' => [
                    [
                        'name' => 'content',
                        'selector' => ['.views-row .views-field-phpcode .views-field-phpcode-1 a','text'],
                        'repeated' => true,
                    ],
                    [
                        'name' => 'author',
                        'selector' => ['.views-row .views-field-phpcode .xqjulistwafo .views-field-field-oriwriter-value','text'],
                        'repeated' => true,
                    ],
                    [
                        'name' => 'title',
                        'selector' => ['.views-row .views-field-phpcode .xqjulistwafo .views-field-field-oriarticle-value .active','text'],
                        'repeated' => true,
                    ],
                    [
                        'name' => 'hash',
                        'selector' => ['.views-row .views-field-phpcode .views-field-phpcode-1 a','href'],
                        'repeated' => true,
                    ],
                ],
            ]
        ];


        $beanbun->afterDownloadPage = function($beanbun) {
            $arr = $beanbun->data;
            //var_dump($arr);
            foreach ($arr['item']['content'] as $k => $v) {
                $tem = [];
                $tem['author'] = $arr['item']['author'][$k].' 《'.$arr['item']['title'][$k].'》';
                $tem['content'] = $v;
                $tem['like'] = 0;
                $tem['review'] = 0;
                $tem['create_time'] = date('Y-m-d H:i:s');
                $tem['hash'] = explode('/',$arr['item']['hash'][$k])[2];
                Db::instance('1q84')->insert('article',$tem);
            }
            Db::closeAll();
        };


        $beanbun->start();
    }
}

$index = new IndexController();
//$index->index(0);
for ($i == 0;$i<=5;$i++){
    $index->index($i);
    //sleep(1);
}