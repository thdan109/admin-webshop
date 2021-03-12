<?php
    // include('themanh.php');
?>
<table class="banghienthi" style="margin: auto;">

   <tr>
           <th>STT</th>
           <th>Đường dẫn</th>
           <th>Quản lý</th>
   </tr>
   <?php
  
        include("../home/moduls/connection.php");
        $s = "SELECT * FROM `anhxe`";
        $rs = $connect->query($s);
       while ($row = $rs ->fetch_assoc()){
          
           echo  "<tr>";
               
               echo "<td>".$row['id']."</td>";
               echo "<td>".$row['duongdan']."</td>";
               echo "<td>";?><a href="indexad.php?view=anhx&xoa=<?=$row['id']?>"><i class="fa fa-times"></i></a> <?php echo"</td>";
           echo "</tr>";
       }
       if (isset($_GET['xoa'])){
        $xoa=$_GET['xoa'];
        $delete = "DELETE  FROM anhxe WHERE id='$xoa'";
        $rs = $connect->query($delete);

    }
   ?>
</table>