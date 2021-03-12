<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<div class="content">
            <div class="tieude">
                    <?php
                        //session_start();
                        if (isset($_GET['view'])){
                            $sanpham=$_GET['view'];                     
                        }else{
                            $sanpham="";
                        }if ($sanpham=="sanpham"){
                            $quantri="Quản trị sản phẩm";
                            echo $quantri;
                        }if ($sanpham=="nguoidung"){
                            $quantri="Quản trị người dùng";
                            echo $quantri;
                        }if ($sanpham=="donhang"){
                            $quantri="Quản trị đơn hàng";
                            echo $quantri;
                        }if ($sanpham=="ad"){
                            $quantri="Quản trị ADMIN";
                            echo $quantri;
                        }if ($sanpham=="anhx"){
                            $quantri="Quản trị ảnh";
                            echo $quantri;
                        }if ($sanpham=="thongke"){
                            $quantri="Thống kê bán hàng";
                            echo $quantri;
                        }if ($sanpham=="phanhoi"){
                            $quantri="Thống kê phản hồi";
                            echo $quantri;
                        }
                      
                      
                    ?>
            </div>
            
            <div class="bangthem">
                
            
                    <?php
                          include('../home/moduls/connection.php');
                        if ($sanpham=="sanpham"){
                            ?>
                                <div>  <a href="indexad.php?view=sanpham&add=1" class="nutthemsp">Thêm sản phẩm</a> </div>
                            <?php
                        }else{
                            ?>
                                <!-- <div>  <a href="indexad.php?view=chitiet&add=1" class="nutthemsp">Thêm sản phẩm</a> </div> -->
                            <?php
                        }



                        if (isset($_GET['add'])){
                            $themsp=$_GET['add'];
                        }else{
                            $themsp="";
                        }if ($themsp=="1"){
                            include('themsanpham.php');
                          
                        }
                      
                        if (isset($_GET['view'])){
                            $sanpham=$_GET['view'];                     
                        }else{
                            $sanpham="";
                        }if ($sanpham=="donghang"){
                            if (isset($_GET['sua'])){
                                $sua = $_GET['sua'];
                                $select = ("SELECT `id` FROM `chitietsanpham` WHERE id=$sua ");
                                $result = $connect->query($select);
                                $row = $result->fetch_assoc(); 
                                $_SESSION['ids'] = $row['id'];
                                include('suasanpham.php');
                            }
                        } else if ($sanpham=="sanpham"){
                            if (isset($_GET['sua'])){
                                $sua = $_GET['sua'];
                                $select = ("SELECT `id` FROM `product` WHERE id=$sua ");
                                $result = $connect->query($select);
                                $row = $result->fetch_assoc(); 
                                $_SESSION['ids'] = $row['id'];
                                include('suasanpham.php');
                            }
                        }            
                    ?>
                        
            </div>
            <div    class="bangsp">
                <?php
                $quyen = $_SESSION['chucvu'];
                
                    if (isset($_GET['view'])){
                        $sanpham=$_GET['view'];
                    }else{
                        $sanpham="";
                    }if ($sanpham=="sanpham"){
                        include('chucnang.php');
                    }
                    if ($sanpham=="nguoidung"){
                        include('chucnang.php');
                    }
                    if($sanpham=="donhang"){
                        include('chucnang.php');
                    }
                    if($sanpham=="anhx"){
                        include('quantrianh.php');
                    }if($sanpham=="thongke"){
                        include('thongke.php');
                    }

                    if ($_SESSION['chucvu']==""){
                        $_SESSION['chucvu']="chuadangnhap";
                        $quyen=$_SESSION['chucvu'];
                    }else{
                        $quyen=$_SESSION['chucvu'];
                    }
                    if($sanpham=="ad" && $quyen=="chushop"){
                        include('quantriadmin.php');
                    } if($sanpham=="phanhoi"){
                        include('quantriphanhoi.php');
                    }

                ?>
               
            </div>
</div>