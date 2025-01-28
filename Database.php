<?php

class Database {
  public $connection;
  public function __construct($config, $username = 'root', $password = '') {
    $dsn = "mysql:" . http_build_query($config, '', ';');

    // Tip: This should be wrapped in a try-catch. We'll learn how, soon.
    $this->connection = new PDO($dsn, $username, $password,[
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query, $params = [])  {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);

    return $statement;
  }
}
