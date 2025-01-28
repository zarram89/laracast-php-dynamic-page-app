<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
// First way to protect from sql injections
$query = "SELECT * FROM posts WHERE id = ?";
$post = $db->query($query, [$id])->fetch();

// Second way to protect from sql injections
//$query = "SELECT * FROM posts WHERE id = :id";
//$post = $db->query($query, [':id' => $id])->fetch();

echo "<li>". $post["title"] ."</li>";
