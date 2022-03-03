<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];
    $cpf = $registros['cpf'];
    $perfil = $registros['perfil'];
    $enderecos = $registros['enderecos'];

    echo "<tr>";
    echo "<td>$nome</td><td>$email</td><td>$cpf</td><td>$perfil</td><td>$enderecos</td>";
    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></td>";
    echo "<td><a href='banco_de_dados/update.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";

endwhile;