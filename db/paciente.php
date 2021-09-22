<?php
class Paciente{
    private $db;
    private $db_table="paciente";

    public $idpaciente;
    public $nombre;
    public $telefono;
    public $email;
    public $contrasena; 

    public $result;

    public function __construct($db){
        $this->db = $db;
    }

}