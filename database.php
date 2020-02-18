<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ToDoItems';

// Sets the dsn 
$dsn = 'mysql:host='.$host .';dbname =' .$dbname;

//Creates PDO instance
$pdo = new PDO($dsn, $user, $password);

$statement = $pdo->query('SELECT * FROM ToDoItems');

while($row = $statement->fecth()){
    echo $row->$ItemNum;
}

?>