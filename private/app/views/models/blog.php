<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
</head>
<body>
<h1> Blog Information</h1>
    <form>
        <div class="field">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <br>
        <div class="field">
            <label for="">Date</label>
        <input type="datetime" name="pubdate" id="pubdate">
    </div>
    <br>
    <div class="field">
        <label for="">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <br>
    <div class="field">
        <label for="">Author</label>
        <input type="email" name="author" id="author">
    </div>
    <br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>


