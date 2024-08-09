
<?php

include 'conect.php';

if(isset($_GET['delteteid'])){
    $id=$_GET['delteteid'];


    $del="delete from student where id=$id";
   $result=mysqli_query($conn,$del);
     header('location: index.php');
}
  
?>