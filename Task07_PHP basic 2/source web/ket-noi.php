<?php
    $ketnoi['host'] = 'mysql.hostinger.vn'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $ketnoi['dbname'] = 'member'; //Đây là tên của Database
    $ketnoi['username'] = 'u739990072_dtb'; //Tên sử dụng Database
    $ketnoi['password'] = 'khongbet98';//Mật khẩu của tên sử dụng Database
    @mysql_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}")
    or
        die("Không thể kết nối database");
    @mysql_select_db(
        "{$ketnoi['dbname']}") 
    or
        die("Không thể chọn database");
?>