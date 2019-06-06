<?php
class NhanVienController{
	protected $nhanvienSql;
	
	function __construct()
	{
		$this->nhanvienSql = new NhanVienSql();
	}

	public function login()
	{
		viewAdmin('nhanvien/login');
	}

	public function authenticate()
	{
		// dd($_POST);
		$tendangnhap = $_POST["txt_tendangnhap"];
		$matkhau = $_POST["txt_matkhau"];
		$nhanvien = $this->nhanvienSql->getOneNhanVienByTendangnhap($tendangnhap, $matkhau);
		if (isset($nhanvien->id_nhanvien)) {
			$_SESSION['id_nhanvien'] = $nhanvien->id_nhanvien;
			$_SESSION['hoten'] = $nhanvien->hoten;
			$_SESSION['phanquyen'] = $nhanvien->phanquyen;
			redirect('laptop');
		} else {
			setErrorMessage('Tên đăng nhập hoặc mật khẩu sai!');
			viewAdmin('nhanvien/login', ['tendangnhap' => $tendangnhap, 'matkhau' => $matkhau]);
		}
	}

	public function logout()
	{
		session_unset();
		viewAdmin('nhanvien/login');
	}

	function index()
	{
		if (isset($_POST['txt_keyword'])) {
			$keyword = $_POST['txt_keyword'];
			$nhanvienList = $this->nhanvienSql->getAllNhanVien();
			viewAdmin('nhanvien/index', ['nhanvienList' => $nhanvienList, 'keyword' => $keyword]);
		} else {
			$nhanvienList = $this->nhanvienSql->getAllNhanVien();
			viewAdmin('nhanvien/index', ['nhanvienList' => $nhanvienList]);
		}
		
	}

	function add(){
		viewAdmin('nhanvien/add');
	}

	function addsave(){
		// dd($_POST);
		$hoten = $_POST['txt_hoten'];
		$diachi = $_POST['txt_diachi'];
		$sdt = $_POST['txt_sdt'];
		$tendangnhap = $_POST['txt_tendangnhap'];
		$matkhau = $_POST['txt_matkhau'];
		$phanquyen = $_POST['sl_phanquyen'];
		

		$check = $this->nhanvienSql->insertNhanVien($hoten, $diachi, $sdt, $tendangnhap, $matkhau, $phanquyen);
		if ($check) {
			setSuccessMessage('Thêm mới thành công');
			redirect('nhanvien');
		} else {
			setErrorMessage('Thêm mới thất bại');
			redirect('nhanvien');
		}
	}

	public function delete()	
	{
		$id_nhanvien = $_GET['id_nhanvien'];
		$check = $this->nhanvienSql->deleteNhanVien($id_nhanvien);
		if ($check) {
			setSuccessMessage('Xóa thành công');
			redirect('nhanvien');
		} else {
			setErrorMessage('Xóa thất bại');
			redirect('nhanvien');
		}
	}

	public function update()
	{
		$id_nhanvien = $_GET['id_nhanvien'];
		$nhanvien = $this->nhanvienSql->getOneNhanVien($id_nhanvien);
		viewAdmin('nhanvien/update', ['nhanvien' => $nhanvien]);
	}

	public function updatesave()
	{
		// dd($_POST);
		$id_nhanvien = $_POST["txt_id_nhanvien"];
		$hoten = $_POST['txt_hoten'];
		$diachi = $_POST['txt_diachi'];
		$sdt = $_POST['txt_sdt'];
		$tendangnhap = $_POST['txt_tendangnhap'];
		$matkhau = $_POST['txt_matkhau'];
		$phanquyen = $_POST['sl_phanquyen'];

		$check = $this->nhanvienSql->updateNhanVien($id_nhanvien, $hoten, $diachi, $sdt, $tendangnhap, $matkhau, $phanquyen);
		if ($check) {
			setSuccessMessage('Sửa thông tin thành công');
			redirect('nhanvien');		
		} else {
			setErrorMessage('Sửa thông tin thất bại');
			redirect('nhanvien');
		}
	}
}

?>