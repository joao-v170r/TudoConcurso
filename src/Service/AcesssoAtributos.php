<?php
namespace TudoConcurso\Service;

trait AcesssoAtributos 
{

    public function __get(string $nameVariavel){
        if(!isset($this->$nameVariavel)){
            return;
        }        
        return $this->$nameVariavel;
    }

    public function __set(string $nameVariavel, $value){
        if(isset($this->$nameVariavel)){
            return;
        }

        $metodo = "set";

        $metodo .= ucfirst($nameVariavel);

        return $this->$metodo($value);
    }

}
