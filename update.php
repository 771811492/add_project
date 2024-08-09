<?php 
   include 'conect.php';
   //include 'index.php';
   
   $id=$_GET['id'];
if(isset($_POST['submit-1'])) {
    $id=$_POST['id'];
    $name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Level = $_POST['level'];
    $upd = "update student set id=$id, name='$name',phone='$Phone',level='$Level' where id=$id";
    mysqli_query($conn, $upd);
    header('location: index.php');
  }

  
?>
<?php 


$result= mysqli_query($conn,"select * from student where id=$id");

while($row= mysqli_fetch_array($result)){
  $id = $row['id'];
  $name = $row['name'];
  $Phone = $row['phone'];
  $Level = $row['level'];
   
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
 
</head>
<body>
    <!-- يسار الصفحة -->
   <div class="left">
     <form method="POST" action="">
      <input type="number" name= "id" value='<?php echo $id;?>'><br>
      <input type="text" name= "name"  value='<?php echo $name;?>'><br>
      <input type="number" name= "phone"  value='<?php echo $Phone;?>'><br>
      <input type="number" name= "level"  value='<?php echo $Level;?>'><br>
      <button type="submit" class="btn" name="submit-1">تعديل</button>
     </form>
   </div>  -->
               </thody>
          </table> 
                
      </div>
</body>
</html>

