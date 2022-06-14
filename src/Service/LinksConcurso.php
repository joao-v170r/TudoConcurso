<?php
namespace TudoConcurso\Service;

class LinksConcurso 
{   

    use AcesssoAtributos;    

    /**
     * @tipo 1 => Edital 2 => Video 3 => Noticia;
     */
    private int $tipo; 
    private string $nome;
    private string $descricao;
    //private int $idConcurso;
    private string $link;

    public function __construct() {
        //
    }

    public function __destruct() {
        foreach($this  as $key => $tipo) {
            if(isset($this->$key)) {
                unset($this->$key);
            }
        }
    }

    public function setTipo (int $tipo): void{
        if(empty($tipo) || $tipo > 3 || $tipo < 0) {
            echo "Erro in " . __METHOD__;
            return;
        }

        $this->tipo = $tipo;
    }

    public function setNome (string $nome): void{
        if (empty($nome)) {
            echo "Erro in " . __METHOD__;
            return;
        }

        $this->nome = $nome;
    }

    public function setDescricao (string $descricao): void {
        if (empty($descricao)) {
            echo "Erro in " . __METHOD__;
            return;
        }
        
        $this->descricao = $descricao;
    }

    public function setIdConcurso (int $idConcurso): void {
        if (empty($idConcurso)) {
            echo "Erro in " . __METHOD__;
            return;
        }

        $this->idConcurso = $idConcurso;
    }

    public function setLink (string $link): void {
        if (empty($link) || !fopen($link, "r")) {
            echo "Erro in " . __METHOD__;
            return;
        }

        $this->link = $link;
    }
}