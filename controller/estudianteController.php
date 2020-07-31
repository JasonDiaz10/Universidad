<?php

require_once 'model/estudianteModel.php';
class estudianteController {
    private $model;
    function __construct() {
        $this->model = new estudianteModel();
        
    }
    public function listarEstudiantes () {
        $estudiantes = $this->model->listarEstudiantes();
        require_once 'view/include/header.php';
        require_once 'view/estudiante/listar.php';
        require_once 'view/inlclude/footer.php';
    }
}
