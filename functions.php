<?php

function connectToDb()
{
  try {
    return new PDO('mysql:host=localhost;dbname=todos', 'root', 'root');

  } catch (PDOException $ex) {
    die($ex->getMessage());
  }
}

function fetchAllTasks($pdo)
{
  $statement = $pdo->prepare('select * from tasks');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}