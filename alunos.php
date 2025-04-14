<?php
//Defina uma classe chamada aluno
class Aluno {
    //Criar uma propriedade privada (Encapsulamento) chamada de $alunos
    //essa propriedade é um array que será usado para armazenar dados e os alunos
    //Cada aluno será representado por um array associativo com nome e idade
    private $alunos = [
        ['nome' => 'João', 'idade' => 16],
        ['nome' => 'Maria', 'idade' => 18],
        ['nome' => 'Pedro', 'idade' => 22]
    ];

    // Define um método publico chamado listarAlunos.
    // Este método deverá "retornar" o conteudo do array $alunos
    public function listarAlunos()
    {
        return $this->alunos;
    }
}
