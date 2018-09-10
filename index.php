<?php
/**
 * Codegen Starts Here
 */

require_once __DIR__ . '/vendor/autoload.php';
define('QCUBED_PROJECT_MODEL_DIR', __DIR__ . '/src/Model/');
define('QCUBED_PROJECT_MODEL_GEN_DIR', __DIR__ . '/src/ModelGen/');
require_once __DIR__ . '/tools/codegen.php';

\QCubed\Database\Service::initializeDatabaseConnections();

$x = new \QCubed\Model\Test();
$x->Name = 'Vaibhav';
$x->save();

$x->Name = time();
$x->save();

echo $x->Id;
echo "<br/>";

$y = \QCubed\Model\Test::load(2);

echo $y->Name;