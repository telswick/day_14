<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 7/23/2015
 * Time: 7:46 PM
 */


include 'db_info.php';

// include database connection stuff in db_info.php
// could use require_once instead (but remember parenthesis)
// can't include the same file twice if you use require_once

// below, probably don't want "date" to be a user input from the form


?>


<h1>Create Post</h1>
<form action="edit_post.php"
          method="POST">
              Enter your blog post....<br>
        <input type="text" name="title" placeholder="Title your post"><br>
        <input type="text" name="author" placeholder="Who are you?"><br>
        <input type="datetime" name="date"><br>
        <textarea name="contents" rows="25" cols="80" onclick="this.innerhtml=''">Write something!</textarea><br><br>
        <input type="submit" name="submit" value="Submit Blog Post"><br>

    </form>

<?php

// placeholder is like value, but it disappears

if (isset($_POST['submit']))  {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $contents = $_POST['contents'];
}



?>