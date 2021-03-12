<?php
     session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản trị website</title>
    <link rel="stylesheet"  type="text/css" href="./cssadmin/cssadmin.css" >
</head>
<body>
    <div class="log">
        <a href="indexad.php?view=dangnhap" >
            <?php
                if (!isset($_SESSION['tendangnhapad'])){
                    echo "Đăng nhập";
                    header("location: dangnhapad.php");
                }else{
                    
                    echo $_SESSION['tendangnhapad'];
                }

            ?>
        
        
        </a>
        <a href="indexad.php?view=dangxuat">Đăng xuất</a>
    </div>
    <br>    
    <div class="wrapper">
        <div class="header"><h3 style="text-align: center; font-size: 30px;   font-family: 'Times New Roman', Times, serif; color:  rgb(4, 34, 88);line-height: 30px">Quản trị trang bán hàng</h3></div>
        <div class="menu">
            <ul>
                <!-- <li><a href="indexad.php">Trang chủ</a></li> -->
                <li><a href="indexad.php?view=sanpham">Quản trị sản phẩm</a></li>
                <li><a href="indexad.php?view=donhang">Quản trị đơn hàng</a></li>
                <li><a href="indexad.php?view=nguoidung">Quản trị người dùng</a></li>
                <li><a href="indexad.php?view=thongke">Thống kê</a></li>
                <li><a href="indexad.php?view=anhx">Quản trị ảnh xe</a></li>
                <li><a href="indexad.php?view=phanhoi">Quản trị phản hồi</a></li>
                <li><a href="indexad.php?view=ad">Quản trị ADMIN</a></li>
                
            </ul>
        </div>
        <?php
       
        
        ob_start();
        if (isset($_GET['view'])){
            $login=$_GET['view'];
        }else{
            $login="1";
        }if ($login=="dangnhap"){
            header('location: dangnhapad.php');
           
        }if ($login == "dangxuat"){
            unset($_SESSION['tendangnhapad']);
            header("location: dangnhapad.php");
        }
        if(isset($_GET['view'])){
                $view=$_GET['view'];
            }else{
                $view="";
            }
            if ($view=='sanpham' || $view=='nguoidung' || $view=='donhang' || $view=='anhx' || $view=='ad' || $view =='thongke' || $view == 'phanhoi'){
                include('content.php');
            }
            //include('content.php');

            
        
        ?>
        <div class="footer"></div>
    </div>  
</body>
</html>