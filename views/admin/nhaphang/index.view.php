<?php
viewAdminLayout('head');
?>

<h2>Quản lý Hãng sản xuất</h2>
<?php viewAdminLayout('message'); ?>
<form action="?controller=hangsx" method="post">
	<input id="inputSearch" type="text" name="txt_keyword" placeholder="Tìm kiếm theo tên hãng sản xuất" value="<?= isset($keyword) ? $keyword: '' ?>">
	<button class="btn-add" type="submit">Tìm kiếm</button>
</form>

<p>
	<button class="btn-add">
		<a href="?controller=hangsx&action=add">Thêm mới</a>
	</button>
</p>
<p>
	Tổng số: <?= count($hangsxList) ?>
</p>
<table border="1px" cellpadding="5px">
	<tr>
		<th>Id</th>
		<th>Loại sản phẩm</th>
		<th>Tên hãng</th>
		<th>Ảnh</th>
		<th>Thao tác</th>
	</tr>
	<?php foreach ($hangsxList as $key => $value) { ?>
		<tr>
			<td><?= $value->id_hangsx?></td>
			<td>
			<?php
				if ($value->loaisp == 1) {
					echo "Máy tính";
				}
				if ($value->loaisp == 2) {
					echo "Camera";
				}
			?>
			</td>
			<td><?= $value->tenhangsx?></td>
			<td>
				<img src="<?= $value->anh_hangsx?>">
			</td>
			<td>
				<button class="btn-add">
					<a href="?controller=hangsx&action=update&id_hangsx=<?= $value->id_hangsx ?>">Sửa</a>	
				</button>
				<button class="btn-delete">
					<a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="?controller=hangsx&action=delete&id_hangsx=<?= $value->id_hangsx ?>">Xóa</a>	
				</button>
				
			</td>
		</tr>
	<?php } ?>
</table>

<?php
viewAdminLayout('foot');
?>

