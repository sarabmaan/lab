<?php

class BlogModel extends model  {

    function __construct() {
        parent::__construct();
    }

    function getAllPosts(){
        $sql = "SELECT slug, title, author,post_date FROM posts";

       $stmt = $this->db->prepare($sql);
       $stmt->execute();
       
       return $stmt->fetchAll();
    }

     function getPostById($postId){

          $sql = "SELECT 'slug', 'title', 'content', 'author', 'post_date' From posts where slug = ?";

       $stmt = $this->db->prepare($sql);
       $stmt->execute(Array($postId));
       
       return $stmt->fetch();
     }

     function createPost($title, $author, $content){
$slug = (str_replace(" ", "-", strtolower($title)) . random_int(1000, 999999));

$sql = "INSERT INTO post(slug, title, content, author) values (?,?,?,?)";

 $stmt = $this->db->prepare($sql);
 $stmt->execute(Array($slug, $title, $content, $author));

return $slug;
     }
}


?>