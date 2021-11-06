<!-- copy file creat -->
<?php
session_start();
$id = $_GET['id'];
$sql_up = "SELECT * FROM dmduongdung where id='$id'";
$query_up = mysqli_query($conn,$sql_up);
$row_up = mysqli_fetch_array($query_up);


if(isset($_POST['submit'])){
    $maduongdung = $_POST['maduongdung'];

  
    
    $tenduongdung = $_POST['tenduongdung'];
    $Tinhtrang = $_POST['Tinhtrang'];
    /* $news_status = $_POST['news_status']; */
// VALIDATE FORM
if(
   $maduongdung  == ""|| 
   $tenduongdung  == ""|| 
 
   $Tinhtrang == ""
){
  $_SESSION['error'] = 'Vui Lòng Điền Đầy Đủ Thông Tin';
header("location:index.php?page=edit&id=$id");
die;  
}

$sql = "UPDATE dmduongdung SET
 maduongdung='$maduongdung',
 
 tenduongdung='$tenduongdung',
 
 Tinhtrang='$Tinhtrang'
  where id= '$id'";


$query = mysqli_query($conn,$sql);
header('location:index.php');

}

?>
<div class="card-body">
    <form method="POST" enctype="multipart/form-data">
    <?php 
    if(isset($_SESSION['error'])){
        echo '<p style=color:red>'.$_SESSION['error'].'</p>' ;
        unset($_SESSION['error']);
    }
    ?>
        <div class="form-group">
            <label for="title">maduongdung</label>
            <input type="text" value="<?= $row_up['maduongdung'] ?>" name="maduongdung" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
       
        <div class="form-group">
            <label for="intro">tenduongdung</label>
            <input type="text" value="<?= $row_up['tenduongdung'] ?>" name="tenduongdung" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        
        <div class="form-group">
            <label for="status">Tinhtrang</label>
            <input type="text" value="<?= $row_up['Tinhtrang'] ?>" name="Tinhtrang" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn btn-primary"  name="submit" type="submit"> SỬA </button>
    </form>
</div>