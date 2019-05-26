<?php
viewAdminLayout('head');
?>
<h2>Thêm mới Hãng sản xuất</h2>
<form action="?controller=hangsx&action=addsave" method="post" enctype="multipart/form-data">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>Loại sản phẩm: </th>
			<td>
				<select name="sl_loaisp">
					<option value="1">Laptop</option>
					<option value="2">Camera</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Tên hãng: </th>
			<td>
				<input type="text" name="txt_tenhangsx">
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
				<button type="submit" name="">Thêm mới</button>
			</td>
		</tr>
		
	</table>
</form>


<?php
viewAdminLayout('foot');
?>