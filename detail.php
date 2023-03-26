<?php include("view/top.php"); ?>
<link rel="stylesheet" type="text/css" href="new.css">
<style>
  .text-1{
	font-weight:bold;
	color:#d00000;
}
.column {
  float: left;
  width: 60%;
  padding: 5px;
}
.btn{
  background-color:red;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-9">
	  <div class="column">
      <img width="650px" style="margin-top:20px;" src="<?php echo $mhct["hinhanh"]; ?>">
    </div>

    <div class="column-1">
      <h3 class="text-1"><?php echo $mhct["tenmathang"]; ?></h3>     
      <span class="text-2" style="font-size:45px;font-weight:bold;color:#dc2f02;"><?php echo number_format($mhct["giaban"]); ?> đ</span>
      <div><span class="text-2" style="font-size:20px;font-weight:bold;color:#f48c06">Hiện có: <?php echo $mhct["soluongton"]; ?> sản phẩm</span></div>
      <div>
        <p><?php echo $mhct["mota"]; ?></p>
        <div>
          <form class="form-inline" method="post">
          <span style="font-size:15px; font-weight:bold;color:#ffba08">Số lượng: </span>
            <input type="hidden" name="action" value="chovaogio">
            <input type="hidden" name="id" value="<?php echo $mhct["id"]; ?>">
            <input style="width:50px;" type="number" class="form-control" name="soluong" value="1" required>
           
            <input type="submit" class="btn btn-info" value="Mua ngay">
          </form>
          </div>
        </div>
      </div>
      <br>
    </div>
	
    <div class="col-sm-3">
      <h3 style="color:yellow;">Sản phẩm cùng loại:</h3>
      <div style="height: 300px; ">
        <marquee direction="up" onmouseover="stop()" onmouseout="start()"  height=620 scrollamount="10" loop >
          <?php
          foreach ($mathang as $m) :
            if ($m["id"] != $mhct["id"]) {
          ?>
             		  
			<div class="mb-3 cardItem">
				<div class="card">
        <div class="lines"></div>
        <div class="imgBx">
			<a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>">
                      <img src="<?php echo $m["hinhanh"]; ?>" class="img-responsive"></a>
        </div>
        <div class="content">
            <div class="details">
				<h2><a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>">
                      <?php echo $m["tenmathang"]; ?>
                    </a><h2>
				
                <div class="data">
				<h3 class="myH3">Giá bán : <span>  <?php echo number_format($m["giaban"]); ?>đ</span></h3></div>                   
                </div>

              	 <div class="actionBtn">
			 <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>"><button id="b1">Chi tiết</button></a> 
       
				<a href="?action=chovaogio&txtmahang=<?php echo $m["id"]; ?>&txtsoluong=1"><button id="b2">Chọn mua</button></a> 
                </div>


            
            </div>
        </div>
    </div>
		
			
			
          <?php
            }
          endforeach;
          ?>
        </marquee>
      </div>
    </div>
  </div>

</div>
<?php include("view/carousel.php"); ?>
<?php include("view/bottom.php"); ?>