<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use \NazmulB\MacAddressPhpLib\MacAddress;
use \NazmulB\MemoryCpuPhpLib\MemoryCpuUsage;

// Create the logger
$logger = new Logger('fnlogger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/../log/project.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->addInfo('My logger is now ready for action!');


echo 'Server MAC Address: ' . MacAddress::getMacAddress().'<br />';
echo 'Server Memory Usage: ' . MemoryCpuUsage::getServerMemoryUsage().'<br />';
echo 'Server CPU Usage: ' . MemoryCpuUsage::getServerCpuUsage();