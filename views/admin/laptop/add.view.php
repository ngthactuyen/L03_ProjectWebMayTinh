<?php
// dd($hangsxList);
viewAdminLayout('head');
?>

<h2>Thêm mới sản phẩm Laptop</h2>
<?php viewAdminLayout('message'); ?>
<p style="text-align: center; color: red">Các trường có dấu * bắt buộc phải nhập</p>

<form action="?controller=laptop&action=addsave" method="post" enctype="multipart/form-data">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>ID Laptop(*):</th>
			<td>
				<input type="text" name="txt_id_laptop" value="<?= isset($id_laptop) ? $id_laptop: ''?>">
			</td>
		</tr>
		<tr>
			<th>Hãng sản xuất: </th>
			<td id="td-select">
				<select name="sl_hangsx_id">
					<?php foreach ($hangsxList as $key => $value): ?>
						<option value="<?= $value->id_hangsx?>"
							<?= (isset($hangsx_id) && $hangsx_id == $value->id_hangsx) ? 'selected': ''?>
						>
							<?= $value->tenhangsx?>
						</option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Tên Laptop(*):</th>
			<td>
				<input type="text" name="txt_ten_laptop" value="<?= isset($ten_laptop) ? $ten_laptop: ''?>">
			</td>
		</tr>
		<tr>
			<th>Giá bán(*):</th>
			<td>
				<input type="text" name="txt_gia_laptop" placeholder="VNĐ" value="<?= isset($gia_laptop) ? $gia_laptop: ''?>">
			</td>
		</tr>
		<tr>
			<th>Màn hình(*):</th>
			<td>
				<input type="text" name="txt_manhinh" placeholder="inch" value="<?= isset($manhinh) ? $manhinh: ''?>">
			</td>
		</tr>
		<tr>
			<th>CPU(*):</th>
			<td>
				<input type="text" name="txt_cpu" value="<?= isset($cpu) ? $cpu: ''?>">
			</td>
		</tr>
		<tr>
			<th>RAM(*):</th>
			<td>
				<input type="text" name="txt_ram" value="<?= isset($ram) ? $ram: ''?>">
			</td>
		</tr>
		<tr>
			<th>Ổ cứng(*):</th>
			<td>
				<input type="text" name="txt_ocung" value="<?= isset($ocung) ? $ocung: ''?>">
			</td>
		</tr>
		<tr>
			<th>VGA(*):</th>
			<td>
				<input type="text" name="txt_vga" value="<?= isset($vga) ? $vga: ''?>">
			</td>
		</tr>
		<tr>
			<th>Hệ điều hành:</th>
			<td>
				<input type="text" name="txt_hdh" value="<?= isset($hdh) ? $hdh: ''?>">
			</td>
		</tr>
		<tr>
			<th>Kích thước:</th>
			<td>
				<input type="text" name="txt_kichthuoc" value="<?= isset($kichthuoc) ? $kichthuoc: ''?>">
			</td>
		</tr>
		<tr>
			<th>Khối lượng:</th>
			<td>
				<input type="text" name="txt_khoiluong" placeholder="kg" value="<?= isset($khoiluong) ? $khoiluong: ''?>">
			</td>
		</tr>
		<tr>
			<th>Pin:</th>
			<td>
				<input type="text" name="txt_pin" placeholder="cell" value="<?= isset($pin) ? $pin: ''?>">
			</td>
		</tr>
		<tr>
			<th>Url(*):</th>
			<td>
				<input type="text" name="txt_url" value="<?= isset($url_laptop) ? $url_laptop: ''?>">
			</td>
		</tr>
		<tr>
			<th>Ảnh(*):</th>
			<td>
				<input type="file" name="file_anh">
			</td>
		</tr>
		<tr>
			<th>Nhu cầu:</th>
			<td id="td-select">
				<select name="sl_nhucau">
					<option value="1" <?= (isset($nhucau) && $nhucau == 1) ? 'selected': ''?>>Học tập - Văn phòng</option>
					<option value="2" <?= (isset($nhucau) && $nhucau == 2) ? 'selected': ''?>>Đồ họa - Kỹ thuật</option>
					<option value="3" <?= (isset($nhucau) && $nhucau == 3) ? 'selected': ''?>>Laptop Gaming</option>
					<option value="4" <?= (isset($nhucau) && $nhucau == 4) ? 'selected': ''?>>Cao cấp - Sang trọng</option>
				</select>
		</tr>
		<tr>
			<th>Mô tả: </th>
			<td>
				<textarea name="txt_mota" id="mota">
					<?= isset($mota) ? $mota: ''?>
				</textarea>
				<script>CKEDITOR.replace('mota');</script>
			</td>
		</tr>
		<tr>
			<td id="btn" colspan="2" align="center">
				<button class="btn-add" type="submit" name="">Thêm mới</button>
			</td>
		</tr>
	</table>
</form>

<?php
viewAdminLayout('foot');
?>