<?php

// Class controller
// Loads views and models
class Controller
{
    public function view($viewFile, $data = array()){
    if(file_exists('../app/views/'.$viewFile.'.php')) {
        require_once '../app/views/'.$viewFile.'.php';
    }
    else {
        die($viewFile.'.php does not exist');
    }
    }
}