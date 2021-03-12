<?php
    
    if (isset($_GET['addanh'])){
        $ada = $_GET['addanh'];
    }else{
        $ada = '';
    }if($ada!=''){
      
        $_FILES['anhxe']['name'];
        $_FILES['anhxe']['tmp_name'];
        $duongdan="../image/xe".$_FILES['anhxe']['name'];
        move_uploaded_file($_FILES['anhxe']['tmp_name'],$duongdan);

        echo $sql="INSERT INTO `anhxe`(`duongdan`) 
        VALUES ('$duongdan')";
        // $connect -> query($sql);
    }
  ?>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="./cssadmin/cssadmin.css" >
</head>
<body>
<div class="themanhxe">
    <form action="" method="get" enctype="multipart/form-data">
        Thêm ảnh

        <input type="file" id="dd" name="anhxe">
        <input type="submit" id="adda" value="Thêm" name="addanh">
    </form>
</div>
</body>




