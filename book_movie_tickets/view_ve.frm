TYPE=VIEW
query=select `book_movie_tickets`.`ve`.`Id` AS `veId`,`book_movie_tickets`.`ve`.`KhachHangId` AS `KhachHangId`,`book_movie_tickets`.`ve`.`LichChieuId` AS `LichChieuId`,`book_movie_tickets`.`ve`.`MaQR` AS `MaQR`,`book_movie_tickets`.`ve`.`MoTa` AS `MoTa`,`book_movie_tickets`.`ve`.`ThoiGiaDat` AS `ThoiGiaDat`,`book_movie_tickets`.`ve`.`total` AS `total`,`book_movie_tickets`.`ve`.`created_at` AS `created_at`,`book_movie_tickets`.`ve`.`updated_at` AS `updated_at`,`cv`.`gheId` AS `gheId`,`book_movie_tickets`.`ghe`.`Ten` AS `tenGhe`,`book_movie_tickets`.`ghe`.`Hang` AS `hangGhe`,`p`.`Ten` AS `tenPhim`,`p`.`img` AS `imgPhim`,`p`.`QuocGia` AS `quocGia`,`lc`.`Ngay` AS `ngayChieu`,`lc`.`GioBatDau` AS `GioBatDau`,`ph`.`Ten` AS `tenPhong`,`cn`.`Ten` AS `tenChinhanh` from ((((((`book_movie_tickets`.`chitietve` `cv` join `book_movie_tickets`.`ve` on(`book_movie_tickets`.`ve`.`Id` = `cv`.`veId`)) join `book_movie_tickets`.`ghe` on(`book_movie_tickets`.`ghe`.`Id` = `cv`.`gheId`)) join `book_movie_tickets`.`lichchieu` `lc` on(`lc`.`Id` = `book_movie_tickets`.`ve`.`LichChieuId`)) join `book_movie_tickets`.`phim` `p` on(`p`.`Id` = `lc`.`PhimId`)) join `book_movie_tickets`.`phong` `ph` on(`ph`.`Id` = `lc`.`PhongId`)) join `book_movie_tickets`.`chinhanh` `cn` on(`cn`.`Id` = `ph`.`ChiNhanhId`))
md5=6fb0653aaa831498dd1690a2acc3c8ff
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=0001701629597080155
create-version=2
source=SELECT
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `book_movie_tickets`.`ve`.`Id` AS `veId`,`book_movie_tickets`.`ve`.`KhachHangId` AS `KhachHangId`,`book_movie_tickets`.`ve`.`LichChieuId` AS `LichChieuId`,`book_movie_tickets`.`ve`.`MaQR` AS `MaQR`,`book_movie_tickets`.`ve`.`MoTa` AS `MoTa`,`book_movie_tickets`.`ve`.`ThoiGiaDat` AS `ThoiGiaDat`,`book_movie_tickets`.`ve`.`total` AS `total`,`book_movie_tickets`.`ve`.`created_at` AS `created_at`,`book_movie_tickets`.`ve`.`updated_at` AS `updated_at`,`cv`.`gheId` AS `gheId`,`book_movie_tickets`.`ghe`.`Ten` AS `tenGhe`,`book_movie_tickets`.`ghe`.`Hang` AS `hangGhe`,`p`.`Ten` AS `tenPhim`,`p`.`img` AS `imgPhim`,`p`.`QuocGia` AS `quocGia`,`lc`.`Ngay` AS `ngayChieu`,`lc`.`GioBatDau` AS `GioBatDau`,`ph`.`Ten` AS `tenPhong`,`cn`.`Ten` AS `tenChinhanh` from ((((((`book_movie_tickets`.`chitietve` `cv` join `book_movie_tickets`.`ve` on(`book_movie_tickets`.`ve`.`Id` = `cv`.`veId`)) join `book_movie_tickets`.`ghe` on(`book_movie_tickets`.`ghe`.`Id` = `cv`.`gheId`)) join `book_movie_tickets`.`lichchieu` `lc` on(`lc`.`Id` = `book_movie_tickets`.`ve`.`LichChieuId`)) join `book_movie_tickets`.`phim` `p` on(`p`.`Id` = `lc`.`PhimId`)) join `book_movie_tickets`.`phong` `ph` on(`ph`.`Id` = `lc`.`PhongId`)) join `book_movie_tickets`.`chinhanh` `cn` on(`cn`.`Id` = `ph`.`ChiNhanhId`))
mariadb-version=100427