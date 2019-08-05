<?php
// dd($laptop);
// dd($remarkableLaptopList);
// dd($laptopWithHangSX);
// dd(isset($laptop));
// dd(isset($camera));
viewSite('layout/head', ['hangsxLaptop' => $hangsxLaptop, 'hangsxCamera' => $hangsxCamera]);
?>

<div class="oneProduct-content clear-fix">
	<div class="content-left">
		<?php if (isset($remarkableLaptopList)): ?>
			<h4>Sản phẩm nổi bật</h4>
			<?php foreach ($remarkableLaptopList as $key => $value): ?>
				<div>
					<a href="?action=getOneLaptop&url_laptop=<?= $value->url_laptop?>">
						<img src="<?= $value->anh_laptop?>">
						<p><?= $value->ten_laptop?></p>
					</a>
					
							
				</div>
			<?php endforeach ?>
		<?php endif ?>
		<?php if (isset($remarkableCameraList)): ?>
			<h4>Sản phẩm nổi bật</h4>
			<?php foreach ($remarkableCameraList as $key => $value): ?>
				<div>
					<a href="?action=getOneLaptop&url_laptop=<?= $value->url_camera?>">
						<img src="<?= $value->anh_camera?>">
						<p><?= $value->ten_camera?></p>
					</a>
					
							
				</div>
			<?php endforeach ?>
		<?php endif ?>
	</div>

	<div class="oneProduct-content-main">
		<?php if (isset($laptop)): ?>
			<h2><?= $laptop->ten_laptop?></h2>
			<div class="oneProduct-img-description clear-fix">
				<div class="oneProduct-img">
					<img src="<?= $laptop->anh_laptop?>">
				</div>
				<div class="oneProduct-description">
					<p id="oneProduct-giasp">Giá: <?= number_format($laptop->gia_laptop)?> VNĐ</p>
					<!-- <p id="oneProduct-trangthai">Trạng thái: <?= ($laptop->soluong == 0) ? 'Tạm hết hàng': 'Còn hàng'?></p> -->
					<h3>Thông số kỹ thuật:</h3>
					<p>- CPU: <?= $laptop->cpu?></p>
					<p>- Ram: <?= $laptop->ram?></p>
					<p>- Ổ cứng: <?= $laptop->ocung?></p>
					<p>- VGA: <?= $laptop->vga?></p>
					<p>- Hệ điều hành: <?= $laptop->hdh?></p>
					<p>- Màn hình: <?= $laptop->manhinh?></p>
					<p>- Thông tin pin: <?= $laptop->pin?></p>
					<p>- Kích thước: <?= $laptop->kichthuoc?></p>
					<p>- Khối lượng: <?= $laptop->khoiluong?> kg</p>
				</div>
			</div>
			<hr>
			<h3 style="margin: 15px 35px;">Mô tả sản phẩm</h3>
			<hr>
			<div class="oneProduct-detail">
				<?= $laptop->mota?>
			</div>
		<?php endif ?>

		<?php if (isset($camera)): ?>
			<h2><?= $camera->ten_camera?></h2>
			<div class="oneProduct-img-description clear-fix">
				<div class="oneProduct-img">
					<img src="<?= $camera->anh_camera?>">
				</div>
				<div class="oneProduct-description">
					<p id="oneProduct-giasp">Giá: <?= number_format($camera->gia_camera)?> VNĐ</p>
					<!-- <p id="oneProduct-trangthai">Trạng thái: <?= ($camera->soluong == 0) ? 'Tạm hết hàng': 'Còn hàng'?></p> -->
					<h3>Mô tả sản phẩm:</h3>
					<?= $camera->mota?>
				</div>
			</div>
		<?php endif ?>
			
	</div>

	<div class="content-left">
		<?php if (isset($laptopWithHangSX)): ?>
			<h4>Sản phẩm cùng hãng</h4>
			<?php foreach ($laptopWithHangSX as $key => $value): ?>
				<div>
					<a href="?action=getOneLaptop&url_laptop=<?= $value->url_laptop?>">
						<img src="<?= $value->anh_laptop?>">
						<p><?= $value->ten_laptop?></p>
					</a>
					
							
				</div>
			<?php endforeach ?>
		<?php endif ?>
		<?php if (isset($cameraWithHangSX)): ?>
			<h4>Sản phẩm cùng hãng</h4>
			<?php foreach ($cameraWithHangSX as $key => $value): ?>
				<div>
					<a href="?action=getOneCamera&url_camera=<?= $value->url_camera?>">
						<img src="<?= $value->anh_camera?>">
						<p><?= $value->ten_camera?></p>
					</a>
					
							
				</div>
			<?php endforeach ?>
		<?php endif ?>
			
	</div>
		
</div>

<?php
viewSiteLayout('foot');
?>