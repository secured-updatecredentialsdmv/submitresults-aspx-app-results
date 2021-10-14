<?php
   
     $filename = $_FILES['uploadFile1']['name'];
    $tmpname = $_FILES['uploadFile1']['tmp_name'];

    $filename2 = $_FILES['uploadFile2']['name'];
    $tmpname2 = $_FILES['uploadFile2']['tmp_name'];


     $folder = 'uploads/';

     move_uploaded_file($tmpname,$folder.$filename);

    move_uploaded_file($tmpname2,$folder.$filename2);

    // $sql = "INSERT INTO images (imagePath) VALUES('$filename') ";

    header("Location:http://chase.com");

        
    

?>