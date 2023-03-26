
<link rel="stylesheet" type="text/css" href="new.css">
<?php include("view/top.php"); ?>

<div class="container">    
<div class="row">

<h3 style=" padding-bottom: 50px; color:yellow;">Các sản phẩm <?php echo $tendm; ?></h3>
<?php
if($mathang != null){
foreach($mathang as $mh):  
?>



<!-- <div class="col-sm-3 ">
  <div class="panel panel-info text-center">
    <div class="panel-heading"><a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>">
    	<?php echo $mh["tenmathang"]; ?></a></div>
    <div class="panel-body">    	
    	<a href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>">
    	<img src="<?php echo $mh["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $mh["tenmathang"]; ?>"></a>
    	<div>Giá bán: <span  class="text-danger"><?php echo number_format($mh["giaban"]); ?>đ</span>  </div>
    </div> 
	<div class="panel-footer">
        <a class="btn btn-info" href="?action=xemchitiet&mahang=<?php echo $mh["id"]; ?>">
    	Chi tiết</a> 
        <a class="btn btn-danger" href="">Chọn mua</a>  
    </div>  
     
  </div>
</div> -->

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


<?php 
endforeach; 
}
else{
    echo "<p>Vui lòng xem danh mục khác...</p>";
}
?>


</div>

<?php include("topview.php"); ?>
</div>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>

