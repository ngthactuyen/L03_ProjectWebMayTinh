<?php 
// dd($_SESSION);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý cửa hàng</title>
	<link rel="stylesheet" type="text/css" href="assets/css/admin/demo.style.css">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<div class="header clear-fix">
		<div class="header-logo">
			<p>Quản lý cửa hàng</p>
			<div class="header-nav">
				<a href="?controller=hangsx">Quản lý Hãng sản xuất</a>
				<a href="?controller=laptop">Quản lý Laptop</a>
				<a href="?controller=camera">Quản lý Camera</a>
				<?php 
					if ($_SESSION['phanquyen'] == 1) {
						echo '<a href="?controller=nhanvien">Quản lý Nhân viên</a>';
					}
				?>

			</div>
		</div>
		<div class="header-content">
			<p style="font-size: 25px; text-align: right; margin: 15px">
			<?php 
				echo 'Xin chào, '.$_SESSION['hoten'];
			?>
				<button class="btn-add">
					<a href="?controller=nhanvien&action=logout">Đăng xuất</a>
				</button>
			</p>
		</div>
	</div>
	<div class="content">