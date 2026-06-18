<?php
class Usuario{
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    public function setId($x){
        $this->id = $x;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($x){
        $this->nome = $x;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEmail($x){
        $this->email = $x;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setSenha($x){
        $this->senha = $x;
    }
    public function getSenha(){
        return $this->senha;
    }
}