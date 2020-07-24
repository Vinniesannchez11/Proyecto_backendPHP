<?php
  $data_file = fopen("./data-1.json","r");
  $data_readed = fread($data_file, filesize("./data-1.json"));
  $arrayPHP = json_decode($data_readed, true);
  $DatosJS = array();

  if(isset($_POST["ciudad"]) && isset($_POST["tipo"]) && isset($_POST["from"]) && isset($_POST["to"])){
    $ciudad = $_POST["ciudad"];
    $tipo = $_POST["tipo"];
    $from = $_POST["from"];
    $to = $_POST["to"];

    echo json_encode($DatosJS);

  }else if(isset($_POST["todos"])){
    echo $arrayPHP;
  }
  fclose($data_file);

?>
