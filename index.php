<?php
session_start();
include_once 'model/pdo.php';
include_once 'model/sanpham.php';
include_once 'model/danhmuc.php';
include_once 'model/notification.php';
include_once 'model/taikhoan.php';
include_once 'model/Post.php';

include "view/header.php";
$sanpham = load_all_product_home();
$loadpost=listPost();
$dsdm = loadall_danhmuc();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
            }else{
                $iddm=0;
            }
            $dssp=load_all_product($iddm);
            $tendm= load_ten_dm($iddm);
            
            break;
            
        case 'ctsanpham':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $ctsanpham = load_one_product($id);
            }
            include_once 'view/product-page.php';
            break;
        case 'checkout':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $ctsanpham = load_one_product($id);

                if (isset($_POST['btn_insert'])) {
                    $product_id = $_POST['product_id']; 
                    $message = $_POST['message'];
                    $phone_number = $_POST['phone_number'];
                    $email = $_POST['email'];
                    $name_user = $_POST['name_user'];
                    $date_time = $_POST['date_time'];
                    insert_notification($product_id, $message, $email, $name_user, $phone_number, $date_time);
                    $thongbao = "Đăng ký thuê thành công. Cảm ơn bạn shop sẽ liên hệ tới bạn sớm nhất có thể";
                }
                include 'view/checkout.php';
            }
            break;
        case 'dangky':
            if (isset($_POST['signup']) && ($_POST['signup'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $phonenumber = $_POST['phonenumber'];
                insert_taikhoan($user, $pass, $address, $phonenumber);
            }
            include "view/taikhoan/dangky.php";
            break;
            case 'login':
                if (isset($_POST['btn_login']) && ($_POST['btn_login'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                    if (is_array($checkuser)) {
                     
                        $_SESSION['user'] = $checkuser;
                   
                        exit();
                    } else {
                        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                    }
                }
                include 'view/login.php';
                break;
            
        case 'thoat':
            session_unset();
            include "view/login.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>