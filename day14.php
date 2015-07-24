<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 7/23/2015
 * Time: 6:32 PM
 */


// Quiz

function extract_color($str)  {
    if ($str === "red")  {
        return "red";
    }
    if ($str === "blue")  {
        return "blue";
    }
    else return "";

}

// don't need curly braces if there's only one statement
// if($color == 'blue' || $color == 'red')
//       return $color;
// else return "";

echo extract_color("red");
echo extract_color("blue");
echo extract_color("something");



// Starting Blog Project
// Requirements:
// Create own github repository in own account
// Everyone creates own version

// Features to put in blog
// make posts, date added to posts, delete posts, comments (extra), search, edit post, post summary,
// images, social buttons
//
// shouldn't put everything in the same file anymore
//
// 1. creating the Git repository
// 2. cloning the Git repo
// 3. creating some files
//      index.php - main page that lists all the posts  (search)
//      view_post.php - page to view one post
//      edit_post.php - page to create or edit a post
//      summary.php - (post summary)

// What order?
// Define tables to work with in database
// Create a database schema, define structure of database
//      what tables are we going to need?
//      what columns will they have?
//      what are the relationships between the tables?
//      are there any columns in one table that correspond to columns in another?

// First thing to do

// Write an include file to
// all will need access to database, connection info in include file to go in files
// for index, create and view

// Implement database connection
//      - write db_info.php that contains the MySQL server name, username, password and database name
//      - also, create an instance of 'new mysqli()' for the other pages to include

// Insert posts
// Implement post insertion
//      - Front End:
//      - create edit_post.php
//      - form with a text box for title/author, a huge text box for the post body,
//          and a submit button (some text and styling with html tags, do later)
//      - a heading "Create Post" or similar
//      - some text describing how to write a post


//      - Back End:
//      - check if form was submitted
//      - grab values from the text fields
//      - input validation - make sure all fields were filled out
//      - insert a new row into the database

// Reading
//      -  create index.php that includes the db_info.php from above
//      - select all blog posts from mysql
//      - iterate through the result with 'foreach' and display each post
//          - title, date, author, and post body
//      - create HTML tags for the page layout but no styling yet

// Searching
//      - create a search form with 1 text box and a submit button
//      - when form is submitted run a SELECT query with a WHERE that checks
//          for posts matching the search box
//      - displaying the posts is the same as above

// Summary
//      -


// still need to do edit post and delete post
// also need to be able to upload (or drag in) images








// What tables will we need?
// name table 'posts'
// and it will need: autoincrement id | title | author | date | contents
// another table called 'tags'
// and it will need: id | post_id (points to previous id from posts) | tag
// both tables enclosed in a database
//  CREATE DATABASE blog;
//  USE blog;

// in notepad or command prompt sqli write out CREATE TABLE statements
// cd vm
// connect to sql first, do vagrant ssh, from vagrant@ACA
//
// mysql -u root -proot

// and then do CREATE DATABASE blog;
// and USE blog;
// now create tables