<?php
if(isset($_POST['txtid']) && isset($_POST['txtname'])){
    $id=$_POST['txtid'];
    $name=$_POST['txtname'];


    if($id=='1280208' && $name='shaheen'){
        echo'submit successfully!';
    }else{
        echo '<h3 style="color:red;">invalide id or name! </h3>';
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="POST" action='index2.php'>

    <label for="id">ID:</label>
    <input type="number" name="txtid" placeholder="input your id"><br><br>

    <label for="name">name:</label>
    <input type="text" name="txtname" placeholder="write your name"><br><br>

    <input type="submit" name=txtsubmit>





    </form>

    <?php
    echo "<h2> your output</h2>";
    echo "$id";
    echo"<br>";
    echo"$name";
    
    
    ?>
    
</body>
</html>