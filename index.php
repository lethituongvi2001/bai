<?php
// session_start();
require("model/database.php");
require("model/danhmuc.php");
require("model/mathang.php");
require("model/giohang.php");
require("model/nguoidung.php");
require("model/khachhang.php");
require("model/diachi.php");
require("model/donhang.php");
require("model/donhangct.php");

$dm = new DANHMUC();
$mh = new MATHANG();
$nd = new NGUOIDUNG();
$danhmuc = $dm->laydanhmuc();
$soluong = 1;
$mathangnoibat = $mh->laymathangnoibat();
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {
    $action = "macdinh";
}

// Biến cho biết ng dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {
    $action = "macdinh";
}

$search = 0;
$txtSearch = "";

$mathangnoibat = $mh->laymathangnoibat();

switch ($action) {
    case "macdinh":
        $tongmh = $mh->demtongsomathang();
        $soluong = 8;
        $tongsotrang = ceil($tongmh / $soluong);
        if (!isset($_REQUEST["trang"]))
            $tranghh = 1;
        else
            $tranghh = $_REQUEST["trang"];
        if ($tranghh > $tongsotrang)
            $tranghh = $tongsotrang;
        else if ($tranghh < 1)
            $tranghh = 1;
        $batdau = ($tranghh - 1) * $soluong;
        $mathang = $mh->laymathangphantrang($batdau, $soluong);

        include("main.php");
        break;

    case "timkiem":
        if (isset($_POST["txttukhoa"]))
            $search = $_POST["txttukhoa"];


        $tongmh = $mh->demtongsomathangtimkiem($search);
        $soluong = 8;
        $tongsotrang = ceil($tongmh / $soluong);
        if (!isset($_REQUEST["trang"]))
            $tranghh = 1;
        else
            $tranghh = $_REQUEST["trang"];
        if ($tranghh > $tongsotrang)
            $tranghh = $tongsotrang;
        else if ($tranghh < 1)
            $tranghh = 1;
        $batdau = ($tranghh - 1) * $soluong;


        $mathang = $mh->laymathangphantrangtimkiem($batdau, $soluong, $search);

        include("main.php");
        break;

        // case "chovaogio":
        //     if(isset($_REQUEST["id"])){
        //         $mahang = $_REQUEST["id"];
        //     if(isset($_REQUEST["soluong"]))
        //         $soluong = $_REQUEST["soluong"];
        //     if(isset($_SESSION['giohang'][$mahang])){ // nếu đã có trong giỏ thi tăng số lượng
        //         $soluong += $_SESSION['giohang'][$mahang];
        //         $_SESSION['giohang'][$mahang] = $soluong;
        //     }
        //     else{       // nếu chưa thì thêm vào giỏ
        //         themhangvaogio($mahang, $soluong);
        //     }

        //     $giohang = laygiohang();
        //     include("cart.php");
        // }
        //     break;
    case "xemgiohang":

        $giohang = laygiohang();
        include("cart.php");
        break;
    case "capnhatgiohang":
        if (isset($_REQUEST["mh"])) {
            $mh = $_REQUEST["mh"];

            foreach ($mh as $mahang => $soluong) {
                if ($soluong > 0)
                    capnhatsoluong($mahang, $soluong);
                else
                    xoamotmathang($mahang);
            }
        }
        $giohang = laygiohang();
        include("cart.php");
        break;
    case "chovaogio":
        if (!$isLogin) {
            include('SignIn1.php');
            break;
        }
        // If result matched $username and $password, table row must be 1 row
        $count = 0;
        if ($count == 1) {
            $_SESSION['logged_in'] = 'YES'; // put session value here 
            header("location: index.php");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
        if (isset($_REQUEST["id"]))
            $mahang = $_REQUEST["id"];
        if (isset($_REQUEST["soluong"]))
            $soluong = $_REQUEST["soluong"];
        if (isset($_SESSION['giohang'][$mahang])) { // nếu đã có trong giỏ thi tăng số lượng
            $soluong += $_SESSION['giohang'][$mahang];
            $_SESSION['giohang'][$mahang] = $soluong;
        }
        // if(mathangcotronggio($mahang))
        //    tangsoluong($mahang);
        else
            themhangvaogio($mahang, $soluong);


        $giohang = laygiohang();
        include("cart.php");
        break;

    case "xemnhom":
        if (isset($_REQUEST["madm"])) {
            $madm = $_REQUEST["madm"];
            $dmuc = $dm->laydanhmuctheoid($madm);
            $tendm =  $dmuc["tendanhmuc"];
            $mathang = $mh->laymathangtheodanhmuc($madm);
            include("group.php");
        } else {
            include("main.php");
        }
        break;
        // case "xemchitiet": 
        //     if(isset($_GET["mahang"])){
        //         $mahang = $_GET["mahang"];
        //         // tăng lượt xem lên 1
        //         $mh->tangluotxem($mahang);
        //         // lấy thông tin chi tiết mặt hàng
        //         $mhct = $mh->laymathangtheoid($mahang);
        //         // lấy các mặt hàng cùng danh mục
        //         $madm = $mhct["danhmuc_id"];
        //         $mathang = $mh->laymathangtheodanhmuc($madm);
        //         include("detail.php");
        //     }
        //     break;
    case "xemchitiet":
        if (isset($_GET["mahang"])) {
            $mahang = $_GET["mahang"];
            // tăng lượt xem lên 1
            $mh->tangluotxem($mahang);
            // lấy thông tin chi tiết mặt hàng
            $mhct = $mh->laymathangtheoid($mahang);
            // lấy các mặt hàng cùng danh mục
            $madm = $mhct["danhmuc_id"];
            $mathang = $mh->laymathangtheodanhmuc($madm);
            include("detail.php");
        }
        break;
    case "dangnhap":
        include("SignIn1.php");
        break;

    case "xldangnhap":
        $email = $_POST["your_name"];
        $matkhau = $_POST["your_pass"];
        if ($nd->kiemtranguoidunghople($email, $matkhau, 0) == TRUE) {
            $_SESSION["nguoidung"] = $nd->laythongtinnguoidung($email);

            $tongmh = $mh->demtongsomathang();
            $soluong = 8;
            $tongsotrang = ceil($tongmh / $soluong);
            if (!isset($_REQUEST["trang"]))
                $tranghh = 1;
            else
                $tranghh = $_REQUEST["trang"];
            if ($tranghh > $tongsotrang)
                $tranghh = $tongsotrang;
            else if ($tranghh < 1)
                $tranghh = 1;
            $batdau = ($tranghh - 1) * $soluong;
            $mathang = $mh->laymathangphantrang($batdau, $soluong);

            include("main.php");
        } else {
            $tb = "Đăng nhập không thành công!";
            include("SignIn1.php");
        }
        break;

    case "dangxuat2":

        unset($_SESSION["nguoidung"]);

        $tb = "Cảm ơn chị iu!";

        include("SignIn1.php");
        break;
        // case "xemgiohang":
        //     $giohang = laygiohang();
        //     include("cart.php");
        //     break;  

        // case "capnhatgiohang":
        //     if(isset($_REQUEST["mh"])){
        //         $mh = $_REQUEST["mh"];

        //         foreach($mh as $mahang => $soluong){
        //             if($soluong > 0)
        //                 capnhatsoluong($mahang, $soluong);
        //             else
        //                 xoamotmathang($mahang);
        //         }
        //     }
        //     $giohang = laygiohang();
        //     include("cart.php");
        //     break;

    case "xoagiohang":
        xoagiohang();
        $giohang = laygiohang();
        include("cart.php");
        break;

    case "datmua":
        $giohang = laygiohang();
        include("checkout.php");
        break;

    case "luudonhang":
        $email = $_POST["txtemail"];
        $hoten = $_POST["txthoten"];
        $sodienthoai = $_POST["txtdienthoai"];
        $diachi = $_POST["txtdiachi"];

        // lưu thông tin khách nếu chưa có trong db (kiểm tra email có tồn tại chưa)
        // xử lý thêm...
        $kh = new KHACHHANG();
        $khachhang_id = $kh->themkhachhang($email, $sodienthoai, $hoten);

        // lưu địa chỉ khách
        $dc = new DIACHI();
        $diachi_id = $dc->themdiachi($khachhang_id, $diachi);

        // lưu đơn hàng
        $dh = new DONHANG();
        $tongtien = tinhtiengiohang();
        $donhang_id = $dh->themdonhang($khachhang_id, $diachi_id, $tongtien);

        // lưu chi tiết đơn hàng
        $ct = new DONHANGCT();
        $giohang = laygiohang();
        foreach ($giohang as $mahang => $mh) {
            $dongia = $mh["giaban"];
            $soluong = $mh["soluong"];
            $thanhtien = $mh["sotien"];
            $ct->themchitietdonhang($donhang_id, $mahang, $dongia, $soluong, $thanhtien);
            $mh = new MATHANG();
            $mh->capnhatsoluong($mahang, $soluong);
        }

        // xóa giỏ hàng
        xoagiohang();

        // chuyển đến trang cảm ơn
        include("message.php");
        break;
    case "xemthongtin":
        // lưu chi tiết đơn hàng
        $emailget = $_REQUEST["email"];
        $dh = new DONHANG();
        $donhang = $dh->docdonhang($emailget);

        include("info.php");
        break;
        // case "xemdonhang":
        //     $donhang = $mh->docdonhang();
        //     include("main.php");
        //     break;
    case "themkhachhang":
        $hoten = $_POST["txthoten"];
        $email = $_POST["txtemail"];
        $sodienthoai = $_POST["txtsodienthoai"];
        $matkhau = $_POST["txtmatkhau"];
        $nlmatkhau = $_POST["txtnlmatkhau"];
        if ($nd->laythongtinnguoidung($email)) {   // có thể kiểm tra thêm số đt không trùng
            $tb = "Email này đã được cấp tài khoản!";
            include("SignUp.php");
            break;
        } else {
            if (!$nd->themkhachhang($email, $sodienthoai, $matkhau, $hoten)) {
                $tb = "Không thêm được!";
                include("SignUp.php");
                break;
            }

            include("SignIn1.php");
            break;
        }

        break;
    default:
        break;
}
