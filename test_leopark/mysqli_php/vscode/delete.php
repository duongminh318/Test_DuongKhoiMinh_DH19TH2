<?php
$id = $_GET['id'];
$sql = "DELETE FROM dmduongdung where id='$id'";
$query = mysqli_query($conn,$sql);
header('location:index.php');