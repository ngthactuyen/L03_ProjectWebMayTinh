<?php
// dd($hangsxList);
viewAdminLayout('head');
?>

<h2>Thêm mới sản phẩm Laptop</h2>
<form action="?controller=laptop&action=addsave" method="post" enctype="multipart/form-data">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>ID Laptop:</th>
			<td>
				<input type="text" name="txt_id_laptop">
			</td>
		</tr>
		<tr>
			<th>Hãng sản xuất: </th>
			<td>
				<select name="sl_hangsx_id">
					<?php foreach ($hangsxList as $key => $value): ?>
						<option value="<?= $value->id_hangsx?>"><?= $value->tenhangsx?></option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Tên Laptop:</th>
			<td>
				<input type="text" name="txt_ten_laptop">
			</td>
		</tr>
		<tr>
			<th>Giá bán:</th>
			<td>
				<input type="text" name="txt_gia_laptop" placeholder="VNĐ">
			</td>
		</tr>
		<tr>
			<th>Màn hình:</th>
			<td>
				<input type="text" name="txt_manhinh" placeholder="inch">
			</td>
		</tr>
		<tr>
			<th>CPU:</th>
			<td>
				<input type="text" name="txt_cpu">
			</td>
		</tr>
		<tr>
			<th>RAM:</th>
			<td>
				<input type="text" name="txt_ram" placeholder="GB">
			</td>
		</tr>
		<tr>
			<th>VGA:</th>
			<td>
				<input type="text" name="txt_vga">
			</td>
		</tr>
		<tr>
			<th>HDD:</th>
			<td>
				<input type="text" name="txt_hdd" placeholder="GB">
			</td>
		</tr>
		<tr>
			<th>SSD:</th>
			<td>
				<input type="text" name="txt_ssd" placeholder="GB">
			</td>
		</tr>
		<tr>
			<th>Hệ điều hành:</th>
			<td>
				<input type="text" name="txt_hdh">
			</td>
		</tr>
		<tr>
			<th>Khối lượng:</th>
			<td>
				<input type="text" name="txt_khoiluong" placeholder="kg">
			</td>
		</tr>
		<tr>
			<th>Pin:</th>
			<td>
				<input type="text" name="txt_pin" placeholder="cell">
			</td>
		</tr>
		<tr>
			<th>Url:</th>
			<td>
				<input type="text" name="txt_url">
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
					<option value="1">Học tập - Văn phòng</option>
					<option value="2">Đồ họa - Kỹ thuật</option>
					<option value="3">Laptop Gaming</option>
					<option value="4">Cao cấp - Sang trọng</option>
				</select>
		</tr>
		<tr>
			<th>Mô tả: </th>
			<td>
				<textarea name="txt_mota" id="mota"></textarea>
				<script>CKEDITOR.replace('mota');</script>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<button type="submit" name="">Thêm mới</button>
			</td>
		</tr>
	</table>
</form>

<?php
viewAdminLayout('foot');
?>