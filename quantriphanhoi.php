<?php

    include('../home/moduls/connection.php');
    $sel="SELECT * FROM phanhoi";
    $res = $connect -> query($sel);
?>

<table class="banghienthi" style='margin: auto;'>
   
    <tr>
            <th class="oid">ID</th>
            <th class="oten">Tên Người phản hồi</th>
            <th>Trải nghiệm</th>
            <th colspan=3>Đóng góp</th>
           
    </tr>
  
    <?php
        while ($rows = $res ->fetch_assoc()){
            echo  "<tr>";
                echo "<td>".$rows['idph']."</td>";
                echo "<td>".$rows['tenkh']."</td>";
                echo "<td>".$rows['trainghiem']."</td>";
                echo "<td>".$rows['donggop']."</td>";          
            echo "</tr>";
            
        }
        ?>
  
        
</table> 