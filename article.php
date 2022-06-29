<?php

require 'cfg.php';
$db=require $INC.'/db.php';
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
