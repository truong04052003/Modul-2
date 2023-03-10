/*

2.1 SELECT * FROM nha_cung_caps;

2.2 SELECT MAHANG, TENHANG, SOLUONG FROM mat_hangs;

2.3 SELECT HO, TEN, NGAYLAMVIEC ,DIACHI FROM nhan_viens;

2.4 SELECT DIACHI, DIENTHOAI FROM nha_cung_caps 
WHERE TENGIAODICH = 'VINAMILK';

2.5 SELECT MAHANG, TENHANG FROM mat_hangs 
WHERE GIAHANG > 100000 AND SOLUONG < 50;

2.6 SELECT * FROM mat_hangs
JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY;

2.7 SELECT * FROM mat_hangs JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY
WHERE TENCONGTY = 'Việt Tiến';

2.8 SELECT TENCONGTY , DIACHI FROM nha_cung_caps 
JOIN mat_hangs ON nha_cung_caps.MACONGTY = mat_hangs.MACONGTY
JOIN loaihangs ON mat_hangs.MALOAIHANG = loaihangs.MALOAIHANG
WHERE TENLOAIHANG = 'thực phẩm';

2.9 SELECT khach_hangs.TENGIAODICH FROM khach_hangs 
JOIN don_dat_hangs ON khach_hangs.MAKHACHHANG = don_dat_hangs.MAKHACHHANG
JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON
JOIN mat_hangs ON chi_tiet_dat_hangs.MAHANG = mat_hangs.MAHANG;

2.10 SELECT TENGIAODICH , NGAYGIAOHANG ,NOIGIAOHANG, HO , TEN FROM don_dat_hangs
JOIN khach_hangs ON don_dat_hangs.MAKHACHHANG = khach_hangs.MAKHACHHANG 
JOIN nhan_viens ON don_dat_hangs.MANHANVIEN = nhan_viens.MANHANVIEN
WHERE SOHOADON = 2;

2.11 SELECT (LUONGCOBAN + PHUCAP) AS LUONG FROM nhan_viens;

2.13 SELECT * FROM khach_hangs 
WHERE khach_hangs.TENGIAODICH = nha_cung_caps.TENGIAODICH; sai

2.15 SELECT * FROM don_dat_hangs 
JOIN khach_hangs ON  don_dat_hangs.MAKHACHHANG = khach_hangs.MAKHACHHANG 
WHERE NOIGIAOHANG = khach_hangs.DIACHI;

2.17 SELECT mat_hangs.* FROM `mat_hangs`
LEFT JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG
WHERE chi_tiet_dat_hangs.SOHOADON IS null;

2.18 SELECT * FROM nhan_viens 
LEFT JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MAKHACHHANG
WHERE don_dat_hangs.SOHOADON IS null;

2.19 SELECT * FROM nhan_viens WHERE LUONGCOBAN = (SELECT MAX(LUONGCOBAN) FROM nhan_viens);








*/