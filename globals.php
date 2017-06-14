<?php

include("lib/cronofy.php");

function DebugLog($log){
  $result = file_put_contents(__DIR__ . "/log/debug.log", date("c") . " - " . $log . "\n", FILE_APPEND);
}

$GLOBALS['CRONOFY_CLIENT_ID'] = "AhNpEvTMttmiX6v64Vwb8M2xBvPo5wAI";
$GLOBALS['CRONOFY_CLIENT_SECRET'] = "Xfe5QCAtx5akvCemg_lMe6MnFmeUnnhHggD_rAdC00Unh5h9zUucd-05fWUTUMbxsExx8oMirRc-VODRKzFymw";

$GLOBALS['DOMAIN'] = "http://94b4eb83.ngrok.io/cronofy-php-sample-app/";

if($GLOBALS['CRONOFY_CLIENT_ID'] == "" || $GLOBALS['CRONOFY_CLIENT_SECRET'] == "" || $GLOBALS['DOMAIN'] == ""){
  header('Location: /setup.php');
}
