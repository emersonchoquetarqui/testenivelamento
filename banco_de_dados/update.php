<?php

session_start();
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$perfil = filter_input(INPUT_POST, 'perfil', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);

@queryUpdate = $link->query(update tb_clientes set nome='$nome', email='$email', cpf='$cpf', perfil='$perfil', endereco='$endereco' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0);
header("Location:../consultas.php");
endif;
