<?php
// dd($hangsxList);
viewAdminLayout('head');
?>

<h2>Thêm mới sản phẩm Camera</h2>
<form action="?controller=camera&action=addsave" method="post" enctype="multipart/form-data">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>ID Camera:</th>
			<td>
				<input type="text" name="txt_id_camera">
			</td>
		</tr>
		<tr>
			<th>Hãng sản xuất: </th>
			<td id="td-select">
				<select name="sl_hangsx_id">
					<?php foreach ($hangsxList as $key => $value): ?>
						<option value="<?= $value->id_hangsx?>"><?= $value->tenhangsx?></option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Tên Camera:</th>
			<td>
				<input type="text" name="txt_ten_camera">
			</td>
		</tr>
		<tr>
			<th>Giá bán:</th>
			<td>
				<input type="text" name="txt_gia_camera" placeholder="VNĐ">
			</td>
		</tr>
		<tr>
			<th>Độ phân giải:</th>
			<td>
				<input type="text" name="txt_dophangiai" placeholder="Megapixel">
			</td>
		</tr>
		<tr>
			<th>Ống kính:</th>
			<td>
				<input type="text" name="txt_ongkinh" placeholder="mm">
			</td>
		</tr>
		<tr>
			<th>Bán kính hồng ngoại:</th>
			<td>
				<input type="text" name="txt_bankinhhongngoai" placeholder="m">
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
			<th>Mô tả: </th>
			<td>
				<textarea name="txt_mota" id="mota"></textarea>
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