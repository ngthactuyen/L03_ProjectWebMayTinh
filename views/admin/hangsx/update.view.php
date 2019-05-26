<?php
// dd($hangsx);
viewAdminLayout('head');
?>

<h2>Sửa thông tin Hãng sản xuất</h2>
<form action="?controller=hangsx&action=updatesave" method="post" enctype="multipart/form-data">
	<input type="hidden" name="txt_id_hangsx" value="<?= $hangsx->id_hangsx ?>">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>Loại sản phẩm: </th>
			<td>
				<select name="sl_loaisp">
					<option value="1" <?= ($hangsx->loaisp == 1) ? 'selected': '' ?> >Laptop</option>
					<option value="2" <?= ($hangsx->loaisp == 2) ? 'selected': '' ?> >Camera</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Tên hãng: </th>
			<td>
				<input type="text" name="txt_tenhangsx" value="<?= $hangsx->tenhangsx?>">
			</td>
		</tr>
		<tr>
			<th>Ảnh: </th>
			<td>
				<input type="file" name="file_anh">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="" value="Sửa thông tin">
			</td>
		</tr>
		
	</table>
</form>


<?php
viewAdminLayout('foot');
?>