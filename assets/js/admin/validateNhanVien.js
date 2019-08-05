function validate() {
	var hoten = document.formNhanVien.txt_hoten.value;
	var tendangnhap = document.formNhanVien.txt_tendangnhap.value;
	var matkhau = document.formNhanVien.txt_matkhau.value;
	if (hoten == '' || tendangnhap == '' || matkhau == '') {
		alert('Họ tên, tên đăng nhập, mật khẩu không được để trống!');
		return false;
	}
}