<?php

class Connection
{
  public static function make()
  {
    try {
      return new PDO('mysql:host=localhost;dbname=todos', 'root', 'root');

    } catch (PDOException $ex) {
      die($ex->getMessage());
    }
  }
}