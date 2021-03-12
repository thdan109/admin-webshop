<?php
    include("../home/moduls/connection.php");
   
     if (isset($_GET['month'])){
        $month=$_GET['month'];
    }else{
        $month= date('m');
    }
    $sel = "SELECT * FROM `thongke` WHERE MONTH(ngaydat) =$month  ";
    $rs = $connect->query($sel);
   
    $chart = "SELECT sanphamdadat , sum(`soluong`) as tongsl, sum(`giasp`)*sum(`soluong`) as gia FROM `thongke` WHERE MONTH(ngaydat) = $month GROUp BY  sanphamdadat";
    $rs1 = $connect ->query($chart);

    $sel1 = "SELECT sanphamdadat , sum(`soluong`) as tongsl, `giasp`*sum(`soluong`) as gia FROM `thongke` WHERE MONTH(ngaydat) = $month GROUp BY sanphamdadat";
    $rs2 = $connect->query($sel1);
    
    $chartall = "SELECT sum(`soluong`) as tongsl,sum(giasp*soluong) as gia, MONTH(ngaydat) as thang FROM `thongke` GROUp BY MONTH(ngaydat)";
    $rs_all = $connect ->query($chartall);

    $dataPoints = array();
    $sum=0;
    $summ=0;

    while ($row1 = $rs -> fetch_assoc()){
        $sum = $row1['giasp']*$row1['soluong'];
        $summ += $sum;
    }
   
    while ($row = $rs_all -> fetch_assoc()){    
        array_push($dataPoints,array('label' => 'Tháng '.$row['thang'], 'y'=>$row['gia']));
    }

?>



<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: ""
	},
	axisY: {
		title: "Biểu đồ mua bán sản phẩm",
		includeZero: false
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<table class="banghienthi" style="margin: auto; width: 800px">
    <tr>
        <th colspan=3>
        
        <select onchange="thongke()" name="" id="month" style="width: 400px; ">
        <?php
            for ($i=1;$i<13;$i++){
        ?>
            <option              
                <?php
                    if ($month==$i){                       
                ?>
                    selected = "selected";
                <?php   
                    }     
                ?>
                value="<?php echo $i;?>" > Tháng <?php echo $i;?>
            </option>
        <?php
            }
        ?>
        </select>
        </th>
    </tr>
    <tr>        
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>    
    </tr>
    <?php
        while ($rows = $rs2 ->fetch_assoc()){
            echo  "<tr>";
                echo "<td>".$rows['sanphamdadat']."</td>";
                echo "<td>".$rows['tongsl']."</td>";
                echo "<td>".$rows['gia']."</td>";  
            echo "</tr>";
            $spthongke=$rows['sanphamdadat'];
            $tongsl_thongke= $rows['tongsl'];
            $gia_thongke = $rows['gia'];      
        }
        echo "Tổng doanh thu: ".number_format($summ);

        
    ?>
</table> 
</body>
</html> 


<script>
    function thongke(){
        var months =  document.getElementById('month');
        var select1 = months.options[months.selectedIndex].value;
        window.location.href = 'indexad.php?view=thongke&month='+select1;
    }
</script>