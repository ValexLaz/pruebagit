<?php
class Usuario extends Controller{
    function __construct()  { 
        
        parent::__construct();
        $this -> view -> render("usuario/index"); 
    }
}
?>