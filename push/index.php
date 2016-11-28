<?php

$body = file_get_contents('php://input');
$data = json_decode($body, true);

$dirName = __DIR__ . "/../channels/calls";
$fileName = $dirName . "/" . $data['channel']['channel_id'] . ".json";

if(!file_exists($dirName)){
  mkdir($dirName);
}

if(file_exists($fileName)){
  $readFile = fopen($fileName, "r");

  $fileData = json_decode(fread($readFile, filesize($fileName)), true);
  $fileData["last_called"] = date("r", time());

  fclose($readFile);
} else {
  $fileData = Array("last_called" => time(), "calls" => Array());
}

$keyvals = Array();
foreach($data["notification"] as $key => $val){
  array_push($keyvals, $key . ": " . $val);
}

array_unshift($fileData["calls"], implode("\n", $keyvals));

$writeFile = fopen($fileName, "w+");
fwrite($writeFile, json_encode($fileData));
fclose($writeFile);
