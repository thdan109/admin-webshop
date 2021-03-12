<?php

    include('../home/moduls/connection.php');
    $sel="SELECT * FROM hoadon";
    $res = $connect -> query($sel);
?>

<table class="banghienthi" style='margin: auto;'>
   
    <tr>
            <th class="oid">ID</th>
            <th>ID khách hàng</th>
            <th class="oten">Tên Khách hàng</th>
            <th>Địa chỉ gửi</th>
            <th>Địa chỉ nhận</th>
            <th>Phí vận chuyển</th>
            <th>Tổng tiền</th>
           
            <!-- <th colspan=1>Quản lý</th>
            <th>Trạng thái 
                    <form action="">
                        
                    </form>

            </th> -->
            <!-- <th>Hành động</th> -->
    </tr>
  
    <?php
        while ($rows = $res ->fetch_assoc()){
       
    
            echo  "<tr>";
                echo "<td>".$rows['id']."</td>";
                echo "<td>".$rows['idkhachhang']."</td>";
                echo "<td>".$rows['tenkh']."</td>";
                echo "<td>".$rows['diachigui']."</td>";
                echo "<td>".$rows['diachinhan']."</td>";
                echo "<td>".$rows['phivanchuyen']."</td>";
                echo "<td>".$rows['tongtien']."</td>";      
                        
            echo "</tr>";
            
        }
        ?>
  
        
</table> 



