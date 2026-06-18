<?php
require_once "usuario.php";
class Perfil extends Usuario{
    protected $bio;
    protected $pfp;
    public function setBio($a){
        $this->bio = $a;
    }
    public function getBio(){
        return $this->bio;
    }
    public function setPfp($a){
        $this->pfp = $a;
    }
    public function getPfp(){
        return $this->pfp;
    }
}