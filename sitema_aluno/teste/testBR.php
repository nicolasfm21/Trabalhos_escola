<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
  include("conct.php");


    if(isset($_POST['submit'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
    
        $result = mysqli_query($mysqli,"INSERT INTO usuario(nome,email,cpf,senha) 
        VALUES('$nome','$email','$cpf','$senha')");
        
    };

   
    ?>

    <style>
        body {
            display: grid;
            place-items: center;
        }

        form {
            width: 20vw;
            border: 2px solid black;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 10px;
            position: relative;
            top: 80%;
        }
    </style>
    
    <form action="testBR.php" method="post">
        <h1>criar</h1>

        <input type="text" placeholder="nome" name="nome" id="nome" required>
        <input type="text" placeholder="email" name="email" required>
        <input type="text" placeholder="cpf" name="cpf" required>
        <input type="text" placeholder="senha" name="senha" required>

        <input type="submit" name="submit">

    </form>

</body>

</html>