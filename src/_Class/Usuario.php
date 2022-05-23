<?php 

class Usuario {
    public readonly string $dtNascimento;
    public readonly string $cpf;
    public readonly int $idUser;
    private string $nome;
    private string $cep;
    private string $email;
    private array $perfilConcurso;
    private array $bancaCharge;

    public static int $qntUsuarios = 0;

    public function __construct(string $dtNascimento, string $cpf, int $idUser, string $nome, string $cep, string $email){
        $this->$dtNascimento = $dtNascimento;
        $this->$cpf = $cpf;
        $this->$idUser = $idUser;
        $this->$nome = $nome;
        $this->$cep = $cep;
        $this->$email = $email;

        self::$qntUsuarios++;
    }
    


}