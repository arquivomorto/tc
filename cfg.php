<?php

require __DIR__.'/vendor/autoload.php';

// variáveis globais
$ROOT=__DIR__;
$CFG=$ROOT.'/cfg';
$INC=$ROOT.'/inc';
$VIEW=$ROOT.'/view';

// scripts globais
require $INC.'/errors.php';

// configurações
$cfg=require $CFG.'/cfg.php';
$cfgDB=require $CFG.'//db.php';
