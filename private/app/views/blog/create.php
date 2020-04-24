<h1>Create a post</h1>
<form method="post" action="/blog/create">
<input type = "hidden" value="" name="csrf">
<label for = "title">title</label>
<input type = "text" id="title" name="title">
<input type = "email" id="author" name="author">
<label for = "author">Author</label>
<label for = "content">Content</label>
<textarea name="content" id="content"></textarea>
<input type="submit">
</form>