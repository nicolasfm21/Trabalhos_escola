<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="util\css\primeiro_acc.css">
    <link rel="stylesheet" href="util\css\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <title>Document</title>
</head>
  
<body>
    <section class="cadastro">

        <div class="lado1">
        </div>

        <form class="lado2" method="post" action="controller/navegacao.php">

            <h1 class="title">Login</h1>

            <div class="inputs">

                <div class="custom_input">
                    <span class="material-symbols-outlined svg_icon">account_box</span>
                    <input class="input" type="text" placeholder="cpf" name="texCpf" >
                </div>
                <br>
                <br>


                <div class="custom_input">
                    <span class="material-symbols-outlined svg_icon">key</span>
                    <input class="input" type="text" placeholder="Senha" name="texSenha" >
                </div>

            </div>

            <div class="butSUB">
                
                    <div class="btn-container">

                    
                        <button name="btPrimeiroAcesso">
                            <span class="text">Cadastrar</span>
                            <div class="icon-container">
        
                                <div class="icon icon--right">
                                    <span class="material-symbols-outlined castrosnLOGIN">
                                        arrow_forward
                                    </span>
                                </div>
                            </div>
                        </button>
                        
                    </div>
            
                <div class="btn-container">
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
                </div>

            </div>
        </form>
    </section>





</body>

</html>