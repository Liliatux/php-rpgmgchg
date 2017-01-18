<?php
	require 'Client.php';

   	$client1 = new Client('test');
  	$client2 = new Client('test');

  	return [
  		$client1,
  		$client2
  	];
	  
?>
