<?php
require './cfg.php';
require 'Mig.php';

$db=require $INC.'/db.php';
$tableDir= $ROOT.'/'.$cfg['tablesDir'];
$dbType=$cfgDB[$cfg['defaultDB']]['type'];
$mig = new Mig($db->pdo, $tableDir, $dbType);
system("clear");
print 'executando migrations...' . PHP_EOL;
if ($mig->run()) {
    print 'migrations executadas com sucesso =)' . PHP_EOL;
}
