<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 12.6.2018 г.
 * Time: 16:08
 */

function exceptionHandler($exception) {
  $error = true;
  $data= '';
  $output = ['error' => $error, 'message' => $exception->getMessage(), 'data' => $data];
  echo json_encode($output);
}

set_exception_handler('exceptionHandler');