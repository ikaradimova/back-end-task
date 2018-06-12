<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 11.6.2018 г.
 * Time: 15:08
 */

require_once('Database.php');
require_once('APIMethods.php');
require_once('Message.php');
require('ExceptionHandler.php');

// Adding databases (as many we want)
//$db1 = new Database('localhost', 'root', '', 'statistics');
//$db2 = new Database('localhost', 'root', '', 'testdb');
//$connection1 = $db1->connection();
//$connection2 = $db2->connection();

// Calling methods from apiMethods for each database (and dummy data)
//apiMethods::fetchAll($connection1);
//apiMethods::fetchAll($connection2);

// Inserting dummy data for tests
$anotherData = [['Google Analytics' => 150], ['Positive guys' => 5000]];
APIMethods::fetchDummyData($anotherData);