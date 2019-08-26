<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once('api.php');
    $insert = new Api();
    if($insert->checkCategoryName($_POST['name'])) {
        print json_encode(['result'=>'exist']);
    }else {
        $insert->createCategory($_POST['name'], $_POST['parent']);
        $category = $insert->getCategory();
        print json_encode(['result'=>'success', 'category'=>$category]);
    }
}else {
    http_response_code('200');
    print json_encode(['result'=>'failed', 'message'=>'Request method not allowed']);
}