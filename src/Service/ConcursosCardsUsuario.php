<?php
namespace TudoConcurso\Service;

class ConcursosCardsUsuario 
{

    use AcesssoAtributos;

    private string $caminhoImg;
    private bool $comissao;
    private string $nameCard;
    private int $idConcurso;
    private string $descricao;
    private string $tipoCard;
    private string $link;

    public function __construct() {
        //
    }

    public function __destruct() {
        foreach ($this as $key => $t){
            if(isset($this->$key)) {
                unset($this->$key);
            }
        }
    }

    public function setCaminhoImg( string $caminhoImg): void {
        
    }
}