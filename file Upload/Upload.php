
<?php
if(isset($_POST['submit'])){
    $filename = $_FILES['filename']['name'];
    $tmp_loc=$_FILES['filename']['tmp_name'];
    $uploc ='images/';
    if(!empty($filename)){
        move_uploaded_file($tmp_loc,$uploc.$filename);

    }else{
        echo 'select a file';
    }
}


?>



<div>
    <form action="Upload.php" method="post" enctype="multipart/form-data">

    select image
    <input type="file" name="filename" id=""> <br><br>
    <input type="submit" name="submit" value="Upload"id="">
    </form>
</div>