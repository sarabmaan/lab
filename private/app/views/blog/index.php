<h1>Blog Post</h1>

<ul>
<?php
foreach($posts as $post) {
echo("<li><a href=\"\\blog\\read\\" . $post-["slug"] . "\">" . $post["title"] . "</a> - <time>" . $post-["post_date"] . "</time>");
}
?>
</ul>
