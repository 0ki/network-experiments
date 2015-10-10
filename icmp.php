<?php
// This would probably need to be run as root.

define('ICMP',1);

	$icmp_in=socket_create(AF_INET,SOCK_RAW,ICMP);

	socket_bind($icmp_in,0); // any

	// main server loop
	while($in=socket_read($icmp_in,65535)){ //max size (crude)
		echo (65-ord($in[8]))."\n";
		//file_put_contents("/tmp/123",$in);



	}


?>
