<?php
set_time_limit(0);
$host = "10.10.97.150";
$port = 1234;
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket");
$socket_data = socket_connect($socket, $host, $port) or die("Could not connect to server");
$message = "message\n";
$socket_data = socket_write($socket, $message, strlen($message)) or die("Could not send $message to server");
socket_close($socket);
?>
