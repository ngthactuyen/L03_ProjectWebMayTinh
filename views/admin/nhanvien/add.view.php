<?php
viewAdminLayout('head');
?>
<script type="text/javascript" src="assets/js/admin/validateNhanVien.js"></script>
<h2>Thêm mới Nhân viên</h2>
<form action="?controller=nhanvien&action=addsave" method="post" name="formNhanVien" onsubmit="return validate()">
	<table border="1px" cellpadding="5px">
		<tr>
			<th>Họ tên: </th>
			<td>
				<input type="text" name="txt_hoten">
			</td>
		</tr>
		<tr>
			<th>Địa chỉ: </th>
			<td>
				<input type="text" name="txt_diachi">
			</td>
		</tr>
		<tr>
			<th>Số điện thoại: </th>
			<td>
				<input type="text" name="txt_sdt">
			</td>
		</tr>
		<tr>
			<th>Tên đăng nhập: </th>
			<td>
				<input type="text" name="txt_tendangnhap">
			</td>
		</tr>
		<tr>
			<th>Mật khẩu: </th>
			<td>
				<input type="text" name="txt_matkhau">
			</td>
		</tr>
		<tr>
			<th>Phân quyền: </th>
			<td id="td-select">
				<select name="sl_phanquyen">
					<option value="1">Admin</option>
					<option value="0">Nhân viên</option>
				</select>
			</td>
		</tr>
		<tr>
			<td id="btn" colspan="2">
				<button class="btn-add" type="submit" name="">Thêm mới</button>
			</td>
		</tr>
		
	</table>
</form>


<?php
viewAdminLayout('foot');
?>