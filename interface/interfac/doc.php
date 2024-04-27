<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    interface user{
        public function makesound();
    }

    class cat implements user{
        public function makesound(){
            echo "meow <br/>";
        }
    }

    class dog implements user{
        public function makesound(){
            echo "geow geow <br/>";
        }
    }

    class hen implements user{
        public function makesound(){
            echo "cock cock <br/>";
        }
    }
    

    class mouse implements user{
        public function makesound(){
            echo "squeak <br/>";
        }
    }

    $cat =new cat();
    $cat->makesound();

    $dog= new dog();
    $dog->makesound();

    $hen=new hen();
    $hen->makesound();

    $mouse= new mouse();
    $mouse->makesound();
    
    
    
    
    
    ?>
    
</body>
</html>