<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/12
 * Time: 10:35
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UploadsController extends Controller
{

    public function upload(Request $request)
    {
        $path = $request->file('images')->store('public/images');

        $data = [
            'errno' => 0,
            'data' =>
                [
                    env('APP_URL').'/'.$path,
                ],
        ];
        echo json_encode($data);

    }

}