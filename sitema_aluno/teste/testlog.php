<?php

    // print_r($_REQUEST);

    if(isset($_POST['submit'])) {
        
        include_once('conct.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = $mysqli->query($sql);

        print_r($sql);
        echo("<br>");
        print_r($result);
    
    }else  {
        header('location:login.php');


    };

?>