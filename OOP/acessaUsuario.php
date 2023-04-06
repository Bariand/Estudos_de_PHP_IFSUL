<?php
    require_once 'usuario_php';

    class AcessaUsuario{
        function imprimeUsuario(){
            $usuario = new Usuario;

            echo $usuario->getNome();
            echo $usuario->getCpf();
            echo $usuario->getEndereco();
        }
    }
?>