<?php

$configuration = array(
    'db_dsn'  => 'mysql:host=127.0.0.1;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => null,
);
// models
require_once __DIR__.'/lib/Model/Ship.php';
require __DIR__.'/lib/Model/BattleResult.php';
// services
require __DIR__.'/lib/Service/BattleManager.php';
require __DIR__.'/lib/Service/ShipLoader.php';
require __DIR__.'/lib/Service/Container.php';



