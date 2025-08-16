<?php
$conexao = new mysqli('localhost','root','','animundo');
if($conexao->connect_error):
die("Conexão falhou:".$conexao->connect_error);
endif;