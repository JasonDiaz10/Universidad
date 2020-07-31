        <?php
        
       require_once 'controller/estudianteController.php';
       
       $controller = new estudianteController();
       
       if(!isset($_GET['action'])){
           $controller->listarEstudiantes();
       }else{
           $metodo = $_GET['actoin'];
           $controller->$metodo();
       
       }
       
        ?>
   
