

<link rel="stylesheet" type="text/css" href="new.css">
<!-- <link rel="stylesheet" href="csstchu/style.css"> -->
<?php include("view/top.php"); ?>

<div class="container" > 
	<div class="wrapper">
		<div class="cols cols0">
			<span class="topline"></span>
			<h1 id="no">Dream <span class="multiText"> </span></h1>               
			<p>Cửa hàng chuyên bán các loại họa cụ phục vụ cho mục đích vẽ tranh, cung cấp đầy đủ các loại màu sắc và dụng cụ hỗ trợ phong phú từ người mới đến họa sĩ</p>
			<div class="btns">
			
				<a href="#danhsachsanpham"><button >Mua ngay</button></a>
				<button>Chi tiết</button>
			</div>
		</div>
		<div class="cols cols1">
			<div class="imgBox">
				<img src="csstchu/img/nc2.png" id="splash">
				<img src="csstchu/img/khay.png" id="hj">
			</div>
		</div>
	</div>
  
	
 
	<!-- Tất cả mặt hàng - Xử lý phân trang -->
     	<!-- <h3>Tất cả sản phẩm </h3> -->
		<div class="row" id="danhsachsanpham">
		
		<?php
		foreach($mathang as $mh):
		?>
		<div class="col col-lg-3">
			<div class="mb-3 cardItem">
				<div class="card">
        <div class="lines"></div>
        <div class="imgBx">
			<img src="<?php echo $mh['hinhanh'] ?>">
        </div>
        <div class="content">
            <div class="details">
				<h2><?php echo $mh['tenmathang'] ?><br><span><?php echo $mh['mota'] ?></span></h2>
                <div class="data">
				<h3 class="myH3">Giá bán : <span> <?php echo $mh['giaban'] ?> đ</span></h3></div>                   
                </div>
                <div class="actionBtn">
				<a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>"><button id="b1">Chi tiết</button></a>
				<a href="?action=chovaogio&id=<?php echo $mh["id"]; ?>&soluong=1"><button id="b2">Chọn mua</button></a>
                </div>
            </div>
        </div>
    </div>
			</div>
		
		 

		<?php endforeach; ?>
		</div>
	</div>

	<div class="row"> 
	<ul class='pagination'>
		<p><?php echo $tongsotrang . $tranghh . $search?></p>
		<li><a href="?trang=1">
		<span class="glyphicon glyphicon-step-backward"></span></a></li>
		<?php
		if ($tranghh>1&&$tongsotrang>1)
		?>
		<li><a href='?trang=<?php echo $tranghh-1; ?>'>
		<span class="glyphicon glyphicon-chevron-left"></span></a></li>
		
		<?php
		for($i=1; $i<=$tongsotrang; $i++){
			if($i==$tranghh){
		?>
			<li class="active"><span><?php echo $i;?></span></li>
		<?php
			}
		else{
		?>
			<li><a href="?trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
		<?php	
			}
		}
		if($tranghh<$tongsotrang&&$tongsotrang>1)
			?>
		<li><a href='?trang=<?php echo $tranghh+1; ?>'>
			<span class="glyphicon glyphicon-chevron-right"></span></a></li>
		<li><a href='?trang=<?php echo $tongsotrang; ?>'>
			<span class="glyphicon glyphicon-step-forward"></span></a></li>
		
	</ul>
	</div>
	
	<?php include("topview.php"); ?>
  
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typingEffect = new Typed(".multiText",{
            strings : [ " ", "Shop", "Store"],
            loop:true,
            typeSpeed:100,
            backSpeed:80,
            backDelay:1500
        })
        var typingEffect = new Typed(".topline",{
            strings : [ " ", "Chào mừng bạn đã đến "],
            loop:true,
            typeSpeed:100,
            backSpeed:80,
            backDelay:1500
        })
    </script>
</div>


