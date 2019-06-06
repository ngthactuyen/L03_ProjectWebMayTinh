<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="assets/css/admin/admin-login.style.css">
</head>
<body>
	<h1>Đăng nhập hệ thống</h1>
	<?php viewAdminLayout('message'); ?>
	<form action="?controller=nhanvien&action=authenticate" method="post">
		<table>
			<tr>
				<th>Tên đăng nhập: </th>
				<td>
					<input type="text" name="txt_tendangnhap" value="<?= isset($tendangnhap) ? $tendangnhap: '' ?>">
				</td>
			</tr>
			<tr>
				<th>Mật khẩu: </th>
				<td>
					<input type="password" name="txt_matkhau" value="<?= isset($matkhau) ? $matkhau: '' ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit">Đăng nhập</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>