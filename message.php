<?php

require 'cfg.php';
$db=require $INC.'/db.php';
$message=$_POST['message'];
$message=trim($message);
$messageLen=mb_strlen($message);
if ($messageLen>=1) {
    $data=[
      'message'=>$message,
      'language'=>'pt',
      'created_at'=>time()
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