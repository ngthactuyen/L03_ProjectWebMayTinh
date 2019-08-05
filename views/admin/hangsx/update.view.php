<?php
// dd($hangsx);
viewAdminLayout('head');
?>
<script type="text/javascript" src="assets/js/admin/validateHangSX.js"></script>

<h2>Sửa thông tin Hãng sản xuất</h2>
<form action="?controller=hangsx&action=updatesave" method="post" enctype="multipart/form-data" name="formHangSX" onsubmit="return validate()">
	<input type="hidden" name="txt_id_hangsx" value="<?= $hangsx->id_hangsx ?>">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>Loại sản phẩm: </th>
			<td id="td-select">
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
			<td id="btn" colspan="2">
				<button class="btn-add" type="submit">Sửa thông tin</button>
			</td>
		</tr>
		
	</table>
</form>


<?php
viewAdminLayout('foot');
?>