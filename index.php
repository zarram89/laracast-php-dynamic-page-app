<?php

require 'functions.php';
// require 'router.php';

//connect to MySQL datavase. PDO

class Person {
  public $name;
  public $age;

  public function  breathe() {
    echo $this->name . ' is breathing';
  }
}

$person = new Person();
$person->name = "John Doe";
$person->age = 25;
$person->breathe();

#dsn - data source name (post, host, dataset, charset)
new PDO($dsn);