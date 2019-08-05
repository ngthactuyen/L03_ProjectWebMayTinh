<?php
// dd($hangsxLaptop);
// dd($hangsxCamera);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Trung tâm Laptop - Camera</title>
	<link rel="stylesheet" type="text/css" href="assets/css/site/site.style.css">
</head>
<body>
	<div class="header clear-fix">
		<!-- <p>logo</p> -->
		<div class="header-logo">
			<a href="?action=home">
				<img src="assets/images/site/logo.png">
			</a>
		</div>
		<div class="header-slogan">
			<!-- <p>Slogan cửa hàng</p> -->
			<h3>Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số KMA Shop</h3>
			<p>
				Chuyên cung cấp các sản phẩm Laptop - Camera chính hãng - chất lượng - giá tốt
			</p>
		</div>
	</div>
	<div class="nav clear-fix">
		<div class="nav-left">
			<p></p>
		</div>
		<div class="nav-main clear-fix">
			<ul>
				<li>
					<a href="?controller=site">Trang chủ</a>
				</li>
				<li class="dropdown">
					<a href="?action=getAllLaptop">Laptop</a>
					<div class="dropdown-content">
						<?php foreach ($hangsxLaptop as $key => $value): ?>
							<a href="?action=getAllLaptop&hangsx_id[0]=<?= $value->id_hangsx?>"><?= $value->tenhangsx?></a>
						<?php endforeach ?>
					</div>
				</li>
				<li class="dropdown">
					<a href="?action=getAllCamera">Camera</a>
					<div class="dropdown-content">
						<?php foreach ($hangsxCamera as $key => $value): ?>
							<a href="?action=getAllCamera&hangsx_id[0]=<?= $value->id_hangsx?>"><?= $value->tenhangsx?></a>
						<?php endforeach ?>
					</div>
				</li>
				<li>
					<a href="#lienhe">Liên hệ</a>
				</li>
				
			</ul>
		</div>
		<div class="nav-right">
			<p></p>
		</div>
	</div>
