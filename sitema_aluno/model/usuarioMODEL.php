<?php
class UsuarioModel
{
    private $id;
    private $idusuario;
    private $nome;
    private $cpf;
    private $dataNasc;
    private $email;
    private $senha;

    public function _construct($id = null, $idusuario = null, $nome = null, $cpf = null, $dataNasc =
    null, $email = null, $senha = null)
    {
        $this->id = $id;
        $this->idusuario = $idusuario;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->email = $email;
        $this->senha = $senha;
    }
    public function getId(){
        return  $this->id;
    }

    public function getIdUsuario()
    {
        return $this->idusuario;
    }
    public function setIdUsuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getDataNascimento()
    {
        return $this->dataNasc;
    }
    public function setDataNascimento($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function carregarUsuarioDB($cpf)
    {
        require_once 'conexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Conexao falhou: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM `usuario` WHERE (`cpf` = ".$cpf.")";

        $resultado = $conn->query($sql);
        if ($resultado != null)
            while ($row = $resultado->fetch_object()) {
                $this->idusuario = $row->IdUsuario;
                $this->cpf = $row->cpf;
                $this->nome = $row->Nome;
                $this->dataNasc = $row->DataNascimento;
                $this->email = $row->email;
                $this->senha = $row->senha;
            }
        $conn->close();
        return $this;
        
    }



    public function buscarInformacoesPorId($id)
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Conexao falhou: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM `usuario` WHERE (`idusuario`=" . $id . ")";

        $resultado = $conn->query($sql);
        if ($resultado != null)
            while ($row = $resultado->fetch_object()) {
                $this->idusuario = $row->idusuario;
                $this->cpf = $row->cpf;
                $this->nome = $row->nome;
                $this->dataNasc = $row->dataNascimento;
                $this->email = $row->email;
                $this->senha = $row->senha;
            }
        $conn->close();
        return $this;

    }

    public function consultarBD($idusuario){
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM `usuario` WHERE (`idusuario`=" . $idusuario . ")";

        $tabelaRegistros = $conn->query($sql);
        $conn->close();
        return $tabelaRegistros;
    }

    public function buscarInformacoesPorCpfDB($cpf)
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM 'usuario' WHERE ('cpf'=" . $cpf . ")";

        $tabelaRegistros = $conn->query($sql);
        $conn->close();
        return $tabelaRegistros;
    }


    public function inserirBD(){
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if($conn->connect_error){
            die("Conexao falhou: ".$conn->connect_error);
        }
        $sql = "INSERT INTO `usuario` (`idusuario` , `nome` , `cpf`, `dataNascimento` , `email`,
        `senha`) VALUES (NULL, '".$this->nome."','".$this->cpf."','".$this->dataNasc."', '".
        $this->email."','".$this->senha."')";
        if($conn->query($sql) === true){
            $this->idusuario = mysqli_insert_id($conn);
            $conn->close();
            return true;
        }else{
            $conn->close();
            return false;
        
        }
    }
    public function excluirBD($id){
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if($conn->connect_error){
        die("Conexão falhou: ".$conn->connect_error);
        }
        $sql = "DELETE FROM `usuario` WHERE (`idusuario`=".$id.")";

        if($conn->query($sql) === true){
            $conn->close();
            return true;
            }else{
            $conn->close();
            return false;

        }

        }
        
        
        public function atualizarBD(){
            require_once 'ConexaoBD.php';
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if($conn->connect_error){
            die("Conexão falhou: ".$conn->connect_error);
            }
            $sql = "UPDATE `usuario` SET 
            `nome` = '".$this->getNome()."',
            `cpf` = '".$this->getCpf()."',
            `dataNascimento` = '".date('Y-m-d', strtotime($this->getDataNascimento()))."',
            `email` = '".$this->getEmail()."',
            `senha` = '".$this->getSenha()."' 
            WHERE `idusuario` = '".$this->getIdUsuario()."'";
        

            
            if($conn->query($sql) === true){
            $conn->close();
            return true;
            }else{
            $conn->close();
            return false;
            }
        }

}
