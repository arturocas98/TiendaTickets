<?php


class Artista
{
    private $id;
    private $nombre;
    private $archivo;
    private $estado;

    public function Artista($id, $nom, $arch, $est){
        $this->id    = $id;
        $this->nombre = $nom;
        $this->archivo = $arch;
        $this->estado = $est;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getArchivo(){
        return $this->archivo;
    }

    public function getEstado(){
        return $this->estado;
    }

    

    public function setNombre($nom){
        $this->nombre = $nom;
    }

    public function setArchivo($arch){
        $this->archivo = $arch;
    }

    public function setEstado($est){
        $this->estado = $est;
    }

}