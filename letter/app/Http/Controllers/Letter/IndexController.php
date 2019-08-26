<?php

namespace App\Http\Controllers\Letter;

use App\Http\Controllers\Controller;
use App\Jobs\Task;
use App\Models\Letter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    /**
     * 主页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index(){
        return view('letter.home.index');
    }

    public function about(){
        return view('letter.home.about');
    }

    public function problem(){
        return view('letter.home.problem');
    }

    public function letter(){
        return view('letter.home.letter');
    }

    public function save(Request $request){

        if($request->post('type') == 0){
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'sender' => 'required',
                'time' => 'required',
                'content_text' => 'required',
                'content_html' => 'required',
                'type' => 'required',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->first();
                return [
                    'code' => 200,
                    'msg'  =>$errors,
                    'data' => '',
                ];
            }
        }else{
            $validator = Validator::make($request->all(), [
                'sender' => 'required',
                'receiver' => 'required',
                'tel' => 'required',
                'address' => 'required',
                'time' => 'required',
                'content_text' => 'required',
                'content_html' => 'required',
                'type' => 'required',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors()->first();
                return [
                    'code' => 200,
                    'msg'  =>$errors,
                    'data' => '',
                ];
            }
        }


        $res = Letter::create(
            [
                'email' => $request->post('email'),
                'sender' => $request->post('sender'),
                'receiver' => $request->post('receiver'),
                'tel' => $request->post('tel'),
                'address' => $request->post('address'),
                'time' => $request->post('time'),
                'content_text' => $request->post('content_text'),
                'content_html' => $request->post('content_html'),
                'type' => $request->post('type'),
                'create_time' => date('Y-m-d',time())
            ]
        );

        if($res){
            if($res->type == 0) {
                $time = strtotime($res->time) - time();
                if($time<0){
                    $time = 0;
                }
                dispatch(new Task($res, $time));
            }else{
                $time = strtotime($res->time) - time() - 60*60*24*3;
                if($time<0){
                    $time = 0;
                }
                dispatch(new Task($res, $time));
            }

            return [
                'code' => 200,
                'msg'  =>'Success.',
                'data' => ''
            ];
        }

        return [
            'code' => 500,
            'msg'  =>'Failed.',
            'data' => '',
        ];
    }
}
