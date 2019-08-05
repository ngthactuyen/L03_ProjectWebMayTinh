function validate() {
	var tenhangsx = document.formHangSX.txt_tenhangsx.value;
	if (tenhangsx == '') {
		alert('Tên hãng không được để trống!');
		return false;
	}
}