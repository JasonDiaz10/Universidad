<?php


require_once 'baseDatos/conexion.php';
require_once 'estudiante.php';

class estudianteModel {
    
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
    }
    public function listarEstudiantes(){
        $estudiantes = array();
        $this->bd->getConeccion();
        $sql="SELECT * FROM ESTUDIANTES"; 
        $registros = $this->bd->executeQueryReturnData($sql);
        
        $this->bd->cerrarConeccion();
        
        foreach ($registros as $row){
            $estudiante = new estudiante($row['cedula'],$row['nombre'],$row['apellido'],$row['edad']);
            array_push($estudiantes, $estudiante);
                    
        }
        return $estudiantes;
    }
}
