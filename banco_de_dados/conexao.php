<?php

$utf8 = header ("Content-Type: text/html; charset=utf-8");
$link = new mysqli('localhost','root','','db_novocadastro');
$link->set_charset('utf8');

?>