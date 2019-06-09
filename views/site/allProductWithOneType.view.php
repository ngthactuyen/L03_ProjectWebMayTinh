<?php
// dd(count($laptopList));
// dd($laptopList);
// dd(count($cameraList));
// dd($remarkableLaptopList);
// dd($remarkableCameraList);
// dd($hangsxLaptop);
// dd($hangsxCamera);
// dd($type);

viewSite('layout/head', ['hangsxLaptop' => $hangsxLaptop, 'hangsxCamera' => $hangsxCamera]);
?>

<div class="content clear-fix">
	<div class="allProductWithOneType-content-left">
		<h4>Lọc sản phẩm</h4>
		
		<form action="" method="get">
			<hr>
			<p id="allProductWithOneType-content-left-p-head">Hãng sản xuất:</p>
			<?php
				$i = 0; 
				foreach ($hangsxLaptop as $key => $value):
			 	$i++;
			?>
			<?php if ($i % 2 == 1): ?>
				<div class="clear-fix">
			<?php endif ?>
					<div class="allProductWithOneType-content-left-element">
						<p>
							<input type="checkbox" name="hangsx_id[]" value="<?= $value->id_hangsx?>" 
							<?php if (isset($_GET['hangsx_id'])): ?>
								<?php foreach ($_GET['hangsx_id'] as $key => $get): ?>
									<?php if ($value->id_hangsx == $get): ?>
										checked
									<?php endif ?>
								<?php endforeach ?>
							<?php endif ?>
								
					  		> <?= $value->tenhangsx?>
						</p>
					</div>
			<?php if ($i % 2 == 0 || $i == count($hangsxLaptop)): ?>
				</div>
			<?php endif ?>
			<?php endforeach ?>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Giá tiền:</p>
			<?php
				$checkbox_gia_laptop = ['Dưới 10 triệu' => '< 10000000', '10 - 15 triệu' => 'between 10000000 and 15000000', '15 - 25 triệu' => 'between 15000000 and 25000000', 'Trên 25 triệu' => '> 25000000'];
				$key_gia_laptop = array_keys($checkbox_gia_laptop);
				// var_dump($key_gia_laptop);

				$i = 0; 
				foreach ($checkbox_gia_laptop as $key => $value):
			 	$i++;
			?>
			<?php if ($i % 2 == 1): ?>
			<div class="clear-fix">
			<?php endif ?>
				<div class="allProductWithOneType-content-left-element">
					<p>
						<input type="checkbox" name="gia_laptop[]" value="<?= $value?>" 
						<?php if (isset($_GET['gia_laptop'])): ?>
							<?php foreach ($_GET['gia_laptop'] as $key => $get): ?>
									<?php if ($get == $value): ?>
										checked
									<?php endif ?>
							<?php endforeach ?>
						<?php endif ?>
							
				  		> <?= $key_gia_laptop[$i - 1]?>
					</p>
				</div>
			<?php if ($i % 2 == 0 || $i == count($checkbox_gia_laptop)): ?>
			</div>
			<?php endif ?>
			<?php endforeach ?>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Nhu cầu:</p>
			<?php
				$checkbox_nhucau = ['Học tập - Văn phòng' => 1, 'Đồ hoạ - Kỹ thuật' => 2, 'Laptop Gaming' => 3, 'Cao cấp - Sang trọng' => 4];
				$key_nhucau = array_keys($checkbox_nhucau);
				// var_dump($key_nhucau);
			?>
			<div id="allProductWithOneType-content-left-p-head">
			<?php 
				$i = 0;
				foreach ($checkbox_nhucau as $key => $value): 
				$i++;
			?>
				<p>
					<input type="checkbox" name="nhucau[]" value="<?= $value?>"
					<?php if (isset($_GET['nhucau'])): ?>
						<?php foreach ($_GET['nhucau'] as $key => $get): ?>
								<?php if ($get == $value): ?>
									checked
								<?php endif ?>
						<?php endforeach ?>
					<?php endif ?>
					> <?= $key_nhucau[$i - 1]?>
				</p>
			<?php endforeach ?>
			</div>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Bộ vi xử lý:</p>
			<?php
				$checkbox_cpu = ['Intel Core i3', 'Intel Core i5', 'Intel Core i7', 'Intel Celeron', 'Intel Pentium'];
				$i = 0;
				foreach ($checkbox_cpu as $key => $value): 
					$i++;
			?>
			<?php if ($i % 2 == 1): ?>
			<div class="clear-fix">
			<?php endif ?>
				<div class="allProductWithOneType-content-left-element">
					<p>
						<input type="checkbox" name="cpu[]" value="<?= $value?>"
						<?php if (isset($_GET['cpu'])): ?>
							<?php foreach ($_GET['cpu'] as $key => $get): ?>
									<?php if ($get == $value): ?>
										checked
									<?php endif ?>
							<?php endforeach ?>
						<?php endif ?>
						> <?= $value?>
					</p>
				</div>
			<?php if ($i % 2 == 0 || $i == count($checkbox_cpu)): ?>
			</div>
			<?php endif ?>
			<?php endforeach ?>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Ram:</p>
			<?php
				$checkbox_ram = ['2 GB', '4 GB', '8GB', '16GB'];
				$i = 0;
				foreach ($checkbox_ram as $key => $value): 
					$i++;
			?>
			<?php if ($i % 2 == 1): ?>
			<div class="clear-fix">
			<?php endif ?>
				<div class="allProductWithOneType-content-left-element">
					<p>
						<input type="checkbox" name="ram[]" value="<?= $value?>"
						<?php if (isset($_GET['ram'])): ?>
							<?php foreach ($_GET['ram'] as $key => $get): ?>
									<?php if ($get == $value): ?>
										checked
									<?php endif ?>
							<?php endforeach ?>
						<?php endif ?>
						> <?= $value?>
					</p>
				</div>
			<?php if ($i % 2 == 0 || $i == count($checkbox_ram)): ?>
			</div>
			<?php endif ?>
			<?php endforeach ?>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Ổ cứng:</p>
			<?php
				$checkbox_ocung = ['HDD' => 'HDD:', 'SSD' => 'SSD:', 'HDD + SSD' => 'HDD:%SSD:'];
				$key_ocung = array_keys($checkbox_ocung);
				$i = 0;
				foreach ($checkbox_ocung as $key => $value): 
					$i++;
			?>
			<?php if ($i % 2 == 1): ?>
			<div class="clear-fix">
			<?php endif ?>
				<div class="allProductWithOneType-content-left-element">
					<p>
						<input type="checkbox" name="ocung[]" value="<?= $value?>"
						<?php if (isset($_GET['ocung'])): ?>
							<?php foreach ($_GET['ocung'] as $key => $get): ?>
									<?php if ($get == $value): ?>
										checked
									<?php endif ?>
							<?php endforeach ?>
						<?php endif ?>
						> <?= $key_ocung[$i - 1]?>
					</p>
				</div>
			<?php if ($i % 2 == 0 || $i == count($checkbox_ocung)): ?>
			</div>
			<?php endif ?>
			<?php endforeach ?>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Card đồ họa:</p>
			<?php
				$checkbox_vga = ['Card đồ họa tích hợp', 'NVIDIA GeForce', 'AMD Radeon'];
			?>
			<div id="allProductWithOneType-content-left-p-head">
			<?php 
				foreach ($checkbox_vga as $key => $value): 
			?>
				<p>
					<input type="checkbox" name="vga[]" value="<?= $value?>"
					<?php if (isset($_GET['vga'])): ?>
						<?php foreach ($_GET['vga'] as $key => $get): ?>
								<?php if ($get == $value): ?>
									checked
								<?php endif ?>
						<?php endforeach ?>
					<?php endif ?>
					> <?= $value?>
				</p>
			<?php endforeach ?>
			</div>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Màn hình:</p>
			<?php
				$checkbox_manhinh = ['11 inch' => '11%inch', '12 inch' => '12%inch', '13 inch' => '13%inch', '14 inch' => '14%inch', '15 inch' => '15%inch'];
				$key_manhinh = array_keys($checkbox_manhinh);
				$i = 0;
				foreach ($checkbox_manhinh as $key => $value): 
					$i++;
			?>
			<?php if ($i % 2 == 1): ?>
			<div class="clear-fix">
			<?php endif ?>
				<div class="allProductWithOneType-content-left-element">
					<p>
						<input type="checkbox" name="manhinh[]" value="<?= $value?>"
						<?php if (isset($_GET['manhinh'])): ?>
							<?php foreach ($_GET['manhinh'] as $key => $get): ?>
									<?php if ($get == $value): ?>
										checked
									<?php endif ?>
							<?php endforeach ?>
						<?php endif ?>
						> <?= $key_manhinh[$i - 1]?>
					</p>
				</div>
			<?php if ($i % 2 == 0 || $i == count($checkbox_manhinh)): ?>
			</div>
			<?php endif ?>
			<?php endforeach ?>

			

			<hr>
			<button type="submit" name="action" value="getAllLaptop">Lọc sản phẩm</button>
			

		</form>
		
	</div>

	<div class="content-main">
		<div class="allProductWithOneType-head-hangsx clear-fix">
			<div class="allProductWithOneType-head-hangsx-element">
				<!-- <p>Hãng sản xuất:</p> -->
			</div>
			<?php foreach ($hangsxLaptop as $key => $value): ?>
			<div class="allProductWithOneType-head-hangsx-element">
				<a href="?action=getAllLaptop&hangsx_id[0]=<?= $value->id_hangsx?>">
					<img src="<?= $value->anh_hangsx?>">
				</a>
			</div>
			<?php endforeach ?>			
		</div>
		<hr>
		<p id="allProductWithOneType-content-left-p-head">
			Tổng số: <?= count($laptopList)?> sản phẩm
		</p>

		<?php 
			$i = 0;
			foreach ($laptopList as $key => $value):
			$i++;
			if ($i % 4 == 1) {
				echo '<hr><div class="content-main-row-element clear-fix">';
			}
		?>
			<div class="content-main-element">
				<div class="main-element-image">
					<a href="?action=getOneLaptop&url_laptop=<?= $value->url_laptop?>">
						<img src="<?= $value->anh_laptop?>">
					</a>
				</div>
				<div class="main-element-description">
					<a href="?action=getOneLaptop&url_laptop=<?= $value->url_laptop?>">
						<h3><?= $value->ten_laptop?></h3>
					</a>
					<p>- CPU: <?= $value->cpu?></p>
					<p>- Ram: <?= $value->ram?></p>
					<p>- Ổ cứng: <?= $value->ocung?></p>
					<p>- VGA: <?= $value->vga?></p>
					<p>- <?= ($value->soluong == 0) ? 'Tạm hết hàng': 'Còn hàng' ?></p>
					<p id="home-giasp">Giá: <?= number_format($value->gia_laptop)?> VNĐ</p>
				</div>
			</div>

		<?php
			if ($i % 4 == 0 || $i == count($laptopList)) {
				echo '</div>';
			}
		?>
		<?php endforeach ?>

		
	</div>

	
</div>

<?php
viewSiteLayout('foot');
?>