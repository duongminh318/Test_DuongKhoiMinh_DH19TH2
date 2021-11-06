<?php
session_start();
if(isset($_POST['submit'])){
    $maduongdung = $_POST['maduongdung'];

   
    
    $tenduongdung = $_POST['tenduongdung'];
    $Tinhtrang = $_POST['Tinhtrang'];
   
// VALIDATE FORM
if(
    empty($maduongdung) || 
    empty($tenduongdung) || 
    empty($Tinhtrang) 
  
){
  $_SESSION['error'] = 'Vui Lòng Điền Đầy Đủ Thông Tin';
header('location:index.php?page=creat');
die;  
}



$sql = "INSERT INTO dmduongdung(maduongdung,tenduongdung,Tinhtrang)"
."VALUES('$maduongdung','$tenduongdung','$Tinhtrang')";
$query = mysqli_query($conn,$sql);
//move_uploaded_file($news_image_tmp,'image/'.$news_image);
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
            <input type="text" name="maduongdung" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
       
        <div class="form-group">
            <label for="intro">tenduongdung</label>
            <input type="text" name="tenduongdung" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="detail">Tinhtrang</label>
            <input type="text" name="Tinhtrang" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
       
        <button class="btn btn-primary" name="submit" type="submit"> THÊM </button>
    </form>
</div>