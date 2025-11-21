<?php
session_start();

$json = file_get_contents("assets/json/lang.json");
$data = json_decode($json, true); // decode as array

$rows = [
    "ID" => [],
    "EN" => [],
];

foreach ($data as $item) {
    $key = $item['KEY'];
    $rows['ID'][$key] = $item['ID'];
    $rows['EN'][$key] = $item['EN'];
}

$lang = $rows[$_POST['lang']];

$_SESSION['lang'] = $lang; // lowercase


?>