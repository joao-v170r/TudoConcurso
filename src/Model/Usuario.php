<?php 
namespace TudoConcurso\Model;

class Usuario {

    use AcesssoAtributos;

    private string $dtNascimento;
    private string $nome;
    private string $cep;
    private string $email;
    private string $senha;
    private string $ensino;
    private string $salarioEsperado;

    private static int $qntUsuarios = 0;

    public function __construct(){ 

        self::$qntUsuarios++;
    }    

    public function __destruct(){
        self::$qntUsuarios--;
    }

    public function getEnsino() {
        return $this->ensino;
    }

    public function setEnsino (string $ensino): void{
        if(!empty($ensino)){
            $this->ensino = $ensino;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }
    }

    public function getSalarioEsperado() {
        return $this->salarioEsperado;
    }

    public function setSalarioEsperado (string $salarioEsperado): void{
        if(!empty($salarioEsperado)){
            $this->salarioEsperado = $salarioEsperado;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome (string $nome): void{
        if(strlen($nome) > 5){
            $this->nome = $nome;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }
    }

    public function getCep (): string{
        return $this->cep;
    }

    public function setCep (string $cep): void{
        if(strlen($cep) == 9){
            $this->cep = $cep;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }
        
    }

    public function getEmail (): string{
        return $this->email;
    }

    public function setEmail (string $email): void{
        if(!empty($email)){
            $this->email = $email;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }
    }
    
    public function getDtNascimento (): string{
        return $this->dtNascimento;
    }

    public function setDtNascimento (string $dtNascimento): void{
        if(!empty($dtNascimento) && $dtNascimento != "00/00/0000"){
            $this->dtNascimento = date('Y-m-d', strtotime($dtNascimento));;
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }
    }
    public function getSenha(): string{
        return $this->senha;
    }

    public function setSenha (string $senha): void{
        if(!empty($senha) && strlen($senha) >= 8){
            $this->senha = md5($senha);
        } else {
            echo "Error in " . __METHOD__ ;
            return;
        }       
    }

}