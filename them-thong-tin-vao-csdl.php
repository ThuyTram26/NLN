<?php
	    // Nếu người dùng đã bấm SAVE
        if(isset($_POST['btn_submit'])) {
        // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
            require_once "./dbconnect.php";
	$ho_va_ten = $_POST["ho_va_ten"];

	$bday= $_POST["bday"];

	$gioi_tinh= $_POST["gioi_tinh"];

	$sdt= $_POST["sdt"];

    $fb=$_POST["fb"];

    $zl= $_POST["zl"];

    $email= $_POST["email"];

    $cty=$_POST["cty"];


		$sql= "INSERT INTO `thongtin` (Ho va ten, Ngay sinh, Gioi tinh, So dien thoai, Facebook, Zalo, Email, Ten cong ty) VALUES ('$ho_va_ten','$bday','$gioi_tinh','$sdt','$fb','$zl','$email','$cty')";
		mysqli_query($conn, $sql);
		
		}
	//	header('Location: login.php');
?>