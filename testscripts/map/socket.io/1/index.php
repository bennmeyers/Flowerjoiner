<?php
	error_reporting(E_ALL);
	set_time_limit(0);
	session_start();
	
  	$session_id = uniqid();
	
	$_SESSION['user_id'] = $session_id;

	if(empty($_SESSION['handshake'])) {
		$strkey1 = substr($_REQUEST['t'],0,10);
		$strkey2 = substr($_REQUEST['t'],-3);
		$pattern = '/[^\d]*/';
  		$replacement = '';
  		$numkey1 = preg_replace($pattern, $replacement, $strkey1);
  		$numkey2 = preg_replace($pattern, $replacement, $strkey2);
		$pattern = '/[^ ]*/';
  		$replacement = '';
  		$spaces1 = strlen($strkey1);
  		$spaces2 = strlen($strkey2);
		$data = '';
		$ctx = hash_init('md5');
  		hash_update($ctx, pack("N", $numkey1/$spaces1));
  		hash_update($ctx, pack("N", $numkey2/$spaces2));
  		hash_update($ctx, $data);
  		//$hash_data = hash_final($ctx,true);
		$origin = $_SERVER['REMOTE_ADDR'];
		$host = $_SERVER['HTTP_HOST'];
		$resource = $_SERVER['QUERY_STRING'];
		
		$hash_data = "KSqVahdyGXe4feIRVNFv:60:60:jsonp-polling,htmlfile,xhr-polling,websocket";
		header("HTTP/1.1 101 WebSocket Protocol Handshake");
		header("Upgrade: websocket");
		header("Connection: Upgrade");
		header("Content-Type: text/plain");
		header("Sec-WebSocket-Origin: http://noc.ipviking.com/");
		header("Sec-WebSocket-Location: http://noc.ipviking.com/socket.io/1/websocket/KSqVahdyGXe4feIRVNFv");
	    echo $hash_data;
	    exit(0);
	} else {
		var_dump($_REQUEST);
		var_dump($_SESSION);
	}
?>