
<?php
  include('../home/moduls/connection.php');
    if (isset($_GET['view'])){
      $sanpham=$_GET['view'];                     
    }else{
      $sanpham="";
    }if ($sanpham=="chitiet"){
      if(isset($_GET['addsp'])){
        $d=$_GET['addsp'];
      }else{
        $d="";
      }
      if($d=='dung'){
        $tensp=$_POST['tensanpham'];
        $loai=$_POST['loaisanpham'];
        $tso=$_POST['thongso'];
        $nsx=$_POST['nhasanxuat'];
        $sql="INSERT INTO chitietsanpham(`loai`, `tensanpham`, `thongso`, `nhasanxuat`) 
              VALUES('$loai','$tensp','$tso','$nsx')";
        $connect -> query($sql);
      }
?>
    <div class="themsanpham">
        <form class="themsp" action="indexad.php?view=chitiet&add=1&addsp=dung" method="post">
            <p> Tên sản phẩm</p>
            <input type="text" name="tensanpham"> <br>
            <p> Loại sản phẩm</p>
            <input type="text" name="loaisanpham"> <br>
            <p>Thông số</p>
            <input type="text" name="thongso"> <br>
            <p>Nhà sản xuất</p>
            <input type="text" name="nhasanxuat"> <br>
           
            <input class="submit" type="submit" value="Thêm" name="addsp">
        </form>      
    </div>
<?php

//Phan nay cua san pham 

        
          } else if ($sanpham=="sanpham"){
            if(isset($_GET['addsp'])){
              $d=$_GET['addsp'];
            }else{$d="";}
              if($d=='dung'){
                $tensp=$_POST['tensanpham'];
                $loai=$_POST['loaisanpham'];
                $sluong=$_POST['sluong'];
                $gia=$_POST['gia'];
                $tso=$_POST['tso'];
                $nsx=$_POST['nsx'];
                $_FILES['anhsp']['name'];
                $_FILES['anhsp']['tmp_name'];
                $duongdan="../image/".$_FILES['anhsp']['name'];
                move_uploaded_file($_FILES['anhsp']['tmp_name'],$duongdan);

                $sql="INSERT INTO `product`( `loai`, `tensanpham`, `hinhanh`, `soluong`, `gia`,`thongso`,`nhasanxuat`) 
                VALUES ('$loai','$tensp','$duongdan','$sluong','$gia','$tso','$nsx')";
                $connect -> query($sql);
            }
          ?>
            <div class="themsanpham">
                <form class="themsp" action="indexad.php?view=sanpham&add=1&addsp=dung" method="post" enctype="multipart/form-data">
                    <p> Tên sản phẩm</p>
                    <input type="text" name="tensanpham"> <br>
                    <p> Loại sản phẩm</p>
                    <input type="text" name="loaisanpham"> <br>
                    <p>Ảnh</p>
                    <input type="file" name="anhsp">
                    <p>Số lượng</p>
                    <input type="text" name="sluong"> <br>
                    <p>Thông số</p>
                    <input type="text" name="tso"> <br>
                    <p>Nhà sản xuất</p>
                    <input type="text" name="nsx"> <br>
                    <p>Giá</p>
                    <input type="text" name="gia"> <br>
                    <input class="submit" type="submit" value="Thêm" name="addsp">
                </form>      
            </div>
        <?php
          }
        ?>





<style>
  .themsp{
      width: 500px;
      margin-top:100px;
      border: 1px solid rgb(231, 177, 158);
      background: rgb(23, 110, 168);
      padding-left: 40px;
      padding-bottom: 20px;
      border-radius: 10px;
  }
  p{
    font-size: 18px;
    color: white;
  }
  input{
      width:450px;
      height: 50px;
  }
  .submit{
      margin-top: 30px;
      margin-left: 120px;
      width:200px;
      height: 40px;
      background: rgb(4, 54, 88);
      border-radius: 10px;
      font-family: 'Times New Roman', Times, serif;
    color: blanchedalmond;
    font-size:18px;
  }
  .submit:hover{
    background: coral;

  }
</style>