 <?php
 //ȷ�������ӿͻ���ʱ���ᳬʱ
 set_time_limit(0);

 //����IP�Ͷ˿ں�
 $address='127.0.0.1';
 $port=1500;

 //����һ��SOCKET
 if(($sock=socket_create(AF_INET,SOCK_STREAM,SOL_TCP))<0)
{
       echo "socket_create() failed: reason:".socket_strerror($sock)."\n";
}

//�󶨵�socket�˿�
if(($ret=socket_bind($sock,$address,$port))<0)
{
       echo "socket_bind() failed: reason:".socket_strerror($ret)."\n";
}

//��ʼ����
if(($ret=socket_listen($sock,4))<0)
{
       echo "socket_listen() failed: reason:".socket_strerror($ret)."\n";
}

do {
          if (($msgsock = socket_accept($sock)) < 0)
                   {
                              echo "socket_accept() failed: reason: " . socket_strerror($msgsock) . "\n";
                                      break;
                                           }

               //�����ͻ���
               $msg ="<font color=red>server send:welcome!</font><br>";
                    socket_write($msgsock, $msg, strlen($msg));

                         echo "read the client message\n";
                              $buf=socket_read($msgsock,8192);
                                

                                   $talkback = "received message:$buf\n";
                                        echo $talkback;
                                               if(socket_write($msgsock, $talkback, strlen($talkback))<0)
                                                        {
                                                                  echo "socket_write() failed: reason: " . socket_strerror($msgsock) . "\n";
                                                                       }
                                                    else
                                                             {
                                                                       echo "send success";
                                                                            }

                                                     
                                                        echo $buf;
                                                            socket_close($msgsock);
                                                               } while (true);

   socket_close($sock);
