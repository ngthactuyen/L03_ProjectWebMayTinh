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

		$checkExistCamera = $this->cameraSql->getOneCameraByIdOrUrl($id_camera, $url_camera);
		if (count($checkExistCamera) == 0) {
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
		} else {
			setErrorMessage('Id Camera hoặc url bạn nhập đã bị trùng, hãy nhập lại');
			$hangsxSql = new hangsxSql();
			$hangsxList = $hangsxSql->getHangSXCamera();
			viewAdmin('camera/add', [
				'hangsxList' => $hangsxList,
				'id_camera' => $_POST['txt_id_camera'],
				'hangsx_id' => $_POST['sl_hangsx_id'],
				'ten_camera' => $_POST['txt_ten_camera'],
				'gia_camera' => $_POST['txt_gia_camera'],
				'dophangiai' => $_POST['txt_dophangiai'],
				'ongkinh' => $_POST['txt_ongkinh'],
				'bankinhhongngoai' => $_POST['txt_bankinhhongngoai'],
				'url_camera' => $_POST['txt_url'],
				'anh_camera' => 'assets/images/camera/'.$_FILES['file_anh']['name'],
				'mota' => $_POST['txt_mota']
			]);
		}

			
	}

	public function delete()	
	{
		$id_camera = $_GET['id_camera'];
		$check = $this->cameraSql->deleteCamera($id_camera);
		if ($check) {
			setSuccessMessage('Xóa thành công');
			redirect('camera');
		} else {
			setErrorMessage('Xóa thất bại');
			redirect('camera');
		}
	}

	public function update()
	{
		$hangsxSql = new hangsxSql();
		$hangsxList = $hangsxSql->getHangSXCamera();
		$id_camera = $_GET['id_camera'];
		$camera = $this->cameraSql->getOneCamera($id_camera);
		viewAdmin('camera/update', ['camera' => $camera, 'hangsxList' => $hangsxList]);
	}

	public function updatesave()
	{
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

		$siteSql = new SiteSql();
		$checkExistCamera = $siteSql->getOneCameraByUrl($url_camera);
		// dd($checkExistCamera);
		if (is_null($checkExistCamera->id_camera) || $checkExistCamera->id_camera == $id_camera)
		{
			if ($_FILES['file_anh']['name'] == '') {
				$anh_camera = '';
			} else {
				$anh_camera = 'assets/images/camera/'.$_FILES['file_anh']['name'];
			}
			
			$check = $this->cameraSql->updateCamera($id_camera, $hangsx_id, $ten_camera, $gia_camera, $dophangiai, $ongkinh, $bankinhhongngoai, $url_camera, $anh_camera, $mota);
			// die($check);
			if ($check) {
				move_uploaded_file($_FILES['file_anh']['tmp_name'], $anh_camera);
				setSuccessMessage('Sửa thông tin thành công');
				redirect('camera');		
			} else {
				setErrorMessage('Sửa thông tin thất bại');
				redirect('camera');
			}
		}
		if (!is_null($checkExistCamera->id_camera) && $checkExistCamera->id_camera != $id_camera)
		{
			setErrorMessage('Url bạn nhập đã bị trùng, hãy nhập lại');
			$hangsxSql = new hangsxSql();
			$hangsxList = $hangsxSql->getHangSXLaptop();
			$camera = new Camera([
				'id_camera' => $_POST['txt_id_camera'],
				'hangsx_id' => $_POST['sl_hangsx_id'],
				'ten_camera' => $_POST['txt_ten_camera'],
				'gia_camera' => $_POST['txt_gia_camera'],
				'dophangiai' => $_POST['txt_dophangiai'],
				'ongkinh' => $_POST['txt_ongkinh'],
				'bankinhhongngoai' => $_POST['txt_bankinhhongngoai'],
				'url_camera' => $_POST['txt_url'],
				'anh_camera' => 'assets/images/camera/'.$_FILES['file_anh']['name'],
				'mota' => $_POST['txt_mota'],
				'soluong' => 0
			]);
			viewAdmin('camera/update', ['camera' => $camera, 'hangsxList' => $hangsxList]);
		}
	}
}

?>