<?php
namespace TudoConcurso\Model;

trait AcesssoAtributos 
{

    public function __get(string $nameVariavel){
        if(!isset($this->$nameVariavel)){
            return;
        }        
        return $this->$nameVariavel;
    }

    public function __set(string $nameVariavel, $value){

        $metodo = "set";

        $metodo .= ucfirst($nameVariavel);

        return $this->$metodo($value);
    }

}
