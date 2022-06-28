<?php
require './cfg.php';

use Medoo\Medoo;

$opts=$cfgDB[$cfg['defaultDB']];

return new Medoo($opts);
