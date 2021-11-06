<?php


$sql = "SELECT * FROM dmduongdung";
$query = mysqli_query($conn,$sql);

?>

<div class="card-body">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>maduongdung</th>
                
                <th>tenduongdung</th>
                <th>tinhtrang</th>
                
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i =1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $i ++;?></td>
    <td><?= $row['maduongdung']?></td>
   
    <td><?= $row['tenduongdung']?></td>
    <td><?= $row['Tinhtrang']?></td>
    
    <td>
        <a href="index.php?page=edit&id=<?= $row['id']?>">edit</a>
    </td>
    <td>
        <a
         onclick="return confirm('bạn có chắc chắn xóa sp này ko?')"
          href="index.php?page=delete&id=<?= $row['id']?>">delete</a>
    </td>
    
    
</tr>
           <?php }
?>
</tbody>
    </table>
    <a href="index.php?page=creat" class="btn btn-danger"> THÊM SP</a>
</div>

<p>cái kia em thua rồi em làm được cái này thôi </p>