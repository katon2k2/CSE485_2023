--a)
SELECT * FROM baiviet, theloai WHERE baiviet.ma_tloai = theloai.ma_tloai AND theloai.ten_tloai = "Nhạc trữ tình";

--b)
SELECT * FROM baiviet, tacgia WHERE baiviet.ma_tgia=tacgia.ma_tgia AND tacgia.ten_tgia="Nhacvietplus";

--c)
SELECT theloai.ten_tloai FROM theloai WHERE theloai.ma_tloai NOT IN (SELECT baiviet.ma_tloai FROM baiviet GROUP BY baiviet.ma_tloai);

--d)
select baiviet.ma_bviet,baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet
INNER JOIN tacgia on tacgia.ma_tgia = baiviet.ma_tgia 
INNER JOIN theloai on theloai.ma_tloai = baiviet.ma_tloai;

--f)
SELECT tacgia.ma_tgia,tacgia.ten_tgia from baiviet,tacgia
WHERE tacgia.ma_tgia = baiviet.ma_tgia 
GROUP BY baiviet.ma_tgia
ORDER BY COUNT(baiviet.ma_tgia) DESC LIMIT 2;

--g)
SELECT * FROM baiviet WHERE baiviet.ten_bhat LIKE "%yêu%" OR baiviet.ten_bhat LIKE "%thương%" OR baiviet.ten_bhat LIKE "%anh%" OR baiviet.ten_bhat LIKE "%em%";

--h)
SELECT * FROM baiviet WHERE baiviet.tieude LIKE "%yêu%" OR baiviet.tieude LIKE "%thương%" OR baiviet.tieude LIKE "%anh%" OR baiviet.tieude LIKE "%em%";

--l)
CREATE TABLE `user` (
  `ma_ngdung` int(10) UNSIGNED NOT NULL,
  `ten_dnhap` varchar(30) NOT NULL,
  `mat_khau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user` (`ma_ngdung`, `ten_dnhap`, `mat_khau`) VALUES
(1, 'admin', 'admin'),
(2, 'dothientai', '1'),
(3, 'buiducthang', '1');

ALTER TABLE `user`
  ADD PRIMARY KEY (`ma_ngdung`);