<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
date_default_timezone_set('America/Lima');
require_once "vendor/autoload.php";
$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config/yaml"), $isDevMode);
$conn = array(
'host' => 'dpg-cedhnuh4reb89440tmog-a',
'driver' => 'pdo_pgsql',
'user' => 'eber',
'password' => 'dZGasPYYXLC9DqGqX7su5h3maoJFkdJI',
'dbname' => 'shopping_met02',
'port' => '5432'
);
$entityManager = EntityManager::create($conn, $config);
