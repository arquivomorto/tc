<?php

require 'cfg.php';
$db=require $INC.'/db.php';
$where=[
    'ORDER'=>['created_at'=>'DESC']
];
$messages=$db->select("messages", "*", $where);
require $VIEW.'/user.php';
