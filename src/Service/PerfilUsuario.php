<?php
namespace TudoConcurso\Service;

class PerfilUsuario
{
    use AcesssoAtributos;

    private int $idUsuarios;
    private string $perfil;

    public function __construct() {
        //
    }

    public function __destruct() {
        //
    }

    public function setIdUsuarios(int $idUsuarios): void {
        if (empty($idUsuarios)){
            echo "Erro in " . __METHOD__;
            return;
        }

        $this->idUsuarios = $idUsuarios;
    }

    public function setPerfil(string $perfil): void {
        $tipoConcurso = ['Judiciario', 'Adminstrativo', 'Controle', 'Segurança', 'Fiscal', 'Lesgislativa', 'Alta Gestão', 'Magistério', 'Militar', 'Bancária'];

        if(!in_array($tipoConcurso, $perfil)){
            echo "Erro in " . __METHOD__;
            return;
        }

        $this->perfil = $perfil;
    }
}