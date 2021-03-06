<?php
// dd(count($laptopList));
// dd($laptopList);
// dd(count($cameraList));
// dd($remarkableLaptopList);
// dd($remarkableCameraList);

viewSiteLayout('head');
?>

<div class="content-left">
	<h4>Sản phẩm nổi bật</h4>
	<?php foreach ($remarkableLaptopList as $key => $value): ?>
		<div>
			<a href="?action=getOneLaptop&url_laptop=<?= $value->url_laptop?>">
				<img src="<?= $value->anh_laptop?>">
				<p><?= $value->ten_laptop?></p>
			</a>	
		</div>
	<?php endforeach ?>
	<?php foreach ($remarkableCameraList as $key => $value): ?>
		<div>
			<a href="?action=getOneCamera&url_camera=<?= $value->url_camera?>">
				<img src="<?= $value->anh_camera?>">
				<p><?= $value->ten_camera?></p>
			</a>	
		</div>
	<?php endforeach ?>
</div>

<div class="content-main">
	<div class="head-element clear-fix">
		<div class="head-element-left">
			Các sản phẩm Laptop	
		</div>
		<div class="head-element-right">
			<a href="?action=getAllLaptop">Xem tất cả</a>
		</div>
	</div>
	

	<!-- Phan hien thi theo tung phan tu dang ngang -->
	<?php foreach ($laptopList as $key => $value): ?>
	<hr>
	<div class="content-main-element clear-fix">
		<div class="main-element-image">
			<a href="?action=getOneLaptop&url_laptop=<?= $value->url_laptop?>">
				<img src="<?= $value->anh_laptop?>">
			</a>
		</div>
		<div class="main-element-description">
			<a href="?action=getOneLaptop&url_laptop=<?= $value->url_laptop?>">
				<h3><?= $value->ten_laptop?></h3>
			</a>
			<p>CPU: <?= $value->cpu?></p>
			<p>Ram: <?= $value->ram?></p>
			<p>Ổ cứng: <?= $value->ocung?></p>
			<p>VGA: <?= $value->vga?></p>
			<p>- Kích thước: <?= $value->kichthuoc?></p>
			<p>- Khối lượng: <?= $value->khoiluong?> kg</p>
			<p><?= ($value->soluong == 0) ? 'Tạm hết hàng': 'Còn hàng' ?></p>
			<p id="home-giasp">Giá: <?= number_format($value->gia_laptop)?> VNĐ</p>
		</div>
	</div>
	<?php endforeach ?>


	<hr>
	<div class="head-element clear-fix">
		<div class="head-element-left">
			Các sản phẩm Camera
		</div>
		<div class="head-element-right">
			<a href="?action=getAllCamera">Xem tất cả</a>
		</div>
	</div>



	<!-- Phan hien thi theo tung phan tu dang ngang -->
	<?php foreach ($cameraList as $key => $value): ?>
	<hr>
	<div class="content-main-element clear-fix">
		<div class="main-element-image">
			<a href="?action=getOneCamera&url_camera=<?= $value->url_camera?>">
				<img src="<?= $value->anh_camera?>">
			</a>
		</div>
		<div class="main-element-description">
			<a href="?action=getOneCamera&url_camera=<?= $value->url_camera?>">
				<h3><?= $value->ten_camera?></h3>
			</a>
			<p>Độ phân giải: <?= $value->dophangiai?> MP</p>
			<p>Ống kính: <?= $value->ongkinh?> mm</p>
			<p>Bán kính hồng ngoại: <?= $value->bankinhhongngoai?> m</p>
			<p id="home-giasp">Giá: <?= number_format($value->gia_camera)?> VNĐ</p>
		</div>
	</div>
	<?php endforeach ?>


</div>


<?php
viewSiteLayout('foot');
?>