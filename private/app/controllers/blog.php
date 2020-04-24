<?php

class Blog extends Controller
{
function __construct(){
    parent::__construct();
}
//local host
    function Index(){

    $this->model("BlogModel");
    $posts = $this->BlogModel->getAllPosts();
    $input = Array("posts" => $posts);
    print_r($posts);
        $this->view("template/header");
         $this->view("blog/index", $input );
          $this->view("template/footer");

    }
 function Read($postId){
     $this->model("BlogModel");
     $post = $this->BlogModel->getPostById($postId);
    $this->view("template/header",$post );
    $this->view("blog/post", $post);
    $this->view("template/footer");
 }

 function Create(){
$is_auth = isset($_SESSION["username"]);
if($is_auth){
header("location: /blog");
return;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
$tite= $_POST["title"];
$content= $_POST["content"];
$author= $_POST["username"];

$this->model("BlogModel");
$slug= $this->BlogModel->createPost($tite, $author, $content);
header("location: /blog/read/" . $slug);

}else{ 
   $this->view("template/header");
    $this->view("blog/create");
    $this->view("template/footer");
    
}
 }
}

?>