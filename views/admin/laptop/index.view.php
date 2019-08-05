<?php
viewAdminLayout('head');
?>

<h2>Quản lý sản phẩm Laptop</h2>
<?php viewAdminLayout('message'); ?>
<form action="?controller=laptop" method="post">
	<input id="inputSearch" type="text" name="txt_keyword" placeholder="Tìm kiếm theo id laptop hoặc tên laptop hoặc tên hãng sản xuất" value="<?= isset($keyword) ? $keyword: '' ?>">
	<button class="btn-add" type="submit">Tìm kiếm</button>
</form>
<p>
	<button class="btn-add">
		<a href="?controller=laptop&action=add">Thêm mới</a>
	</button>	
</p>
<p>
	Tổng sản phẩm: <?= count($laptopList) ?>
</p>
<table border="1px" cellpadding="5px">
	<tr>
		<th>Id</th>
		<th>Tên</th>
		<th>Giá</th>
		<th>CPU</th>
		<th>Ram</th>
		<th>Ổ cứng</th>
		<th>Url</th>
		<th>Ảnh</th>
		<th>Nhu cầu</th>
		<!-- <th>Số lượng</th> -->
		<th>Thao tác</th>
	</tr>
	<?php foreach ($laptopList as $key => $value): ?>
	<tr>
		<td><?= $value->id_laptop?></td>
		<td><?= $value->ten_laptop?></td>
		<td><?= number_format($value->gia_laptop)?> VNĐ</td>
		<td><?= $value->cpu?></td>
		<td><?= $value->ram?></td>
		<td><?= $value->ocung?></td>
		<td><?= $value->url_laptop?></td>
		<td>
			<img src="<?= $value->anh_laptop?>">
		</td>
		<td>
		<?php
			if ($value->nhucau == 1) {
					echo "Học tập - Văn phòng";
			}
			if ($value->nhucau == 2) {
					echo "Đồ họa - Kỹ thuật";
			}
			if ($value->nhucau == 3) {
					echo "Laptop Gaming";
			}
			if ($value->nhucau == 4) {
					echo "Cao cấp - Sang trọng";
			}
					
		?>
		</td>
		<!-- <td><?= $value->soluong?></td> -->
		<td>
			<button class="btn-add">
				<a href="?controller=laptop&action=update&id_laptop=<?= $value->id_laptop ?>">Sửa</a>
			</button>
			<button class="btn-delete">
				<a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="?controller=laptop&action=delete&id_laptop=<?= $value->id_laptop ?>">Xóa</a>
			</button>
		</td>
	</tr>
	<?php endforeach ?>
</table>

<?php
viewAdminLayout('foot');
?>

