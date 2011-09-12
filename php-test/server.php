<?php
$host = "10.10.97.116";
$port = 1234;
set_time_limit(0);
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket\n");
$result = socket_bind($socket, $host, $port) or die("Could not bind socket\n");
$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");
do
{
    $msgsock = socket_accept($socket) or die("Could not receive request from client\n");
    $buf = socket_read($msgsock, 8192) or die("Could not rread message for client\n");
    echo $buf;
} while(true);
socket_close($socket);
?>
