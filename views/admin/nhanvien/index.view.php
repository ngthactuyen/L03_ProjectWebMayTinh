<?php
viewAdminLayout('head');
?>

<h2>Quản lý Nhân viên</h2>
<?php viewAdminLayout('message'); ?>
<form action="?controller=nhanvien" method="post">
	<input id="inputSearch" type="text" name="txt_keyword" placeholder="Tìm kiếm theo tên nhân viên" value="<?= isset($keyword) ? $keyword: '' ?>">
	<button class="btn-add" type="submit">Tìm kiếm</button>
</form>

<p>
	<button class="btn-add">
		<a href="?controller=nhanvien&action=add">Thêm mới</a>
	</button>
</p>
<p>
	Tổng số: <?= count($nhanvienList) ?>
</p>
<table border="1px" cellpadding="5px">
	<tr>
		<th>Id</th>
		<th>Họ tên</th>
		<th>Địa chỉ</th>
		<th>Số điện thoại</th>
		<th>Tên đăng nhập</th>
		<th>Mật khẩu</th>
		<th>Phân quyền</th>
		<th>Ngày tạo</th>
		<th>Thao tác</th>
	</tr>
	<?php foreach ($nhanvienList as $key => $value) { ?>
		<tr>
			<td><?= $value->id_nhanvien?></td>
			<td><?= $value->hoten?></td>
			<td><?= $value->diachi?></td>
			<td><?= $value->sdt?></td>
			<td><?= $value->tendangnhap?></td>
			<td><?= $value->matkhau?></td>
			<td>
			<?php
				if ($value->phanquyen == 1) {
					echo "Admin";
				}
				if ($value->phanquyen == 0) {
					echo "Nhân viên";
				}
			?>
			</td>
			<td><?= $value->ngaytao?></td>
			<td>
				<button class="btn-add">
					<a href="?controller=nhanvien&action=update&id_nhanvien=<?= $value->id_nhanvien ?>">Sửa</a>	
				</button>
				<button class="btn-delete">
					<a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="?controller=nhanvien&action=delete&id_nhanvien=<?= $value->id_nhanvien ?>">Xóa</a>	
				</button>
				
			</td>
		</tr>
	<?php } ?>
</table>

<?php
viewAdminLayout('foot');
?>

