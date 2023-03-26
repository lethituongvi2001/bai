<?php include("../view/top.php"); 
require_once("../../model/database.php");
require_once("../../model/mathang.php");
require_once("../../model/donhang.php");
require_once("../../model/nguoidung.php");
require_once("../../model/khachhang.php");
$dh = new DONHANG();
$mh = new MATHANG();

$donhang = $dh->doctatcadonhang();

?>

<br><br>
<div class="container">  
<div class="row"> 
    <?php //var_dump($donhang);
    $tongtien = 1;
    ?>
    <h3>Quản lý đơn hàng</h3>  
    <br>
    <table class="table table-hover">
	<tr>
    <th >Email</th>
		<th >Họ tên</th>
		<th>Số điện thoại</th>
		<th >Tên mặt hàng</th>
        <th >Số lượng</th>
        <th >Đơn giá</th>
		<th >Thành tiền</th>
     
	</tr>
      
        <?php foreach($donhang as $ctdh): ?>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo  $ctdh["email"];  ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctdh["hoten"]; ?></td>
		
        <?php $mathang = $mh->laymathangtheoid($ctdh["mathang_id"]); ?>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctdh["sodienthoai"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $mathang["tenmathang"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctdh["soluong"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo number_format($mathang["giaban"]) . "đ"; ?></td>

            <td style="font-size:16px;font-family:OpenSans;" ><?php echo number_format($ctdh["tongtien"]) . "đ"; ?></td>

          
        
           
    </td>
		</tr>
		<?php 
       
    endforeach; ?>
		
		
    </table>
        
	</div>
    
  </div>




<?php include("../view/bottom.php"); ?>