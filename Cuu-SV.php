<!DOCTYPE html></html>
<html lang="en"></html>
<head>
	 
	  <meta  http-equiv="Content-Type" content="text/html"; charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <title>Cựu Sinh Viên</title>
	
</head>
<body>
	<?php include_once(__DIR__.'/ketnoi.php'); ?>
	<?php 
/*	    if(isset($_POST['add'])){
		    $ho_va_ten = $_POST['Ho va ten'];
			$bday = $_POST['Ngay sinh'];
			$gioi_tinh = $_POST['Gioi tinh'];
			$sdt = $_POST['So dien thoai'];
			$fb = $_POST['Facebook'];
			$zl = $_POST['Zalo'];
			$email = $_POST['Email'];
			$cty = $_POST['Ten cong ty'];

			if($conn -> query("INSERT INTO thongtin (Ho va ten,Ngay sinh,Gioi tinh,So dien thoai,Facebook,Zalo,Email,Ten cong ty) 
			VALUES (N'$ho_va_ten',N'$bday',N'$gioi_tinh',N'$sdt',N'$fb',N'$zl',N'$email',N'$cty')")){
				echo "<script>alert('Xác nhận thành công !' );</script>";
			}else{
				echo "<script>alert('Có lỗi xảy ra !' );</script>";
			}

		}
		$conn->close();
	*/
	?>
    <br>
    <style>
		table {
    width: 400px;
    background-color: rgb(126, 215, 241);
    border: 1px solid green;
    padding: 30px;
    margin: 0 auto;
    font-weight: 700px;
    font-size: 20px; 
}
            div.a {
                  text-align: center;
            }
            </style>
            <div class="a">
            <form action="them-thong-tin-vao-csdl.php" method="POST" class="form">
                <h2>Thông tin Cựu Sinh Viên</h2>
		<table>	
			<tr>
				<td>Họ và tên :</td>
				<td><input type="text" id="Ho va ten" name="ho_va_ten"></td>
			</tr>
			<tr>
				<td>Ngày sinh :</td>
				<td><input type="date" id="bday" name="bday"></td>
			</tr>
			<tr>
			<td>Giới tính :</td>
				<td><input type="radio" value="Nam" name="gioi_tinh" id="Nam">
                <label for="Nam">Nam</label>
            
                <input type="radio" value="Nữ" name="gioi_tinh" id="Nữ">
                <label for="Nữ">Nữ</label>
            </td>
			</tr>
			<tr>
				<td>Số điện thoại :</td>
				<td><input type="text" id="sdt" name="sdt"></td>
			</tr>
            <tr>
				<td>Facebook :</td>
				<td><input type="text" id="fb" name="fb"></td>
			</tr>
            <tr>
				<td>Zalo :</td>
				<td><input type="text" id="zl" name="zl"></td>
			</tr>
            <tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
            <tr>
				<td>Tên Công ty :</td>
				<td><input type="text" id="cty" name="cty"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Xác nhận"></td>
			</tr>

		</table>
		
	</form>


</body>
</html>