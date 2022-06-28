<?php
require './cfg.php';
require 'Mig.php';

$db=require $INC.'/db.php';
$tableDirectory = $ROOT.'/tables';
$dbType=$cfgDB[$cfg['defaultDB']]['type'];
$mig = new Mig($db->pdo, $tableDirectory, $dbType);
system("clear");
print 'executando migrations...' . PHP_EOL;
if ($mig->run()) {
    print 'migrations executadas com sucesso =)' . PHP_EOL;
}
