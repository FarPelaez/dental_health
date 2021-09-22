<?php
class Citas{
    private $db;
    private $db_table="citas";

    public $idcita;
    public $idpaciente;
    public $idmedico;
    public $fecha;
    public $hora;
    public $procedimiento;

    public $result;

    public function __construct($db){
        $this->db = $db;
    }


}