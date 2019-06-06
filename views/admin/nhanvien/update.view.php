<?php
// dd($nhanvien);	
viewAdminLayout('head');
?>

<h2>Sửa thông tin Hãng sản xuất</h2>
<form action="?controller=nhanvien&action=updatesave" method="post" enctype="multipart/form-data">
	<input type="hidden" name="txt_id_nhanvien" value="<?= $nhanvien->id_nhanvien ?>">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>Họ tên: </th>
			<td>
				<input type="text" name="txt_hoten" value="<?= $nhanvien->hoten ?>">
			</td>
		</tr>
		<tr>
			<th>Địa chỉ: </th>
			<td>
				<input type="text" name="txt_diachi" value="<?= $nhanvien->diachi ?>">
			</td>
		</tr>
		<tr>
			<th>Số điện thoại: </th>
			<td>
				<input type="text" name="txt_sdt" value="<?= $nhanvien->sdt ?>">
			</td>
		</tr>
		<tr>
			<th>Tên đăng nhập: </th>
			<td>
				<input type="text" name="txt_tendangnhap" value="<?= $nhanvien->tendangnhap ?>">
			</td>
		</tr>
		<tr>
			<th>Mật khẩu: </th>
			<td>
				<input type="text" name="txt_matkhau" value="<?= $nhanvien->matkhau ?>">
			</td>
		</tr>
		<tr>
			<th>Phân quyền: </th>
			<td id="td-select">
				<select name="sl_phanquyen">
					<option value="1" <?= ($nhanvien->phanquyen == 1) ? 'selected': '' ?> >Admin</option>
					<option value="0" <?= ($nhanvien->phanquyen == 0) ? 'selected': '' ?> >Nhân viên</option>
				</select>
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