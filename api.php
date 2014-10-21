<?php
header("Access-Control-Allow-Origin: *");
$act = $_REQUEST['action'];
if($act == "save") {
	$file = "./json/".$_REQUEST['file_name'].".json";
	$content = $_REQUEST['json'];
	file_put_contents($file, $content);
	echo "reach to right destination";
} else if ($act == "get_json") {
	header("content-type: application/json");
    $json = file_get_contents('./json/'.$_REQUEST['file_name']);
    echo $json;
}

?>																					
