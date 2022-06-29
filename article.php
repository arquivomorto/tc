<?php

require 'cfg.php';
$db=require $INC.'/db.php';
$method=$_SERVER['REQUEST_METHOD'];
if ($method=='POST') {
    $article=$_POST['article'];
    $article=trim($article);
    $articleLen=mb_strlen($article);
    $message=$_POST['message'];
    $message=trim($message);
    $messageLen=mb_strlen($message);
    if ($articleLen>=1 and $messageLen>=1) {
        $data=[
            'article'=>$article,
            'message'=>$message,
            'language'=>'pt',
            'created_at'=>time(),
            'type'=>'article'
        ];
        $db->insert('messages', $data);
        $url=$cfg['siteUrl'];
        header('Location: '.$url);
    } else {
        $error=[
          'invalidMessage'
        ];
        require 'view/error.php';
    }
} else {
    $messageId=$_GET['id'];
    $where=[
        'id'=>$messageId
    ];
    $message=$db->get('messages', '*', $where);
    if($message){
        require $INC.'/markdown.php';
        require 'view/article.php';
    }else{
        http_response_code(404);
        die('not found');
    }
}
