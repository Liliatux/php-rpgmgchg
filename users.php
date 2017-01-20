<?php
	require 'Client.php';

   	$client1 = new Client('1', 'za22@truc.com', date('d/m/Y', mktime(0, 0, 0, 7, 1, 2000)));
  	$client2 = new Client('2', 'tess02@muche.com', date('d/m/Y', mktime(0, 0, 0, 9, 11, 2001)));

  	return [
  		$client1,
  		$client2
  	];
	  
?>
