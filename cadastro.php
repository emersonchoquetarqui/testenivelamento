<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>

<?php include_once 'includes/menu.inc.php' ?>


<!--Formulário de cadastro-->
<div class="row container">
    <p>&nbsp;</p>
    <form action="banco_de_dados/create.php" method="post" class="col s12">
        <fieldset class="formulario" style="padding: 15px">;
            <legend><img src="imagens/icone.jpg" alt="[imagem]" width="100"></legend>
            <h5 class="light center">Cadastro de Usuários</h5>

            <?php
               if(isset($_SESSION['msg'])):
                   echo $_SESSION['msg'];
                   session_unset();
               endif;    
            ?>

            <!--CAMPO NOME-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                <label for="nome">Nome do Usuário</label>
            </div>


            <!--CAMPO EMAIL-->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" maxlength="50" required>
                <label for="email">E-mail do Usuário</label>
            </div>


            <!--CAMPO CPF-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="number" name="cpf" id="cpf" maxlength="30" required>
                <label for="cpf">CPF do Usuário</label>
            </div>


            <!--CAMPO PERFIL-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="perfil" id="perfil" maxlength="30" required>
                <label for="perfil">Perfil do Usuário</label>
            </div>


            <!--CAMPO ENDEREÇOS-->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="endereco" id="endereco" maxlength="50" required>
                <label for="endereco">Endereço do Usuário</label>
            </div>

            <!--BOTÕES-->
                <div class="input-field col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>

        </fieldset>
    </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>