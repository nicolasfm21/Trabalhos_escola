<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../util/css/style.css">
    <link rel="stylesheet" href="../util/css/home.css">
    <link rel="stylesheet" href="../util/css/formacao.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="../util/javascript/script.js" defer></script>

</head>
<?php
include_once '../model/usuarioMODEL.php';
if (!isset($_SESSION)) {
    session_start();
};

?>
<path xmlns="http://www.w3.org/2000/svg" d="M8 7C9.65685 7 11 5.65685 11 4C11 2.34315 9.65685 1 8 1C6.34315 1 5 2.34315 5 4C5 5.65685 6.34315 7 8 7Z" fill="#000000" />

<body>

    <nav>

    <div class="ItemNav">

        <a class="drop" name="home" href="javascript:void(0);" onclick="showSection('home')">
            <span class="material-symbols-outlined">
                home
            </span>
            <p class="dropDow">Home</p>
        </a>
         
    </div>
    <div class="ItemNav">

        <a name="dPessoal" href="javascript:void(0);" onclick="showSection('dPessoal')">
            <span class="material-symbols-outlined">
            person
            </span>
            <p class="dropDow">Dados pessoais</p>
        </a>
      
            
    </div>
    <div class="ItemNav">

        <a name="FormaCao" href="javascript:void(0);" onclick="showSection('FormaCao')">
            <span class="material-symbols-outlined">
            badge
            </span>
            <p class="dropDow">formacao academiaca</p>
            
        </a>
         
    </div>
    <div class="ItemNav">

        <a name="sair" href="javascript:void(0);" onclick="showSection('sair')">
            <span class="material-symbols-outlined">
            power_settings_new
            </span>
            <p class="dropDow">Sair</p>
            
        </a>
         
    </div>


    </nav>


    <section class="container">
        <div id="home" class="section">
            <?php
            include_once "../view/home.php"
            ?>
        </div>
        <div id="dPessoal" class="section">
            <?php
            include_once "../view/dadosPessoais.php"
            ?>
        </div>
        <div id="FormaCao" class="section">
            <?php
            include_once "../view/Formasao_academica.php"
            ?>
        </div>

        <div id="sair" class="section">
            <?php
            include_once "../view/sair.php"
            ?>
        </div>


    </section>

</body>

</html>