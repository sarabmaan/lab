<?php

class BlogModel extends models  {

    function __construct() {
        parent::__construct();
    }

    function getAllPosts(){
        $sql = "select slug, title, author,post_date From posts";

       $stmt = $this->db->prepare($sql);
       $stmt->execute();
       
       return $stmt->fetchAll();
    }

     function getPostById($postId){

          $sql = "select slug, title, content, post_date From posts where slug = ?";

       $stmt = $this->db->prepare($sql);
       $stmt->execute($postId);
       
       return $stmt->fetchAll();
     }

     function createPost($title, $author, $content){
$slug = (str_replace(" ", "-", strtolower($title)) . random_int(1000, 999999));

$sql = "Insert into posts(slug, title, content, author) values (?,?,?,?)";

 $stmt = $this->db->prepare($sql);
 $stmt->execute(Array($slug, $title, $content, $author));

return $slug;
     }
}


?>