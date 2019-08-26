<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/16
 * Time: 10:12
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

    public function login(Request $request){

        $user = $request->input('token','');
        if($user == '10dfe80c45e6b9cd2dc9b14331b401e6'){
            session(['token' => $user]);
            return redirect('/admin/article.html');
        }
        return '<div style="text-align: center;padding: 50px"><a href="/map.html">返回</a>  你是猴子派来的逗逼吗？先登录！账号密码加微信我告诉你：<br><img style="padding: 20px" title="微信" width="380px" height="380px" src="'.asset('/index/images/weixin.jpg').'"></div>';
    }


    public function add(Request $request){

        $token = session('token');
        if(!$token){
            return redirect('/admin/login.html');
            return response('',404);
        }
        return view('admin.article');
    }

    public function save(Request $request){

        $token = session('token');
        if(!$token){
            return response('',404);
        }

        $data = [];
        $data['author'] = $request->post('author');
        $data['content'] = $request->post('content');
        $data['like'] = 1;
        $data['review'] = 0;
        $data['create_time'] = date('Y-m-d H:i:s');
        $data['hash'] = $request->post('hash');

        if(!$data['author'] || !$data['content'] || !$data['hash']){
            return response('<div style="padding: 50px;text-align: center">逗逼，数据不能为空！<br></br><a href="/admin/article.html">返回</a>  <a href="/">首页</a>  <a href="/admin/article.html">表单页</a></div>',200);
        }
        try {
            $res = DB::table('article')->insertGetId(
                $data
            );
        }catch (QueryException $exception){
            return '<div style="padding: 50px;text-align: center"><a href="/admin/article.html">返回</a>  逗逼，排序已存在！<br>'.$exception->errorInfo[2].' !</div>';
        }

        if($res){
            return response('<div style="padding: 50px;text-align: center">新增成功！<a href="/admin/article.html">返回</a>  <a href="/'.$res.'.html">查看</a>  <a href="/">首页</a>  <a href="/admin/article.html">表单页</a></div>',200);
        }

        return redirect('/admin/article.html');

    }
}