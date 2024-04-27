<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id=$name="";

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $id=test_input($_POST["id"]);
        $name=test_input($_POST["name"]);
    }

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>form valitation</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
    id: <input type="number" name="id">
    name: <input type="text" name="name">
    <input type="submit" name="submit" value="submit">

    </form>

    <?php
    echo "<h2> your input </h2>";
    echo $id;
    echo "<br>";
    echo "$name";
    
    ?>
    
</body>
</html>