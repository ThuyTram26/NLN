<!DOCTYPE html>
<html lang="en">
<head>
	  <meta  http-equiv="X-UA-Compatible" content="ie-edge"  charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <title>Thông tin Cựu Sinh Viên</title>
</head>
<body>

<?php
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    // C:\xampp\htdocs\web02\
    include_once(__DIR__ . '/ketnoi.php');

    // 2. Chuẩn bị QUERY
    // HERE DOC
    $sql = <<<EOT
    SELECT ho_va_ten AS Ho va ten, bday AS Ngay sinh, gioi_tinh AS Gioi tinh, sdt AS So dien thoai,
    fb AS Facebook, zl AS Zalo, email AS Email, cty AS Tên công ty FROM `Cuu-SV`
    EOT;

    // 3. Yêu cầu PHP thực thi QUERY
    $result = mysqli_query($conn, $sql);

    // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
    // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
    // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
    $data = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array(
            'ho_va_ten' => $row['Ho va ten'],
            'bday' => $row['Ngay sinh'],
            'gioi_tinh' => $row['Gioi tinh'],
            'sdt' => $row['So dien thoai'],
            'fb' => $row['Facebook'],
            'zl' => $row['Zalo'],
            'email' => $row['Email'],
            'cty' => $row['Ten cong ty'],
        );
    }

    // var_dump($data);die;
    // print_r($data);die;
    ?>
	
        <div class="container">
            <table class="table">
                  <thead>
                     <tr>
      <th scope="col">Họ và tên</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Facebook</th>
      <th scope="col">Zalo</th>
      <th scope="col">Email</th>
      <th scope="col">Tên Công ty</th>
                      </tr>
              </thead>
              <tbody>
              <?php foreach($data as $thongtin): ?>
    <tr>
      <td><?= $thongtin['ho_va_ten']; ?></td>
      <td><?= $thongtin['bday']; ?></td>
      <td><?= $thongtin['gioi_tinh']; ?></td>
      <td><?= $thongtin['sdt']; ?></td>
      <td><?= $thongtin['fb']; ?></td>
      <td><?= $thongtin['zl']; ?></td>
      <td><?= $thongtin['email']; ?></td>
      <td><?= $thongtin['cty']; ?></td>
    </tr>
    <?php endforeach; ?>
            </tbody>
          </table>
      </div>
</body>
</html>