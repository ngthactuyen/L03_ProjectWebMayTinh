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
		<div class="header-logo">
			<p>Logo cửa hàng</p>
		</div>
		<div class="header-slogan">
			<p>Slogan cửa hàng</p>
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
							<a href="?action=getAllLaptop&id_hangsx=<?= $value->id_hangsx?>"><?= $value->tenhangsx?></a>
						<?php endforeach ?>
					</div>
				</li>
				<li class="dropdown">
					<a href="?action=getAllCamera">Camera</a>
					<div class="dropdown-content">
						<?php foreach ($hangsxCamera as $key => $value): ?>
							<a href="?action=getAllCamera&id_hangsx=<?= $value->id_hangsx?>"><?= $value->tenhangsx?></a>
						<?php endforeach ?>
					</div>
				</li>
				<li>
					<a href="">Liên hệ</a>
				</li>
				
			</ul>
		</div>
		<div class="nav-right">
			<p></p>
		</div>
	</div>
