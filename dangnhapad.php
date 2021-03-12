
<?php     
        session_start();
        if(isset($_POST['nutdn'])){
            $tendangnhap = $_POST['tendn'];
            $matkhau = $_POST['mkdn'];
            if ($tendangnhap=="" || $matkhau=="" ){              
            }
            else{
                 include('../home/moduls/connection.php');
                 $sql = "SELECT * FROM userad WHERE tendangnhapad='$tendangnhap' AND matkhau='$matkhau' ";
                //  echo $sql;    
                 $result = $connect->query($sql);
                 $row_thongtin=mysqli_fetch_array($result);
                 if ($result->num_rows != 0 ){         
                    $_SESSION['tendangnhapad']=$tendangnhap;
                    $_SESSION['chucvu']=$row_thongtin['chucvu'];
                    // echo $_SESSION['chucvu'];
                    header("location:indexad.php");
                      $check ="0";
                      $_SESSION['check']=$check;    
                 }else{
                  echo 
                  '<script>
                      alert("Sai!!!!");
                  </script>';       
                    $check ="0";
                    $_SESSION['check']=$check;             
                  header("refresh:2");
                  
                 }

             }
        }
        
        

?>


















<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="jquery-3.4.1.min.js"></script>

<div class="wrapper">
    <form action="" method="post" id="formdn" enctype="multipart/form-data">
        <div class="title1">
            Đăng Nhập ADMIN
        </div>
        <div class="social_media">
            <!-- <div class="item">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="item">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="item">
                <i class="fab fa-google-plus-g"></i>
            </div> -->
        </div>
        
        <div class="form2">
            <div class="input_field">
                <input type="text" placeholder="Tên" class="input" id="tendn" name="tendn" required>
                <i class="fas fa-user"></i>
            </div>

            <p id="loitendn"></p>


            <div class="input_field">
                <input type="password" placeholder="Nhập mật khẩu" class="input" id="matkhaudn" name='mkdn' required>
                <i class="fas fa-lock"></i>
            </div>

            <p id="loimkdn"></p>


            <div class="btn">
                <input class="nutdn" type="submit" value="Đăng nhập" name='nutdn'>
                <!-- <a class="dk" href="index.php?check=dangnhap&dk1=dangky" name="dk">Đăng ký</a> -->
                <!-- <a href="#">Register</a> -->
            </div>
        </div>
    </form>
</div>

<style>

@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
  background: rgb(250, 232, 184);
}
p{
    color: red;
    font-size: 15px;
    display: none;
    padding-left: 10px;
}


.wrapper{
  max-width: 350px;
  width: 100%;
  height: auto;
  background: rgb(243, 203, 203);
  padding: 60px 45px;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-radius: 20px;
}

.wrapper .title1{
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: #e0730c;
}

.wrapper .social_media{
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.wrapper .social_media .item{
  margin: 0 5px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 2px solid #e0730c;
  border-radius: 50%;
  cursor: pointer;
  color: #e0730c;
  transition: all 0.5s ease;
}

.wrapper .social_media .item:hover{
  border: 2px solid blue;
  color: blue;
}

.wrapper .form2 .input_field{
  position: relative;
  margin-bottom: 10px;
}

.wrapper .form2 .input_field .input{
  width: 100%;
  padding: 12px;
  padding-left: 30px;
  border: none;
  background: #eeeeee;
}

.wrapper .form2 .btn .nutdn{
  width: 70%;
  margin: 20px auto 10px 38px;
  background: #e0730c;
  text-align: center;
  padding: 12px;
  font-size: 18px;
  border-radius: 25px;
}
.wrapper .form2 .btn .nutdn:hover{
  background: #073da1;
  border: 2px solid #1fdd0e;
  color: white;
}
.wrapper .form2 .btn a{
    color: #e0730c;
    margin-left: 100px;  
}

.wrapper .form2 .input_field i{
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  color: #1d2120;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #1d2120;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #1d2120;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #1d2120;
}


</style>