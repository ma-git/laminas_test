<?php 
require_once __DIR__ . '/vendor/autoload.php';

//use Laminas\Db\Platform\PlatformInterface; 
//use Laminas\Db\Adapter\Driver\ResultInterface;
//use Laminas\Db\Adapter\Driver\DriverInterface;
use Laminas\Db\Adapter\Adapter;

$adapter = new Adapter([
    'driver'   => 'Pdo_Mysql',
    'database' => 'laminas_first_project',
    'username' => 'root',
    'password' => '',
]);

$select = $adapter->query('SELECT * FROM `cd_players` WHERE `id` = ?', [5]);
var_dump($select);
?>