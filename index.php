<?php
namespace App\Controllers;

require_once 'config.php';
require_once 'base.php';

use App\Controllers\Database;
use App\Controllers\MyCron;
// Get database connection
$database = new Database();
$db = $database->getConnection();
// Pass connection to objects
$myCron = new MyCron($db);
$transactionId = mt_rand(100000, 999999);
$myCron->fetchMembers($transactionId);

?>