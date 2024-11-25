<?php
class ConexaoBD {
    private $serverName = "localhost";
    private $username = "root";
    private $password = "usbw";
    private $dbName = "projeto_final";

    public function conectar() {
        $mysqli = new mysqli(
            $this->serverName,
            $this->username,
            $this->password,
            $this->dbName
        );

        // Verifica se a conexão foi bem-sucedida
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}

$conexao = new ConexaoBD();
$mysqli = $conexao->conectar();

// Consulta para mostrar o conteúdo de uma tabela
$sql = "SELECT * FROM usuario"; // Substitua 'sua_tabela' pelo nome da tabela que você deseja consultar
$result = $mysqli->query($sql);

if($result){
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // print_r($row);

        }
    
    }else{
        echo("0");
    }
    
}else{
    echo ("fudeo" . $mysqli->connect_errno) ;
};


?>
