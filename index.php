<?php 
include('conect.php');
$result= mysqli_query($conn,"SELECT * FROM student");
?>

<?php 
       // خاص بلاضافة
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $Phone = $_POST['phone'];
  $Level = $_POST['level'];
  $sqls = "INSERT INTO student VALUE ($id,'$name','$Phone','$Level')";
  mysqli_query($conn, $sqls);
  header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
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
     <form method="POST">
      <input type="number" name= "id" placeholder="ادخل رقم ترتيب الطالب" required><br>
      <input type="text" name= "name" placeholder="ادخل اسم الطالب" required><br>
      <input type="number" name= "phone" placeholder="ادخل رقم الطالب " required><br>
      <input type="number" name= "level" placeholder="ادخل مستوى الطالب" required><br>
      <button type="submit" class="btn" name="submit">اضافة</button><br>
      
     </form>
      
     
          <?php
                     // خاص بالبحث
             if(isset($_GET['search'])){
                 $searchkey = $_GET['search'];
                 $sql = "SELECT * FROM student where  id like '%$searchkey%' or name like '%$searchkey%' or  phone like '%$searchkey%' or  level like '%$searchkey%'";
             }else{
              $sql = "SELECT * FROM student";
              $searchkey ="";
             }
            $result = mysqli_query($conn,$sql);

          ?>
                  <!-- خاص بالبحث -->
          <form class="search" action="" method="GET">
              <input type="text" name="search" autocomplete="of"
           placeholder="...ابحث هنا" value="<?php echo $searchkey;?>">
             <button class="bt"> بحث </button>
          </form>
         </div>
           
      
  <!-- يمين الصفحة -->
         <div class="right">
           <table border="1">
                    <th>id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Operation</th>
                    <thody>
                <?php
                if($result){
                while ($row = mysqli_fetch_array($result)) {
                  $id=$row['id'];
                  $name=$row['name'];
                  $Phone =$row['phone'];
                  $Level=$row['level'];
                    echo '<tr>
                      <th scope="row"> '.$id.' </th>
                      <td>'.$name.'</td>
                      <td>' .$Phone.'</td>
                      <td>' .$Level.'</td>
                      <td>
                      <button class="btn1"><a href="update.php?
                      id='.$id.'" >تعديل</a></button>
                      <button class="btn2"><a href="delete.php?
                      delteteid='.$id.'" name="del">حذف</a></button>
                      </td>
                    </tr>';

                }
                } 

                ?>
               
              </thody>

         </table>       
      </div>
</body>
</html>



