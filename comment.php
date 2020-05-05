<?php

if(isset($_POST['submit'])){
    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $COMMENT = $_POST['comment'];  

    $conn = mysqli_connect('localhost','root','','personal') ;
    $sql = "INSERT INTO `feeds`(`NAME`,`EMAIL`,`COMMENTS`) VALUES('$NAME','$EMAIL','$COMMENT')";
    if(!mysqli_querry($conn,$sql)){
        echo "NOT STORED IN DATABASE" ;
    }
    else{
        header("location :https://localhost/personal website/index.html");
    }



}


?>