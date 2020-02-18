<?php
require_once('database.php');

$ToDoItems = filter_input(INPUT_GET, 'ToDOItems', FILTER_VALIDATE_INT);

    if($ToDoItems == NULL || $ToDoItems == FALSE){
        $ToDoItems = 1;
    }
 

$query = "SELECT ItemNum, Title, itemDes
        FROM ToDOItems";
$statement= $db ->prepare($query);
$statement->bindValue("");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Todo App</title>
</head>
<body>
    <div class= "container">
        <h2>Todo list </h2>
    
    <div class="form">

        <form method="POST" action="addItem.php" class="add-item">
            <input type="text" name="title" placeholder= "Title" >
            <input type="text" name="name" class="task-input" placeholder="Add your task item here.">
            <button type="submit" class="add_btn" name="submit"  >Add Task</button>
            <?php foreach($ToDoItems as $ToDoItems) : ?>
            
            <tr>
                <td><?php echo $ToDoItems['ItemNum']; ?></td>
                <td><?php echo $ToDoItems['Title']; ?></td>
                <td><?php echo $ToDoItems['itemDes']; ?></td>
            </tr>
            <?php endforeach; ?>
        </form>
        <table>
            
        </table>
    </div>
    </div>
    
</body>
</html>