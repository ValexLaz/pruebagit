<?php
class Controller{
    function __construct(){
        //echo "Vista controlador<br>";
        $this->view = new View();
        
    }
    function loadModel($model){
        $url = 'models/'.$model.'model.php';
        if(file_exists($url)){
            require $url;
            //nombre del modelo
            $modelName = $model.'Model';
            //objeto model
            $this->model = new $modelName();
        }
    }

}
?>