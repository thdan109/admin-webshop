<?php
        include('../home/moduls/connection.php');
        
?>

<table class="banghienthi" style ="margin : auto;">
   
   <tr>
           <th class="oid">ID</th>
           <th class="oten">Tên đăng nhập</th>
           <th>Mật khẩu</th>
           <th>Email</th>
           <th>Số điện thoại</th>
           <th>Địa chỉ</th>
           
   </tr>
   <?php
       while ($row = $rs3 ->fetch_assoc()){
         
           echo  "<tr>";
               echo "<td>".$row['id']."</td>";
               echo "<td>".$row['tendangnhap']."</td>";
               echo "<td>".$row['matkhau']."</td>";
               echo "<td>".$row['email']."</td>";
               echo "<td>".$row['sodienthoai']."</td>";
               echo "<td>".$row['diachi']."</td>";
               
           echo "</tr>";
       }
    //    if (isset($_GET['xoa3'])){
    //     $xoa=$_GET['xoa3'];
    //     $delete1 = "DELETE  FROM username WHERE id='$xoa'";
    //     $connect=query($delete1);
    //     header('location: indexad.php?view=nguoidung');

    //}
   ?>
</table>  