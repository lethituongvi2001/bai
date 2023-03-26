<div class="row"style="background:back;"> 
    <!-- Hàng nổi bật -->    
    <h3 style=" padding-bottom: 50px; margin-left:25px; color:yellow;">Sản phẩm nổi bật</h3>
    <?php
    foreach($mathangnoibat as $m):
    ?>
     <div class="col-sm-3" >
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
				<h3 class="myH3">Danh mục : <span>
				<a class=""  href="?action=xemnhom&madm=<?php echo $m["danhmuc_id"]; ?>">
          <?php echo $m["tendanhmuc"]; ?> </a>
		  </span></h3></div>                   
                </div>

              	 <div class="actionBtn">
			 <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>"><button id="b1">Chi tiết</button></a> 
       
				<a href="?action=chovaogio&txtmahang=<?php echo $m["id"]; ?>&txtsoluong=1"><button id="b2">Chọn mua</button></a> 
                </div>


            
            </div>
        </div>
    </div>
	 </div>
    <!-- <div class="col-sm-3">
      <div class="panel panel-danger text-center">
        <div class="panel-heading">
          <strong>
          <a class=""  href="?action=xemnhom&madm=<?php echo $m["danhmuc_id"]; ?>">
          <?php echo $m["tendanhmuc"]; ?>
          </strong>
          </a>  
        </div>
        <div class="panel-body">
          <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>"><img src="<?php echo $m["hinhanh"]; ?>" class="img-responsive" style="width:100%" alt="<?php echo $m["tenmathang"]; ?>"></a>
          <a href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>"><?php echo $m["tenmathang"]; ?></a>
        </div>
        <div class="panel-footer">
          <a class="btn btn-success" href="?action=xemchitiet&mahang=<?php echo $m["id"]; ?>">Chi tiết</a>
          <a class="btn btn-danger" href="">Chọn mua</a>
        </div>
      </div>
    </div>  -->
	
    <?php endforeach; ?>
</div>