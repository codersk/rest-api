<?php
  header("Content-Type:application/json");
  require "data.php";

  if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id=$_GET['id'];
    $data = get_data($id);
    if(empty($data)) {
      response(200, "Information Not Found", NULL, $id);
    } else {
      response(200, "Information Found", $data, $id);
    }
  } else {
    response(400, "Invalid Request", NULL);
  }

  function response($status, $status_message, $data, $id=null) {
    header("HTTP/1.1 ".$status);

    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;
    $response['id']=$id;

    $json_response = json_encode($response);
    echo $json_response;
  }
?>