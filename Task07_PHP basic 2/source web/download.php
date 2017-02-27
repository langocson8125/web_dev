<?php 
 
// Đường dẫn đến file download
define('PATHDOWNLOAD', 'publc_html/resource/');

// Lấy tên file cần download
$file = isset($_GET['file']) ? $_GET['file'] : false;
 
// kiểm tra file tồn tại hay không, nếu không thì báo khong tìm thấy file
if (!$file || !file_exists(PATHDOWNLOAD.$file) || is_dir($file) ){
    echo 'File Not Found';
    die;
}
 
// Sau khi mọi thứ ok thì cho phép download
// Hàm header này dùng để khai báo tham số file
// và đọc, trả về cho client, bạn copy và chạy thôi nhé
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename(PATHDOWNLOAD.$file).'"');
header('Content-Length: ' . filesize(PATHDOWNLOAD.$file));
readfile(PATHDOWNLOAD.$file);
 
 
?>