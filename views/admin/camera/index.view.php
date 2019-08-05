<?php
// dd($cameraList);
viewAdminLayout('head');
?>

<h2>Quản lý sản phẩm Camera</h2>
<?php viewAdminLayout('message'); ?>
<form action="?controller=camera" method="post">
	<input id="inputSearch" type="text" name="txt_keyword" placeholder="Tìm kiếm theo id camera hoặc tên camera hoặc tên hãng sản xuất" value="<?= isset($keyword) ? $keyword: '' ?>">
	<button class="btn-add" type="submit">Tìm kiếm</button>
</form>
<p>
	<button class="btn-add">
		<a href="?controller=camera&action=add">Thêm mới</a>
	</button>	
</p>
<p>
	Tổng sản phẩm: <?= count($cameraList) ?>
</p>
<table border="1px" cellpadding="5px">
	<tr>
		<th>Id</th>
		<th>Tên</th>
		<th>Giá</th>
		<th>Độ phân giải</th>
		<th>Ống kính</th>
		<th>Bán kính hồng ngoại</th>
		<th>Url</th>
		<th>Ảnh</th>
		<th>Mô tả</th>
		<!-- <th>Số lượng</th> -->
		<th>Thao tác</th>
	</tr>
	<?php foreach ($cameraList as $key => $value): ?>
	<tr>
		<td><?= $value->id_camera?></td>
		<td><?= $value->ten_camera?></td>
		<td><?= number_format($value->gia_camera)?> VNĐ/chiếc</td>
		<td><?= $value->dophangiai?> MP</td>
		<td><?= $value->ongkinh?> mm</td>
		<td><?= $value->bankinhhongngoai?> m</td>
		<td><?= $value->url_camera?></td>
		<td>
			<img src="<?= $value->anh_camera?>">
		</td>
		<td><?= $value->mota?></td>
		<!-- <td><?= $value->soluong?></td> -->
		<td>
			<button class="btn-add">
				<a href="?controller=camera&action=update&id_camera=<?= $value->id_camera ?>">Sửa</a>
			</button>
			<button class="btn-delete">
				<a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="?controller=camera&action=delete&id_camera=<?= $value->id_camera ?>">Xóa</a>
			</button>
		</td>
	</tr>
	<?php endforeach ?>
</table>

<?php
viewAdminLayout('foot');
?>

