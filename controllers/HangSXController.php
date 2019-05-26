<?php
class HangSXController{
	protected $hangsxSql;
	
	function __construct()
	{
		$this->hangsxSql = new HangSXSql();
	}

	function index(){
		if (isset($_POST['txt_keyword'])) {
			$keyword = $_POST['txt_keyword'];
			$hangsxList = $this->hangsxSql->getAllHangSX();
			viewAdmin('hangsx/index', ['hangsxList' => $hangsxList, 'keyword' => $keyword]);
		} else {
			$hangsxList = $this->hangsxSql->getAllHangSX();
			viewAdmin('hangsx/index', ['hangsxList' => $hangsxList]);
		}
		
	}

	function add(){
		viewAdmin('hangsx/add');
	}

	function addsave(){
		// dd($_POST);
		// dd($_FILES);
		$loaisp = $_POST['sl_loaisp'];
		$tenhangsx = $_POST['txt_tenhangsx'];
		$anh_hangsx = 'assets/images/hangsx/'.$_FILES['file_anh']['name'];

		$check = $this->hangsxSql->insertHangSX($loaisp, $tenhangsx, $anh_hangsx);
		if ($check) {
			move_uploaded_file($_FILES['file_anh']['tmp_name'], $anh_hangsx);
			setSuccessMessage('Thêm mới thành công');
			redirect('hangsx');
		} else {
			setErrorMessage('Thêm mới thất bại');
			redirect('hangsx');
		}
	}

	public function delete()	
	{
		$id_hangsx = $_GET['id_hangsx'];
		$check = $this->hangsxSql->deleteHangSX($id_hangsx);
		if ($check) {
			setSuccessMessage('Xóa thành công');
			redirect('hangsx');
		} else {
			setErrorMessage('Thêm mới thất bại');
			redirect('hangsx');
		}
	}

	public function update()
	{
		$id_hangsx = $_GET['id_hangsx'];
		$hangsx = $this->hangsxSql->getOneHangSX($id_hangsx);
		viewAdmin('hangsx/update', ['hangsx' => $hangsx]);
	}

	public function updatesave()
	{
		$id_hangsx = $_POST['txt_id_hangsx'];
		$loaisp = $_POST['sl_loaisp'];
		$tenhangsx = $_POST['txt_tenhangsx'];
		if ($_FILES['file_anh']['name'] == '') {
			$anh_hangsx = '';
			$check = $this->hangsxSql->updateHangSX($id_hangsx, $loaisp, $tenhangsx, $anh_hangsx);
		} else {
			$anh_hangsx = 'assets/images/hangsx/'.$_FILES['file_anh']['name'];
			$check = $this->hangsxSql->updateHangSX($id_hangsx, $loaisp, $tenhangsx, $anh_hangsx);
		}
		if ($check) {
			move_uploaded_file($_FILES['file_anh']['tmp_name'], $anh_hangsx);
			setSuccessMessage('Sửa thông tin thành công');
			redirect('hangsx');		
		} else {
			setErrorMessage('Sửa thông tin thất bại');
			redirect('hangsx');
		}
	}
}

?>