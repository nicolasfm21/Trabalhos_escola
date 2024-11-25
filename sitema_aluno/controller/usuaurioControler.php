<?php

class UsuarioController
{

    public function login($cpf, $senha)
    {
        require_once '../Model/UsuarioModel.php';
        $usuario = new UsuarioModel();
        // echo "<br>$cpf<br><hr>";
        $usuario->carregarUsuarioDB($cpf);
        $verSenha = $usuario->getSenha();

        // echo "</br>";
        // echo "</br>";
        // echo "<strong>Senha Digitada:</strong> $senha<br>";
        // echo "<strong>Senha no Banco (Hash):</strong> $senha<br>";

        // echo "verSenha -> $verSenha";
        // echo "senha -> $senha  ISSO To usuarioCOntroler L20";

        if($cpf === "") return false;
        if ($senha == $verSenha) {
            // echo "<hr>";
            // print_r($verSenha);
            // echo "<hr>";
            $_SESSION['Usuario'] = serialize($usuario);
            return true;
        } else {
            return false;
        }
    }

    public function inserir($nome, $cpf, $dataNasc, $email, $senha)
    {
        echo "$nome, $cpf, $dataNasc, $email, $senha";
        
        require_once '../Model/UsuarioModel.php';
        $u = new UsuarioModel();

    // // Verificar se o CPF já existe
    //  if ($u->verificarCpf($cpf)) {
    //     echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
    //     return false; // Impede o registro
    // }

        $u = new UsuarioModel();
        $u->setNome($nome);
        $u->setCpf($cpf);
        $u->setDataNascimento($dataNasc);
        $u->setEmail($email);
        $u->setSenha($senha);
        $r = $u->inserirBD();
        if ($r) $_SESSION['Usuario'] = serialize($u);
        return $r;
    }


    public function remover($id) {
        require_once '../Model/UsuarioModel.php';
        $u = new UsuarioModel();
        $r = $u->excluirBD($id);
        return $r;
        }

    // public function buscarUsuarioId($id)
    // {
    //     require_once '../Model/UsuarioModel.php';
    //     $usuario = new UsuarioModel();
    //     $usuario->buscarInformacoesPorId($id);
    //     if ($usuario != null) {
    //         $_SESSION['Usuario'] = serialize($usuario);
    //         return true;
    //     } else {
    //         return false;
    //     }
    //     require_once '../Model/UsuarioModel.php';

    //     $u = new UsuarioModel();
    //     $r = $u->buscarInformacoesPorCpfDB($cpf);
    //     return $r;
    // }



    public function atualizar( $nome, $cpf, $dataNascimento, $email, $senha){
    require_once '../Model/UsuarioModel.php';
    $usuario = new UsuarioModel();
    $usuario->setNome($nome);
    $usuario->setCpf($cpf);
    $usuario->setEmail($email);
    $usuario->setDataNascimento($dataNascimento);
    $usuario->setSenha($senha);
    $r = $usuario->atualizarBD();
    $_SESSION['Usuario' ] = serialize($usuario);
    return $r;
    }

   

};
