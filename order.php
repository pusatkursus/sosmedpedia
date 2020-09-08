<?php 
	include 'api.php';
	$api = new Api();
    $order = $api->order('https://www.instagram.com/ebnshare/', '4', '20'); 
    // $api->order($link, $type , service);
?>