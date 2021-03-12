<?php
    include("../home/moduls/connection.php");
    $sad = "SELECT * FROM userad where chucvu='nhanvien'";
    $rs = $connect -> query($sad);  
?>
<table class="banghienthi" style='margin: auto;'>
   
   <tr>
           <th class="oid">ID</th>
           <th class="oten">Tên đăng nhập</th>
           <th>Chức vụ</th>
           <th>Hành động</th>
           
   </tr>
   <?php
       while ($row = $rs ->fetch_assoc()){
         
           echo  "<tr>";
               echo "<td>".$row['id']."</td>";
               echo "<td>".$row['tendangnhapad']."</td>";
               echo "<td>".$row['chucvu']."</td>";
               echo "<td>";?><a href="indexad.php?view=ad&xoanv=<?=$row['id'];?>"><i class="fa fa-times"></i></a> <?php echo"</td>";
           echo "</tr>";
       }
       if (isset($_GET['xoanv'])){
           $xoanv=$_GET['xoanv'];


       }else{
           $xoanv="";

       }if ($xoanv!=""){
            $del = "DELETE FROM `userad` WHERE id='$xoanv' " ;
            $rs= $connect->query($del);    
            header("location: indexad.php?view=ad");
        }
   ?>
</table>  

