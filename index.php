<?php
// require 'router.php';
require 'functions.php';

require 'Database.php';

$db = new Database();

$posts = $db->query("SELECT * FROM posts WHERE id = 2")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
  echo "<li>". $post["title"] ."</li>";
}