<?php

require './cfg.php';
require 'I18n.php';

$languages=$cfg['languages'];
$i18n=new I18n($languages, $ROOT);
$i18n->criarTraduções();
exit('pronto!'.PHP_EOL);
