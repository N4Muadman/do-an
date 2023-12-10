TYPE=VIEW
query=select `lc`.`Id` AS `Id`,`lc`.`PhimId` AS `PhimId`,`lc`.`PhongId` AS `PhongId`,`lc`.`Gia` AS `Gia`,`lc`.`Mota` AS `Mota`,`lc`.`Ngay` AS `Ngay`,`lc`.`GioBatDau` AS `GioBatDau`,`lc`.`TrangThai` AS `TrangThai`,`lc`.`created_at` AS `created_at`,`lc`.`updated_at` AS `updated_at`,`p`.`Ten` AS `tenPhim`,`p`.`img` AS `imgPhim`,`p`.`ThoiLuongChieu` AS `ThoiLuongChieu`,`p`.`QuocGia` AS `QuocGia`,`ph`.`Ten` AS `tenPhong`,`cn`.`Id` AS `chinhanhId`,`cn`.`Ten` AS `tenChinhanh`,`kv`.`Ten` AS `tenKhuvuc` from ((((`book_movie_tickets`.`lichchieu` `lc` join `book_movie_tickets`.`phim` `p` on(`p`.`Id` = `lc`.`PhimId`)) join `book_movie_tickets`.`phong` `ph` on(`ph`.`Id` = `lc`.`PhongId`)) join `book_movie_tickets`.`chinhanh` `cn` on(`cn`.`Id` = `ph`.`ChiNhanhId`)) join `book_movie_tickets`.`khuvuc` `kv` on(`kv`.`Id` = `cn`.`KhuVucId`))
md5=0d4abc5f548da2609f4f644cc56ce12d
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001701350469410325
create-version=2
source=SELECT\n        lc.*,\n        p.Ten AS tenPhim,\n        p.img AS imgPhim,\n        p.ThoiLuongChieu,\n        p.QuocGia,\n        ph.Ten AS tenPhong,\n        cn.Id AS chinhanhId,\n        cn.Ten AS tenChinhanh,\n        kv.Ten AS tenKhuvuc\n    FROM lichchieu AS lc\n    INNER JOIN phim AS p ON p.Id = lc.PhimId\n    INNER JOIN phong AS ph ON ph.Id = lc.PhongId\n    INNER JOIN chinhanh AS cn ON cn.Id = ph.ChiNhanhId\n    INNER JOIN khuvuc AS kv ON kv.Id = cn.KhuVucId
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `lc`.`Id` AS `Id`,`lc`.`PhimId` AS `PhimId`,`lc`.`PhongId` AS `PhongId`,`lc`.`Gia` AS `Gia`,`lc`.`Mota` AS `Mota`,`lc`.`Ngay` AS `Ngay`,`lc`.`GioBatDau` AS `GioBatDau`,`lc`.`TrangThai` AS `TrangThai`,`lc`.`created_at` AS `created_at`,`lc`.`updated_at` AS `updated_at`,`p`.`Ten` AS `tenPhim`,`p`.`img` AS `imgPhim`,`p`.`ThoiLuongChieu` AS `ThoiLuongChieu`,`p`.`QuocGia` AS `QuocGia`,`ph`.`Ten` AS `tenPhong`,`cn`.`Id` AS `chinhanhId`,`cn`.`Ten` AS `tenChinhanh`,`kv`.`Ten` AS `tenKhuvuc` from ((((`book_movie_tickets`.`lichchieu` `lc` join `book_movie_tickets`.`phim` `p` on(`p`.`Id` = `lc`.`PhimId`)) join `book_movie_tickets`.`phong` `ph` on(`ph`.`Id` = `lc`.`PhongId`)) join `book_movie_tickets`.`chinhanh` `cn` on(`cn`.`Id` = `ph`.`ChiNhanhId`)) join `book_movie_tickets`.`khuvuc` `kv` on(`kv`.`Id` = `cn`.`KhuVucId`))
mariadb-version=100427
