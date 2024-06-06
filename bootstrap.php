<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . "/vendor/autoload.php";
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/entities"), $isDevMode);

$conn = array(
    'dbname' => 'hotmilhas',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
);

$entityManager = EntityManager::create($conn, $config);