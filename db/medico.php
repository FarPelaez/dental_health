<?php
class Medico{
    private $db;
    private $db_table="medico";

    public $idmedico;
    public $nombre;
    public $email;
    public $contrasena;
    public $especialidad;

    public $result;

    public function __construct($db){
        $this->db = $db;
    }

}