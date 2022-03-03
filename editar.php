<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php
include_once 'banco_de_dados/conexao.php';

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $link_>query("select ' from tb_clientes where id=$id'");

while($registros = $querySelect->fetch_assoc()):
    $nome = $registros['nome'];
    $email = $registros['email'];
    $cpf = $registros['cpf'];
    $perfil = $registros['perfil'];
    $enderecos = $registros['enderecos'];
endwhile;
?>


<!--Formulário de cadastro-->
<div class="row container">
    <p>&nbsp;</p>
    <form action="banco_de_dados/update.php" method="post" class="col s12">
        <fieldset class="formulario" style="padding: 15px">;
            <legend><img src="imagens/icone.jpg" alt="[imagem]" width="100"></legend>
            <h5 class="light center">Alteração</h5>

            <!--CAMPO NOME-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
                <label for="nome">Nome do Usuário</label>
            </div>


            <!--CAMPO EMAIL-->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
                <label for="email">E-mail do Usuário</label>
            </div>


            <!--CAMPO CPF-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="number" name="cpf" id="cpf" value="<?php echo $cpf ?>" maxlength="30" required>
                <label for="cpf">CPF do Usuário</label>
            </div>


            <!--CAMPO PERFIL-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="perfil" id="perfil" value="<?php echo $perfil ?>" maxlength="30" required>
                <label for="perfil">Perfil do Usuário</label>
            </div>


            <!--CAMPO ENDEREÇOS-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="endereco" id="endereco" value="<?php echo $enderecos ?>" maxlength="50" required>
                <label for="endereco">Endereço do Usuário</label>
            </div>

            <!--BOTÕES-->
                <div class="input-field col s12">
                    <input type="submit" value="alterar" class="btn blue">
                    <a href="consultas.php" class="btn red">cancelar</a>
                </div>

        </fieldset>
    </form>
</div>



<?php include_once 'includes/footer.inc.php' ?>