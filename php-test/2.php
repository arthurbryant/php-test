<?php

error_reporting(E_ALL);
set_time_limit(0);
echo "<h2>TCP/IP Connection</h2>\n";

$service_port = 1500;
$address = "127.0.0.1";


$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket < 0)
{
       echo "socket_create() failed: reason: " . socket_strerror($socket) . "\n";
}
else
{
       echo "OK.<br>";
}

echo "try to connect '$address' port: '$service_port'...<br>";
$result = socket_connect($socket, $address, $service_port);
if ($result < 0)
       {
               echo "socket_connect() failed.\nReason: ($result) " . socket_strerror($result) . "\n";
                  }
   else
      {
              echo "connect success<br>";
                 }

$in = "send to server\r\n";
$in .= "send to server too\r\n";
$out = '';
$out1='';


   if(!socket_write($socket, $in, strlen($in)))
       {
               echo "socket_write() failed: reason: " . socket_strerror($socket) . "\n";
                  }
   else
      {
              echo "succeed to send message to server!<br>";
                 }


   while($out = socket_read($socket, 8192))
       {
               echo "succeed to receive the message from server!<br>";
                   echo $out;
                      }


   echo "close socket...<br>";
      socket_close($socket);
         echo "close ok<br>";
