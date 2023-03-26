
<?php include("view/top.php"); ?>
<style>
	.form-group{
	color:tomato;
	}
</style>
<div class="container">    
  <div class="row"> 
    <h3 style=" padding-bottom: 50px; color:yellow;">Vui lòng nhập đầy đủ thông tin</h3>
	<div class="col-sm-6">
	<h4 style=" color:yellow;">Thông tin khách hàng</h4>
	<?php 
	if(isset($_SESSION["khachhang"])){
	?>
	<form method="post">
		<input type="hidden" name="txtid" value="<?php echo $_SESSION["khachhang"]["id"]; ?>">
		<input type="hidden" name="action" value="luudonhang">
		<div class="form-group">
			<label >Email</label>
			<input type="email" class="form-control" name="txtemail" id="txtemail" value="<?php echo $_SESSION["khachhang"]["email"]; ?>" readonly>
		</div>
		<div class="form-group">
			<label>Họ tên</label>
			<input type="text" class="form-control" name="txthoten" id="txthoten" value="<?php echo $_SESSION["khachhang"]["hoten"]; ?>" readonly>
		</div>
		<div class="form-group">
			<label >Số điện thoại</label>
			<input type="number" class="form-control" name="txtdienthoai" id="txtdienthoai" value="<?php echo $_SESSION["khachhang"]["sodienthoai"] ?>" readonly>
		</div>
		<div class="form-group">
			<label >Địa chỉ giao hàng</label>
			<textarea class="form-control" name="txtdiachi" required></textarea>
		</div>
		<div class="form-group">
			<input type="submit" value="Hoàn tất đơn hàng" class="btn btn-primary">
		</div>
	</form>
	<?php
	}
	else{	
		?>
		<form method="post">
			<input type="hidden" name="action" value="luudonhang">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="txtemail">
			</div>
			<div class="form-group">
				<label>Họ tên</label>
				<input type="text" class="form-control" name="txthoten">
			</div>
			<div class="form-group">
				<label>Số điện thoại</label>
				<input type="number" class="form-control" name="txtdienthoai">
			</div>
			<div class="form-group">
				<label>Địa chỉ</label>
				<textarea class="form-control" name="txtdiachi"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" value="Hoàn tất đơn hàng" class="btn btn-primary">
			</div>
		</form>
		<?php	
		}
		?>
	</div>
	<div class="col-sm-6">
	<h4 style="  color:#7f00ff;">Các mặt hàng đã chọn</h4>
		<table class="table table-bordered" style="background-color: white;">
		<tr class="info">
		<th>Sản phẩm</th>
		<th>Hình ảnh</th>
		<th>Đơn giá</th>
		<th>Số lượng</th>
		<th>Thành tiền</th>
		</tr>
		<?php foreach($giohang as $mahang => $mh): ?>
		<tr>
		<td><?php echo $mh["tenhang"]; ?></td>
		<td value="<?php echo $mh ["hinhanh"]; ?>">
      		<img src="<?php echo $mh["hinhanh"]; ?>" width="90" class="img-thumbnail"></td>
		<td><?php echo number_format($mh["giaban"]) . "đ"; ?></td>
		<td><?php echo $mh["soluong"]; ?></td>
		<td><?php echo number_format($mh["sotien"]) . "đ"; ?></td>
		</tr>
		<?php endforeach; ?>
		<tr>
		<td colspan="4"align="top"><b style="font-size:30px;">Tổng tiền</b></td>
		<td><b style="font-size:30px;"><?php echo number_format(tinhtiengiohang()); ?>đ</b></td>
		</tr>
		</table>
	</div>
  </div>
</div>

<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>