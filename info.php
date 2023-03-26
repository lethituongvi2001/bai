<?php include("view/top.php");

require_once("model/database.php");
require_once("model/donhang.php"); 
require_once("model/mathang.php"); 
$dh = new DONHANG();
$mh = new MATHANG();
$donhang = $dh->docdonhang($_SESSION["nguoidung"]["email"]);
// $email = $_SESSION["khachhang"]["email"];
?>

<div class="container">  
<div class="row"> 
    <?php //var_dump($donhang);
    $tongtien = 1;
    ?>
   
    
    <div class="col">
	
		<table class="table table-bordered" style="color:tomato; background-color: white;">
		<tr class="info" >
		<th style="font-size:16px;font-family:OpenSans;">Email</th>
		<th style="font-size:16px;font-family:OpenSans;">Họ tên</th>
		<th style="font-size:16px;font-family:OpenSans;">Số điện thoại</th>
		<th style="font-size:16px;font-family:OpenSans;">Tên mặt hàng</th>
        <th style="font-size:16px;font-family:OpenSans;">Số lượng</th>
        <th style="font-size:16px;font-family:OpenSans;">Đơn giá</th>
		<th style="font-size:16px;font-family:OpenSans;">Thành tiền</th>
    
		
		</tr>
        <?php foreach($donhang as $ctdh): ?>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo  $ctdh["email"];  ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctdh["hoten"]; ?></td>
            <?php $mathang = $mh->laymathangtheoid($ctdh["mathang_id"]); ?>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctdh["sodienthoai"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $mathang["tenmathang"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo $ctdh["soluong"]; ?></td>
            <td style="font-size:16px;font-family:OpenSans;"><?php echo number_format($mathang["giaban"]) . "đ"; ?></td>
            <td style="font-size:16px;font-family:OpenSans;" ><?php echo number_format($ctdh["thanhtien"]) . "đ"; ?></td>
            <?php if( $ctdh["trangthai"]== 2){ ?>
            <td style="font-size:16px;font-family:OpenSans;" ><a class="btn btn-info" href = "?action=huydon&id=<?php echo $ctdh["idct"]?>&email=<?php echo  $email?>">Hủy Đơn</a></td>
            <?php }if( $ctdh["trangthai"]== 0){ ?>
            <td ><span name="success" class="badge badge-danger">Đang giao hàng</span></td>
            <td style="font-size:16px;font-family:OpenSans;" ><a class="btn btn-info" href = "?action=xacnhandonhang&id=<?php echo $ctdh["idct"]?>&email=<?php echo  $email?>">Đã nhận hàng</a></td>
            <?php }?>
		</tr>
		<?php 
       
    endforeach; ?>
	
		
    </table>
   
	</div>
    
  </div>
</div>
<?php include("view/carousel.php"); include("view/bottom.php"); ?>