<?php

class Test extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index () {
        $this->view("template/header");
       // print_r($_SESSION);
        $is_auth = isset($_SESSION["username"]);
        if($is_auth){
$this->view("test/test");
        }else{
            $this->view("test/noauth");
        }
      //  $this->view("test/test");
        $this->view("template/footer");
    } 
function login(){

    if($_SESSION["request_method"] == "post"){
$post_csrf = htmlentities($_POST["csrf"]);
$cook_csrf = htmlentities($_COOKIE["csrf"]);
$csrf = $_SESSION["csrf"];

if($csrf == $post_csrf && $csrf == $cook_csrf){

        $this->model("InfoModel");
        $cl_name =htmlentities($_POST["username"]);
        $cl_pass = htmlentities($_POST["password"]);
       // print_r($_SESSION);
        $auth = $this->InfoModel->authenticateUser('sarabmaan0@gmail.com', '12345678');
        if($auth){
           echo("Authenticated");
        }else{
            echo("not authenticated");
    }}
    }else{
        echo("hello");
        $csrf = htmlentities(random_int(10000, 100000000));
        $_SESSION['csrf'] = $csrf;
       // $_SESSION['$csrf'] = $csrf;
        $_COOKIE['csrf'] = $csrf;
        $this->view("test/login", array("csrf" => $csrf));
        echo("hi ");
    }
}

function Logout(){
session_unset();
session_destroy();
$_SESSION = array();
header("location:/test/");

}
}

?>