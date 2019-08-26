<?php


function like($id){

    // 读取数据
    $json = file_get_contents('json/data.json');
    // 解析数据
    $data = json_decode($json, true);

    if(!$data[$id]){
        $data[$id] = [
                'like' => 0,
                'review' => 0
            ];
    }
    $data[$id]['like'] += 1;

    file_put_contents('json/data.json',json_encode($data));

    echo json_encode([
        'code' =>200,
        'msg'  =>'Success.',
        'data' => $data[$id]['like']
    ]);
}

$id = intval($_POST['id']);
if($id == 0){
    echo json_encode([
        'code' =>500,
        'msg'  =>'fail.'
    ]);
    return false;
}
like($id);
