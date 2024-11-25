<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../util/css/style.css">
    <link rel="stylesheet" href="../util/css/primeiro_acc.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Document</title>

</head>
<body>
    <?php 

    // include '../model/bancoPRO.php'

    ?>
    <section class="cadastro">

        <div class="lado1">
            <!-- <img src="../util/img/accessoPRIme.png" alt=""> -->
        </div>

        <div class="lado2">

            <h1 class="title">Primeiro Acesso</h1>

            <form class="inputs" action="navegacao.php" method="post">

                <div class="custom_input">
                    <span class="material-symbols-outlined svg_icon">person</span>
                    <input class="input" type="text" placeholder="Nome" name="txtNome" required>
                </div>

                <div class="custom_input">
                    <span class="material-symbols-outlined svg_icon">assignment_ind</span>
                    <input class="input" type="text" placeholder="CPF:333.333.333-33" name="txtCPF"  required>
                </div>

                <div class="custom_input">
                    <!-- <span class="material-symbols-outlined svg_icon">calendar_month</span> -->
                    <input class="input" type="date" placeholder="data" name="txtDataNasc" required>
                </div>

                <div class="custom_input">
                    <span class="material-symbols-outlined svg_icon">mail</span>
                    <input class="input" type="text" placeholder="Email" name="txtEmail" required>
                </div>


                <div class="custom_input">
                    <span class="material-symbols-outlined svg_icon">key</span>
                    <input class="input" type="text" placeholder="Senha" name="txtSenha" required>
                </div>



                <div class="butSUB">
                
                    <div style="width: 83%;" class="btn-container">

                    <a href="primeiro_acesso.php">
                        <button name="btnCadastrar">
                            <span class="text">Cadastrar</span>
                            <div class="icon-container">
        
                                <div class="icon icon--right">
                                    <span class="material-symbols-outlined castrosnLOGIN">
                                        arrow_forward
                                    </span>
                                </div>
                            </div>
                        </button>
                        </a>
                    </div>
                    
            <!-- ENTRAR -->
                <!-- <div class="btn-container">
                    <button name="btLogin">
                        <span class="text">Entrar</span>
                        <div class="icon-container">
                            <div class="icon icon--right">
                                <span class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </button>
                </div>  -->

            </div>


            </form>
            <a href="../">ja possuo um cadatro ENTRAR</a>

        </div>
    </section>





</body>

</html>