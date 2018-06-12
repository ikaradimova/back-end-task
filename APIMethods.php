<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 12.6.2018 г.
 * Time: 12:54
 */

class APIMethods{

  // Fetching data from DB
  static function fetchAll($connection){
    $data = [];
    $currentMonthTable = 'current_month';
    $stmt = $connection->query("SELECT * FROM $currentMonthTable");
    $results = (array) $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($results as $result){
      $service = $result->service;
      $visits = $result->visits;
      array_push($data, [$service => $visits]);
    }
    Message::output($data);
  }

  // Fetching dummy data
  static function fetchDummyData($anotherData){
    $data = [];
    foreach ($anotherData as $anotherDataItem){
      array_push($data, $anotherDataItem);
    }
    Message::output($data);
  }

  // other methods(fetchOne, update, delete...)
}

