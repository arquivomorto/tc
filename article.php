<?php

require 'cfg.php';
$db=require $INC.'/db.php';
$method=$_SERVER['REQUEST_METHOD'];
if ($method=='POST') {
    // título
    $message=$_POST['message'];
    $message=trim($message);
    $messageLen=mb_strlen($message);

    // artigo
    $article=$_POST['article'];
    $article=trim($article);
    $articleLen=mb_strlen($article);
    if (
        $messageLen>=1 and
        $messageLen<=128 and
        $articleLen>=1 and
        $articleLen<=1024
    ) {
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
          'invalidArticle'
        ];
        require 'view/error.php';
    }
} else {
    $messageId=$_GET['id'];
    $where=[
        'id'=>$messageId
    ];
    $message=$db->get('messages', '*', $where);
    if ($message) {
        require $INC.'/markdown.php';
        require 'view/article.php';
    } else {
        http_response_code(404);
        die('not found');
    }
}
