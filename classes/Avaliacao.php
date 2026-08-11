<?php
class Avaliacao {
    protected $id_avaliacao;
    protected $comentario;
    protected $nota;
    protected $id_usu;
    protected $id_cont;

    public function setNota($n){
        $this->nota = $n;
    }
    public function getNota(){
        return $this->nota;
    }

    public function setComentario($c){
        $this->comentario = $c;
    }
    public function getComentario(){
        return $this->comentario;
    }
}
?>