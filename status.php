<?php 
	include 'api.php';
	$api = new Api();  
	$status = $api->status($_GET['id']);
?>