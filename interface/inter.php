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
        public function sound();
        public function info();
        public function make();
         public function call();
        

        

    }


    class cat implements user{
        public function sound(){

        echo "meow <br/>";
        }
        public function info(){
            echo "come here <br/>";
        }

        public function make(){
            echo " language <br/>";
        }

        public function call(){
            echo "call me <br/>";
        }
    }



    $cat = new cat();
    $cat->sound();
    $cat->info();
    $cat->make();
    $cat->call();




    
    
    
    
    ?>
    
</body>
</html>