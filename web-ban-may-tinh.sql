create database L03_ProjectWebMAYTINH CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

use L03_ProjectWebMAYTINH;

create table tbl_nhanvien(
	id_nhanvien int primary key auto_increment,
	hoten varchar(100),
    diachi varchar(100),
    sdt varchar(20),
	tendangnhap varchar(100),
	matkhau varchar(100),
	phanquyen int,

	ngaytao datetime DEFAULT CURRENT_TIMESTAMP,
	constraint uq_tendangnhap unique (tendangnhap)
);

create table tbl_hangsx(
	id_hangsx int auto_increment primary key,
	loaisp int,

	tenhangsx varchar(100),
	anh_hangsx varchar(100)
);

create table tbl_laptop(
	id_laptop varchar(100) primary key,
	hangsx_id int,
	ten_laptop varchar(100),
	gia_laptop float,
	manhinh float,
	cpu varchar(100),
	ram int,
	vga varchar(100),
	hdd int,
	ssd int,
	hdh varchar(100),
	khoiluong float,
	pin int,
	url_laptop varchar(100),
	anh_laptop varchar(100),
	nhucau int,
	
	soluong int,
	constraint uq_url_laptop unique(url_laptop),
	constraint fk_laptop_hangsx foreign key (hangsx_id) references tbl_hangsx(id_hangsx)
);

create table tbl_camera(
	id_camera varchar(100) primary key,
	hangsx_id int,
	ten_camera varchar(100),
	gia_camera float,
	dophangiai float,
	ongkinh float,
	gocquansat int,
	url_camera varchar(100),
	anh_camera varchar(100),
	loai_camera int,
	
	mota longtext,
	soluong int,
	constraint uq_url_camera unique(url_camera),
	constraint fk_camera_hangsx foreign key (hangsx_id) references tbl_hangsx(id_hangsx)
);

create table tbl_hoadon(
	id_hoadon int auto_increment primary key,
	tenkh varchar(100),
	sdt varchar(20),
	email varchar(100),
	diachi varchar(100),
	trangthaihoadon int,
	
	tongtien float,
	nhanvien_id int,
	ngaytao datetime DEFAULT CURRENT_TIMESTAMP,
	constraint fk_hoadon_nhanvien foreign key (nhanvien_id) references tbl_nhanvien(id_nhanvien)
);

create table tbl_chitiethd(
	id_chitiethd int auto_increment primary key,
	hoadon_id int,
	loaisp int,
	
	sanpham_id varchar(100),	
	soluong int,
	constraint fk_chitiethd_hoadon foreign key (hoadon_id) references tbl_hoadon(id_hoadon)
);

 create table tbl_nhaphang(
 	id_nhaphang int auto_increment primary key,
 	tongtien float,
 	nhanvien_id int,
 	ngaytao datetime DEFAULT CURRENT_TIMESTAMP,
 	constraint fk_nhaphang_nhanvien foreign key (nhanvien_id) references tbl_nhanvien (id_nhanvien)
);

create table tbl_nhaphangchitiet(
	id_nhaphangchitiet int auto_increment primary key,
	nhaphang_id int,
	loaisp int,
	
	sanpham_id varchar(100),
	soluong int,
	constraint fk_nhaphangchitiet_nhaphang foreign key (nhaphang_id) references tbl_nhaphang (id_nhaphang)
);

 