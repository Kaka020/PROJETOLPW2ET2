<?php
class Conteudo{
    protected $nome;
    protected $id_categoria;
    public function setNome($x){
        $this->nome = $x;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCat($x){
        $this->id_categoria = $x;
    }
    public function getCat(){
        return $this->id_categoria;
    }
}