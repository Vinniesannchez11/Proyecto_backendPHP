<?php
  $fileName = "data-1.json";
  $data_file = fopen($fileName,"r");
  $data_readed = fread($data_file, filesize($fileName));
  $dataArray = json_decode($data_readed);
  $newData = array();

  if(isset($_POST["ciudad"]) && isset($_POST["tipo"]) && isset($_POST["from"]) && isset($_POST["to"])){
    $ciudad = $_POST["ciudad"];
    $tipo = $_POST["tipo"];
    $from = $_POST["from"];
    $to = $_POST["to"];

    echo json_encode($newData);

  }else if(isset($_POST["todos"])){
    echo $data_readed;
  }
  fclose($data_file);

?>
