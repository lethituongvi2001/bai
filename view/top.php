<!DOCTYPE html>
<html lang="en">

<head>
  <title>It Dream - Cửa hàng buôn bán họa cụ </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="csstchu/style.css"> 
</head>
<style>
   

    footer {
      background-color: black;
      color: #f5f5f5;
      padding: 32px;
    }

    footer a:hover {
      color: #777;
      text-decoration: none;
    }

 
  </style>
<body id="abc">



<!-- new nav -->
<div class="Maincontainer">
        <nav>
        <!-- <a class="navbar-brand" href="index.php"><span><img src="images/cc.jpg" width="40px" height="40px" style="border-radius:50%;"></span> CREAM COSMETIC</a> -->
        <a  href="index.php"> <div class="logo"> Dream <b>.</b></div></a>
          <ul class="navItems">
          <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown"><i class="fa-sharp fa-solid fa-bars"></i>
            Danh mục sản phẩm
          </a>
          
          <ul class="dropdown-menu" style="background-color:#ff3c7b;">
            <?php            
            foreach($danhmuc as $dm):
            ?>
            <li><a href="?action=xemnhom&madm=<?php echo $dm["id"]; ?>"><?php echo $dm["tendanhmuc"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
            <li><a href="lienhe.php"><i class="fa-sharp fa-solid fa-dragon"></i></span> Liên hệ</a></li>
            <li><a href="draw/index.html"><i class="fa-solid fa-pen-ruler"></i> Vẽ tranh</a></li>
            <li><a href="#"data-toggle="modal" data-target="#modalTimKiem"><span class="glyphicon glyphicon-search"></span> Tìm kiếm</a></li>


                
            <?php if(isset($_SESSION["nguoidung"])) { ?>
                <li >
                  <a href="?action=xemthongtin&email"><span class="glyphicon glyphicon-user"></span> Chào <?php echo $_SESSION["nguoidung"]["hoten"]; ?></a>
                                        
                  <li class="divider"></li>
                  <li><a href="index.php?action=dangxuat2"><span class="glyphicon glyphicon-log-out"></span> Thoát</a></li>
              
                </li>
                
              <?php } else{?>


            <li><a href="?action=dangnhap"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
            
            <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
            
            <?php }?>

            <li><a href="?action=xemgiohang" class="text-warning">
                <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                <span class="badge"><?php echo demhangtronggio(); ?></span>
              </a>
            </li>
          </ul>
 
        </nav>

  <!-- Hộp tìm kiếm -->
  <div class="modal fade" id="modalTimKiem" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>x
          <h4><span class="glyphicon glyphicon-search"></span> Bạn cần tìm gì ?</h4>
        </div>
        <div class="modal-body">
          <form role="form"  method="post">
          <input type="hidden" name="action" value="timkiem">
            <div class="form-group">
              <label for="txttukhoa"><span class="glyphicon glyphicon-question"></span> Từ khóa: </label>
              <input type="text" class="form-control" id="txttukhoa" name="txttukhoa" placeholder="Nhập từ khóa">
            </div>
            <div class="form-group">
              <label for="optbang"> Trong: </label>
              <select name="optbang" class="form-control" id="optbang">
                <option value="mathang">Sản phẩm</option>
              </select>
            </div>
            <button type="submit" class="btn btn-info">Tìm kiếm
              <span class="glyphicon glyphicon-ok"></span>
            </button>
          </form>
        </div>

      </div>
    </div>
  </div>

  