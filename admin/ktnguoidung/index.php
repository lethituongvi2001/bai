<?php
// session_start();
require("../../model/database.php");
require("../../model/nguoidung.php");

// Biến cho biết ng dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} elseif ($isLogin == FALSE) {
    $action = "dangnhap";
} else {
    $action = "macdinh";
}

$nguoidung = new NGUOIDUNG();
$tb = "";
switch ($action) {
    case "macdinh":

        include("main.php");
        break;
    case "dangxuat1":

        unset($_SESSION["nguoidung"]);

        $tb = "Cảm ơn!";
        //SignIn.php
        //loginform.php
        include("SignIn.php");
        break;


    case "dangnhap":
        include("SignIn.php");
        break;

    case "xldangnhap":
        $email = $_POST["your_name"];
        $matkhau = $_POST["your_pass"];
        if ($nguoidung->kiemtranguoidunghople($email, $matkhau, true) == TRUE) {
            $_SESSION["nguoidung"] = $nguoidung->laythongtinnguoidung($email);
            include("main.php");
        } else {
            $tb = "Đăng nhập không thành công!";
            include("SignIn.php");
        }
        break;
    case "dangky":
        include("SignUp.php");
        break;

    case "capnhaths":
        $mand = $_POST["txtid"];
        $email = $_POST["your_name"];

        $sodt = $_POST["txtdienthoai"];
        $hoten = $_POST["txthoten"];
        $hinhanh = basename($_FILES["fhinh"]["name"]);
        $duongdan = "../images/" . $hinhanh;
        move_uploaded_file($_FILES["fhinh"]["tmp_name"], $duongdan);

        $nguoidung->capnhatnguoidung($mand, $email, $sodt, $hoten, $hinhanh);

        $_SESSION["nguoidung"] = $nguoidung->laythongtinnguoidung($email);
        include("main.php");
        break;

    case "doimatkhau":
        if (isset($_POST["your_name"]) && isset($_POST["txtmatkhaumoi"]))
            $nguoidung->doimatkhau($_POST["your_name"], $_POST["txtmatkhaumoi"]);
        include("main.php");
        break;
    default:
        break;
}
