<table class="banghienthi">
   
   <tr>
           <th class="oid">ID</th>
           <th class="oten">Tên</th>
           <th >Ảnh</th>
           <th>Loại</th>
           <th>Số lượng</th>
           <th>Thông số</th>
           <th>Nhà sản xuất</th>
           <th>Giá</th>
           <th colspan=2 style="width:100px">Quản lý</th>
   </tr>
   <?php
       while ($row = $rs ->fetch_assoc()){          
           echo  "<tr>";             
               echo "<td>".$row['id']."</td>";
               echo "<td>".$row['tensanpham']."</td>";
               echo "<td> "?><img src=" <?php echo $row['hinhanh'] ?> " alt="123"><?php "</td>";
               echo "<td>".$row['loai']."</td>";
               echo "<td>".$row['soluong']."</td>";
               echo "<td>".$row['thongso']."</td>";
               echo "<td>".$row['nhasanxuat']."</td>";
               echo "<td>".$row['gia']."</td>";
               echo "<td>";?><a href="indexad.php?view=sanpham&sua=<?=$row['id'];?>"><i class="fa fa-pen"></i></a> <?php echo"</td>";
               echo "<td>";?><a href="indexad.php?view=sanpham&xoa2=<?=$row['id']?>"><i class="fa fa-times"></i></a> <?php echo"</td>";
           echo "</tr>";
       }
   ?>
</table>     