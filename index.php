<?php

require 'functions.php';

sum(1, 2, true);
dd();
require 'Database.php';
require 'Response.php';
require 'router.php';



// $id = $_GET['id'];
// First way to protect from sql injections
// $query = "SELECT * FROM posts WHERE id = ?";
// $post = $db->query($query, [$id])->fetch();

// Second way to protect from sql injections
//$query = "SELECT * FROM posts WHERE id = :id";
//$post = $db->query($query, [':id' => $id])->fetch();

// echo "<li>". $post["title"] ."</li>";
