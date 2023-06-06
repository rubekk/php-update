<?php
    if($_POST){
        $newName=$_POST['uname'];
        $newEmail=$_POST['email'];
        $newPhone=$_POST['phone'];
        $emailID=$_POST['emailvalue'];

        include "connection.php";

        if($connection){    
            $sql="UPDATE users SET uname='$newName', email='$newEmail', phone='$newPhone' WHERE email='$emailID'";
            mysqli_query($connection, $sql);
        }    
        mysqli_close($connection);
    }
?>