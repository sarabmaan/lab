<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {
        $pass = password_hash("sarabkaler", PASSWORD_DEFAULT);
        echo($pass);

        $this->view("template/header");
        $this->view("main/index");
        $this->view("template/footer");
        
    }

    function Other () {

        $this->view("template/header");
        $this->view("main/other");
        echo("<br><br><br>hello there");
        $this->view("template/footer");
            }

            
           


}

?>