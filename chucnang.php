
<?php
        include('../home/moduls/connection.php');
        if ($sanpham== "sanpham"){
            $select="SELECT * FROM product";
            $rs = $connect -> query($select);
            include("quantrisanpham.php");

    
        }
        else if ($sanpham=="nguoidung"){
            $select="SELECT * FROM username";
            $rs3 = $connect -> query($select);
            include("quantringuoidung.php");
        }
        else if ($sanpham=="donhang"){          
                    include("quantrigiohang.php");   
        }

        
?>          
<?php
?>
<?php
        // if (isset($_GET['xoa1'])){
        //     $xoa=$_GET['xoa1'];
        //     $delete = "DELETE  FROM chitietsanpham WHERE id='$xoa'";
        //     $rs = $connect->query($delete);
        //     // header('indexad.php?view=sanpham');
        // }
        if (isset($_GET['xoa2'])){
            $xoa=$_GET['xoa2'];
            $delete = "DELETE  FROM product WHERE id='$xoa'";
            $rs = $connect->query($delete);
            header('location: indexad.php?view=sanpham');
        }
       
       

?>

           

    