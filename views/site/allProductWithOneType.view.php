<?php
// dd(count($LaptopList));
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
<?php if ($type == 'laptop'): ?>
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
				$checkbox_ram = ['2 GB', '4 GB', '8 GB', '16 GB'];
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
			<p id="button-center">
				<button type="submit" name="action" value="getAllLaptop">
					Lọc sản phẩm
				</button>
			</p>
			

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
					<p>- Màn hình: <?= $value->manhinh?></p>
					<!-- <p>- <?= ($value->soluong == 0) ? 'Tạm hết hàng': 'Còn hàng' ?></p> -->
					<p id="home-giasp">
						Giá: <?= ($value->gia_laptop != 0) ? number_format($value->gia_laptop).'VNĐ' : 'Liên hệ'?>
					</p>
				</div>
			</div>

		<?php
			if ($i % 4 == 0 || $i == count($laptopList)) {
				echo '</div>';
			}
		?>
		<?php endforeach ?>

	</div>
<?php endif ?>
	
<?php if ($type == 'camera'): ?>
	<div class="allProductWithOneType-content-left">
		<h4>Lọc sản phẩm</h4>
		
		<form action="" method="get">
			<hr>
			<p id="allProductWithOneType-content-left-p-head">Hãng sản xuất:</p>
			<?php
				$i = 0; 
				foreach ($hangsxCamera as $key => $value):
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
			<?php if ($i % 2 == 0 || $i == count($hangsxCamera)): ?>
				</div>
			<?php endif ?>
			<?php endforeach ?>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Giá tiền:</p>
			<?php
				$checkbox_gia_camera = ['Dưới 1 triệu' => '< 1000000', '1 - 3 triệu' => 'between 1000000 and 3000000', '3 - 5 triệu' => 'between 3000000 and 5000000', 'Trên 5 triệu' => '> 5000000'];
				$key_gia_camera = array_keys($checkbox_gia_camera);
				// var_dump($key_gia_camera);

				$i = 0; 
				foreach ($checkbox_gia_camera as $key => $value):
			 	$i++;
			?>
			<?php if ($i % 2 == 1): ?>
			<div class="clear-fix">
			<?php endif ?>
				<div class="allProductWithOneType-content-left-element">
					<p>
						<input type="checkbox" name="gia_camera[]" value="<?= $value?>" 
						<?php if (isset($_GET['gia_camera'])): ?>
							<?php foreach ($_GET['gia_camera'] as $key => $get): ?>
									<?php if ($get == $value): ?>
										checked
									<?php endif ?>
							<?php endforeach ?>
						<?php endif ?>
							
				  		> <?= $key_gia_camera[$i - 1]?>
					</p>
				</div>
			<?php if ($i % 2 == 0 || $i == count($checkbox_gia_camera)): ?>
			</div>
			<?php endif ?>
			<?php endforeach ?>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Độ phân giải:</p>
			<?php
				$checkbox_dophangiai = ['Nhỏ hơn 4 Megapixel' => ' < 4 ', 'Từ 4 Megapixel trở lên' => ' >= 4 '];
				$key_dophangiai = array_keys($checkbox_dophangiai);
				// var_dump($key_dophangiai);
			?>
			<div id="allProductWithOneType-content-left-p-head">
			<?php 
				$i = 0;
				foreach ($checkbox_dophangiai as $key => $value): 
				$i++;
			?>
				<p>
					<input type="checkbox" name="dophangiai[]" value="<?= $value?>"
					<?php if (isset($_GET['dophangiai'])): ?>
						<?php foreach ($_GET['dophangiai'] as $key => $get): ?>
								<?php if ($get == $value): ?>
									checked
								<?php endif ?>
						<?php endforeach ?>
					<?php endif ?>
					> <?= $key_dophangiai[$i - 1]?>
				</p>
			<?php endforeach ?>
			</div>



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Ống kính:</p>
			<?php
				$checkbox_ongkinh = ['Nhỏ hơn 4 mm' => ' < 4 ', 'Từ 4 - 8 mm' => ' between 4 and 8 ', 'Trên 8 mm' => ' > 8 '];
				$key_ongkinh = array_keys($checkbox_ongkinh);
				// var_dump($key_ongkinh);
			?>
			<div id="allProductWithOneType-content-left-p-head">
			<?php 
				$i = 0;
				foreach ($checkbox_ongkinh as $key => $value): 
				$i++;
			?>
				<p>
					<input type="checkbox" name="ongkinh[]" value="<?= $value?>"
					<?php if (isset($_GET['ongkinh'])): ?>
						<?php foreach ($_GET['ongkinh'] as $key => $get): ?>
								<?php if ($get == $value): ?>
									checked
								<?php endif ?>
						<?php endforeach ?>
					<?php endif ?>
					> <?= $key_ongkinh[$i - 1]?>
				</p>
			<?php endforeach ?>
			</div>			



			<hr>
			<p id="allProductWithOneType-content-left-p-head">Bán kính hồng ngoại:</p>
			<?php
				$checkbox_bankinhhongngoai = ['Nhỏ hơn 30 m' => ' < 30 ', 'Từ 30 - 60 m' => ' between 30 and 60 ', 'Trên 60 m' => ' > 60 '];
				$key_bankinhhongngoai = array_keys($checkbox_bankinhhongngoai);
				// var_dump($key_bankinhhongngoai);
			?>
			<div id="allProductWithOneType-content-left-p-head">
			<?php 
				$i = 0;
				foreach ($checkbox_bankinhhongngoai as $key => $value): 
				$i++;
			?>
				<p>
					<input type="checkbox" name="bankinhhongngoai[]" value="<?= $value?>"
					<?php if (isset($_GET['bankinhhongngoai'])): ?>
						<?php foreach ($_GET['bankinhhongngoai'] as $key => $get): ?>
								<?php if ($get == $value): ?>
									checked
								<?php endif ?>
						<?php endforeach ?>
					<?php endif ?>
					> <?= $key_bankinhhongngoai[$i - 1]?>
				</p>
			<?php endforeach ?>
			</div>			

			

			<hr>
			<p id="button-center">
				<button type="submit" name="action" value="getAllCamera">
					Lọc sản phẩm
				</button>
			</p>
			

		</form>
		
	</div>

	<div class="content-main">
		<div class="allProductWithOneType-head-hangsx clear-fix">
			<?php foreach ($hangsxCamera as $key => $value): ?>
			<div class="allProductWithOneType-head-hangsx-element">
				<a href="?action=getAllCamera&hangsx_id[0]=<?= $value->id_hangsx?>">
					<img  src="<?= $value->anh_hangsx?>">
				</a>
			</div>
			<?php endforeach ?>			
		</div>
		<hr>
		<p id="allProductWithOneType-content-left-p-head">
			Tổng số: <?= count($cameraList)?> sản phẩm
		</p>

		<?php 
			$i = 0;
			foreach ($cameraList as $key => $value):
			$i++;
			if ($i % 4 == 1) {
				echo '<hr><div class="content-main-row-element clear-fix">';
			}
		?>
			<div class="content-main-element-camera">
				<div class="main-element-image">
					<a href="?action=getOneCamera&url_camera=<?= $value->url_camera?>">
						<img src="<?= $value->anh_camera?>">
					</a>
				</div>
				<div class="main-element-description">
					<a href="?action=getOneCamera&url_camera=<?= $value->url_camera?>">
						<h3><?= $value->ten_camera?></h3>
					</a>
					<p>- Độ phân giải: <?= $value->dophangiai?> MP</p>
					<p>- Ống kính: <?= $value->ongkinh?> mm</p>
					<p>- Bán kính hồng ngoại: <?= $value->bankinhhongngoai?> m</p>
					<!-- <p>- <?= ($value->soluong == 0) ? 'Tạm hết hàng': 'Còn hàng' ?></p> -->
					<p id="home-giasp">
						Giá: <?= ($value->gia_camera != 0) ? number_format($value->gia_camera).' VNĐ': 'Liên hệ' ?>
					</p>
				</div>
			</div>

		<?php
			if ($i % 4 == 0 || $i == count($cameraList)) {
				echo '</div>';
			}
		?>
		<?php endforeach ?>

	</div>
<?php endif ?>

	
</div>

<?php
viewSiteLayout('foot');
?>