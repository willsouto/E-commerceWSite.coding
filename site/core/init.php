<?php

$db = mysqli_connect('127.0.0.1','root','','ecommerce');
if(mysqli_connect_error()){
	echo 'Erro de conexão: '. mysqli_connect_error();
	die();
}



?>