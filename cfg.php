<?php

require __DIR__.'/vendor/autoload.php';

// configurações
$cfg=require __DIR__.'/cfg/cfg.php';
$cfgDB=require __DIR__.'/cfg/db.php';

// variáveis globais
$ROOT=__DIR__;
$CFG=$ROOT.'/cfg';
$INC=$ROOT.'/inc';

// scripts globais
require $INC.'/errors.php';