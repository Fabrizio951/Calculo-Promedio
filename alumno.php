<?php 
class alumno{
        //Atributos
    private $nombre;
    private $EP;
    private $EF;
    private $PPF;

    public function __construct($nombre, $EP, $EF, $PPF) {
        $this->nombre = $nombre;
        $this->EP = $EP;
        $this->EF = $EF;
        $this->PPF = $PPF;
    }
        // Métodos GET
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getEP() {
        return $this->EP;
    }
    
    public function getEF() {
        return $this->EF;
    }
    public function getPPF() {
        return $this->PPF;
    }
    // Métodos SET
    public function setFecha($nombre) {
        $this->nombre = $nombre;
    }
    public function setTrabajador($EP) {
        $this->EP = $EP;
    }

    public function setCategoria($EF) {
        $this->EF = $EF;
    }

    public function setHoras($PPF) {
        $this->PPF = $PPF;
    }
        //Metodos propios
    public function determinaPromedio(){
        return ($this->EF + $this->EP + $this->PPF)/3;
    }
    public function calculaEstado(){
        return $this->determinaPromedio() >= 11 ? "Aprobado" : "Desaprobado";
    }
}

?>