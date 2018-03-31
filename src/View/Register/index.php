<?php
/**
 * Register
 *
 * @author Gian Fonseca
 * @version versão atual da aplicação ex: v1.0
 * @since referencia nome do projeto e ano ex: idie-software 2018-1 
 * @link 
 */

$title = 'Register';?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    
    <link rel="stylesheet" type="text/css" href="<?= __CSS__ . 'form.css'; ?>">

</head>


<body data-spy="scroll" data-target=".navbar-fixed-top">


    <div class="container">
        <div class="login-isf">
            <h2>Criar Acesso</h2>


            <div class="col-md-8 col-xs-12">
                <p>
                    Bem-vindo ao Lemon Curse.
                    <br> Defina um email, senha e nome de usuário, como sendo seu meio de
                    <strong>Acesso</strong> para se cadastrar.
                    <br> Se você já efetuou o cadastro, vá para
                    <strong>Entrar</strong>.
                    <br>

                </p>
            </div>

            <div class="caixa-login col-md-4 col-xs-12 sombra-2">

                <form class="form-signin">
                    <div class="col-md-12 col-xs-12">
                        <!-- Input Email -->
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="email:">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                E-mail de acesso:</label>
                                <input type="email" id="email" minlength="11" class="form-control" placeholder="Digite seu e-mail" name="email" required email>
                            </div>
                        </div>


                        <!-- Input Senha -->
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="password">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                Senha:</label>
                                <input type="password" id="password" minlength="6" class="form-control" placeholder="Digite sua senha" name="password" required password>
                            </div>
                        </div>



                        <!-- Input User Name -->
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="name">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Nome de Usuário:</label>
                                <input type="text" name="inputName" minlength="4" id="name" class="form-control" placeholder="Digite seu Nome" name="name" required text>
                            </div>
                        </div>


                        <!-- Captcha -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-12">
                                    <div class="row">
                                        <button type="submit" data-tooltip="Realizar cadastro" class="btn btn-success btn-block tooltipped">
                                            Cadastrar
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <br>
    <br>


</body>
</html>



