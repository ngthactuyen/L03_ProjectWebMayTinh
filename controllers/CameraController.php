<?php
class CameraController{
	protected $cameraSql;
	
	function __construct()
	{
		$this->cameraSql = new CameraSql();
	}

	function index()
	{
		if (isset($_POST['txt_keyword'])) {
			$keyword = $_POST['txt_keyword'];
			$cameraList = $this->cameraSql->getAllCamera();
			viewAdmin('camera/index', ['cameraList' => $cameraList, 'keyword' => $keyword]);
		} else {
			$cameraList = $this->cameraSql->getAllCamera();
			viewAdmin('camera/index', ['cameraList' => $cameraList]);
		}
		
	}

	function add(){
		$hangsxSql = new hangsxSql();
		$hangsxList = $hangsxSql->getHangSXCamera();
		viewAdmin('camera/add', ['hangsxList' => $hangsxList]);
	}

	function addsave(){
		// dd($_POST);
		// dd($_FILES);
		$id_camera = $_POST['txt_id_camera'];
		$hangsx_id = $_POST['sl_hangsx_id'];
		$ten_camera = $_POST['txt_ten_camera'];
		$gia_camera = $_POST['txt_gia_camera'];
		$dophangiai = $_POST['txt_dophangiai'];
		$ongkinh = $_POST['txt_ongkinh'];
		$bankinhhongngoai = $_POST['txt_bankinhhongngoai'];
		$url_camera = $_POST['txt_url'];
		$anh_camera = 'assets/images/camera/'.$_FILES['file_anh']['name'];
		$mota = $_POST['txt_mota'];

		$check = $this->cameraSql->insertCamera($id_camera, $hangsx_id, $ten_camera, $gia_camera, $dophangiai, $ongkinh, $bankinhhongngoai, $url_camera, $anh_camera, $mota);
		// dd($check);
		if ($check) {
			move_uploaded_file($_FILES['file_anh']['tmp_name'], $anh_camera);
			setSuccessMessage('Thêm mới thành công');
			redirect('camera');
		} else {
			setErrorMessage('Thêm mới thất bại');
			redirect('camera');
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
			setErrorMessage('Xóa thất bại');
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