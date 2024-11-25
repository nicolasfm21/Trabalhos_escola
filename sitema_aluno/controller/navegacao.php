    <?php

    if (!isset($_SESSION)) {
        session_start();
    }


    switch ($_POST) {

        case isset($_POST[Null]);
            if ($_SERVER['REQUEST_URI'] == "/sistema_aluno/") {
                header( "location: ../");
            } else {
                include_once "view/login.php";
            }

            break;


        case isset($_POST["btPrimeiroAcesso"]);
            // echo($_POST);


            include_once "../view/primeiroAcesso.php";

            break;

        case isset($_POST["btLogin"]);

            require_once "../controller/usuaurioControler.php";

            $uController = new UsuarioController();
            if ($uController->login($_POST["texCpf"], $_POST["texSenha"])) {
                include_once "../view/principal.php";
                echo ("<script>showSection('home')</script> ");
            } else {
                include_once "../view/erro.php";
            }
            break;


        case isset($_POST["btnCadastrar"]);

            require_once "usuaurioControler.php";
            $uController = new UsuarioController();
            if ($uController->inserir(
                $_POST["txtNome"],
                $_POST["txtCPF"],
                $_POST["txtDataNasc"],
                $_POST["txtEmail"],
                $_POST["txtSenha"]
            )) {
                include_once "../view/principal.php";
                exit();
            } else {
                include_once "../view/erro.php";
                exit();
            }
            
        break;

        case isset($_POST["btnCadRealizado"]);
            include_once "../View/principal.php";
            echo ("<script>showSection('home')</script> ");
            break;

        case isset($_POST["btnLoginNaoRealizado"]);
            header("location:../");
            break;

        case isset($_POST["btnSairTotal"]):
            include_once " .. /View/Sair.php";
            break;

            // case isset($_POST["btnDeletarU"]):
            //     require_once "usuaurioControler.php";
            //     $uController = new UsuarioController();
                
            //     if ($uController->remover()) {
            //         echo "<script> alert('Usuário removido com sucesso');</script>";
            //     } else {
            //         echo "<script> alert('Falha ao remover o usuário');</script>";
            //     };
                    
            
            //     break;
            
            case isset($_POST["btnAtualizarU"]);

            require_once "usuaurioControler.php";
            $uController = new UsuarioController();
            if ($uController->atualizar(

                
                $_POST["txtNomeU"],
                $_POST["txtCpfU"],
                $_POST["txtDateU"],
                $_POST["txtEmailU"],
                $_POST["txtsenhaU"]
            )) {
                include_once "../view/principal.php";
                exit();
            } else {
                include_once "../view/erro.php";
                exit();
            }

            break;

    }
