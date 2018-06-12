<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 12.6.2018 г.
 * Time: 10:35
 */

class Message
{
  // Returning message as JSON
  public static function output($data){
    $error = false;
    $message = '';
    $output = ['error' => $error, 'message' => $message, 'data' => $data];
    echo json_encode($output) . '<br>';
  }


}