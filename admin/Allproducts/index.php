<?php 

if(!isset($_SESSION["nguoidung"])){
    header("location:../index.php");
}
require_once("../../model/database.php");
require_once("../../model/mathang.php");
require_once("../../model/donhang.php");
require_once("../../model/khachhang.php");
require_once("../../model/diachi.php");
require_once("../../model/donhang.php");
require_once("../../model/donhangct.php");
// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$mh = new MATHANG();
$dh = new DONHANG();
switch($action){
    case "xem":
        $donhang = $dh->doctatcadonhang();
		include("main.php");
        break;
        
    	case "xoa":
            if(isset($_GET["id"])&& isset($_GET["diachigiaohang_id"])&& isset($_GET["diachi_id"]))
                if($dh->xoadonhang($_GET["id"],$_GET["diachigiaohang_id"],$_GET["diachi_id"])){
            $donhang = $dh->doctatcadonhang();
            include("main.php");}
           

    default:
        break;
}

        
    ?>