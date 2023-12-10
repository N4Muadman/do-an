TYPE=VIEW
query=select `book_movie_tickets`.`phong`.`Id` AS `Id`,`book_movie_tickets`.`phong`.`ChiNhanhId` AS `ChiNhanhId`,`book_movie_tickets`.`phong`.`Ten` AS `Ten`,`book_movie_tickets`.`phong`.`Mota` AS `Mota`,`book_movie_tickets`.`phong`.`created_at` AS `created_at`,`book_movie_tickets`.`phong`.`updated_at` AS `updated_at`,`book_movie_tickets`.`chinhanh`.`Ten` AS `tenChinhanh` from (`book_movie_tickets`.`phong` join `book_movie_tickets`.`chinhanh` on(`book_movie_tickets`.`chinhanh`.`Id` = `book_movie_tickets`.`phong`.`ChiNhanhId`))
md5=90ec90a1af1a64913e0c93fb76734ab2
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001701351089847434
create-version=2
source=SELECT phong.*, chinhanh.Ten AS tenChinhanh\n    FROM phong \n    INNER JOIN chinhanh on chinhanh.Id = phong.ChiNhanhId
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `book_movie_tickets`.`phong`.`Id` AS `Id`,`book_movie_tickets`.`phong`.`ChiNhanhId` AS `ChiNhanhId`,`book_movie_tickets`.`phong`.`Ten` AS `Ten`,`book_movie_tickets`.`phong`.`Mota` AS `Mota`,`book_movie_tickets`.`phong`.`created_at` AS `created_at`,`book_movie_tickets`.`phong`.`updated_at` AS `updated_at`,`book_movie_tickets`.`chinhanh`.`Ten` AS `tenChinhanh` from (`book_movie_tickets`.`phong` join `book_movie_tickets`.`chinhanh` on(`book_movie_tickets`.`chinhanh`.`Id` = `book_movie_tickets`.`phong`.`ChiNhanhId`))
mariadb-version=100427
