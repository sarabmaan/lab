<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {
        

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

            function blog()
            {
                $this->view("template/header");
                $this->view("main/blog");
                $this->view("template/footer");
            }

            function show()
            {
                $this->view("template/header");
                $this->view("main/show");
                $this->view("template/footer");
            }


}

?>