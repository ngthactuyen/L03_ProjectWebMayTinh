<?php
// dd($hangsxList);
// dd($laptop);
// echo $laptop->mota;
// die();
viewAdminLayout('head');
?>

<h2>Sửa thông tin sản phẩm Laptop</h2>
<form action="?controller=laptop&action=updatesave" method="post" enctype="multipart/form-data">
	<table border="1px" cellpadding="5px">
		<input type="hidden" name="txt_id_laptop" value="<?= $laptop->id_laptop?>">
		<tr>
			<th>Hãng sản xuất: </th>
			<td>
				<select name="sl_hangsx_id">
					<?php foreach ($hangsxList as $key => $value): ?>
						<option value="<?= $value->id_hangsx?>" <?= ($laptop->hangsx_id == $value->id_hangsx) ? 'selected': '' ?> ><?= $value->tenhangsx?></option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Tên Laptop:</th>
			<td>
				<input type="text" name="txt_ten_laptop" value="<?= $laptop->ten_laptop?> ">
			</td>
		</tr>
		<tr>
			<th>Giá bán:</th>
			<td>
				<input type="text" name="txt_gia_laptop" placeholder="VNĐ" value="<?= $laptop->gia_laptop?> ">
			</td>
		</tr>
		<tr>
			<th>Màn hình:</th>
			<td>
				<input type="text" name="txt_manhinh" placeholder="inch" value="<?= $laptop->manhinh?> ">
			</td>
		</tr>
		<tr>
			<th>CPU:</th>
			<td>
				<input type="text" name="txt_cpu" value="<?= $laptop->cpu?> ">
			</td>
		</tr>
		<tr>
			<th>RAM:</th>
			<td>
				<input type="text" name="txt_ram" placeholder="GB" value="<?= $laptop->ram?> ">
			</td>
		</tr>
		<tr>
			<th>Ổ cứng:</th>
			<td>
				<input type="text" name="txt_ocung" placeholder="GB" value="<?= $laptop->ocung?> ">
			</td>
		</tr>
		<tr>
			<th>VGA:</th>
			<td>
				<input type="text" name="txt_vga" value="<?= $laptop->vga?> ">
			</td>
		</tr>
		<tr>
			<th>Hệ điều hành:</th>
			<td>
				<input type="text" name="txt_hdh" value="<?= $laptop->hdh?> ">
			</td>
		</tr>
		<tr>
			<th>Kích thước:</th>
			<td>
				<input type="text" name="txt_kichthuoc" value="<?= $laptop->kichthuoc?> ">
			</td>
		</tr>
		<tr>
			<th>Khối lượng:</th>
			<td>
				<input type="text" name="txt_khoiluong" placeholder="kg" value="<?= $laptop->khoiluong?> ">
			</td>
		</tr>
		<tr>
			<th>Pin:</th>
			<td>
				<input type="text" name="txt_pin" placeholder="cell" value="<?= $laptop->pin?> ">
			</td>
		</tr>
		<tr>
			<th>Url:</th>
			<td>
				<input type="text" name="txt_url" value="<?= $laptop->url_laptop?> ">
			</td>
		</tr>
		<tr>
			<th>Ảnh:</th>
			<td>
				<input type="file" name="file_anh">
			</td>
		</tr>
		<tr>
			<th>Nhu cầu:</th>
			<td>
				<select name="sl_nhucau">
					<option value="1" <?= ($laptop->nhucau == 1) ? 'selected': '' ?> >Học tập - Văn phòng</option>
					<option value="2" <?= ($laptop->nhucau == 2) ? 'selected': '' ?> >Đồ họa - Kỹ thuật</option>
					<option value="3" <?= ($laptop->nhucau == 3) ? 'selected': '' ?> >Laptop Gaming</option>
					<option value="4" <?= ($laptop->nhucau == 4) ? 'selected': '' ?> >Cao cấp - Sang trọng</option>
				</select>
		</tr>
		<tr>
			<th>Mô tả: </th>
			<td>
				<textarea name="txt_mota" id="mota"><?= $laptop->mota?></textarea>
				<script>CKEDITOR.replace('mota');</script>
			</td>
		</tr>
		<tr>
			<td id="btn" colspan="2" align="center">
				<button class="btn-add" type="submit">Sửa thông tin</button>
			</td>
		</tr>
	</table>
</form>

<?php
viewAdminLayout('foot');
?>