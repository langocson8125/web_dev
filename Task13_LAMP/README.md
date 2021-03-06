# Báo cáo Task 13 - LAMP

>Người thực hiện: Lã Ngọc Sơn
>
>Cập nhật ngày 11/04/2017
>
>---------------------------------

**Mục lục**

* [1. Cài đặt Apache](#1)
* [2. Cài đặt MySQL](#2)
* [3. Cài PHP](#3)
* [4. Cài PHP modules](#4)
* [5. Cài phpMyAdmin](#5)

>----------------------------

**CHÚ Ý: Để cài đặt LAMP, ta có thể dùng nhiều hệ điều hành linux khác nhau nhưng hôm nay mình sẽ dùng Ubuntu để thực hiện**

<a name="1"></a>
# 1. Cài đặt Apache

Ta cập nhật trước đã, dùng lệnh:

`sudo apt-get update`

Sau đó ta cài apache bằng lệnh sau:

`sudo apt-get install apache2`

Sau đó ta ấn nút "y" rồi ấn Enter để chấp nhận cài đặt.

Để kiểm tra apache đã chạy chưa ta dùng lệnh sau:

`service apache2 status`

![12](http://i.imgur.com/76ZDZXN.png)

Và apache đã chạy thành công

Ta bật trình duyệt và truy cập vào địa chỉ là localhost 

![1](http://i.imgur.com/UKv9zqu.png)
<a name="2"></a>
# 2. Cài đặt MySQL

Ta dùng lệnh sau để cài đặt:

`sudo apt-get install mysql-server`

Sau đó ấn "y" rồi ấn "Enter"

Sau đó một của sổ hiện ra và ta tạo mật khẩu cho MySQL

![2](http://i.imgur.com/5ET7IYE.png)

Điền mật khẩu rồi chọn Ok

![3](http://i.imgur.com/FT4wWwO.png)

Sau đó điện lại mật khẩu

Ta dùng thêm lệnh:

`sudo /usr/bin/mysql_secure_installation`

Sau đó điền mật khẩu của MySQL vừa tạo vào.

Ta thực hiện các tùy chọn xuất hiện trên terminal.
<a name="3"></a>
# 3. Cài PHP

Ta dùng lệnh:

`sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql`

Ấn "y" rồi ấn Enter

Ta chỉnh sửa file cấu hình--> thêm file index.php nếu chưa có

`sudo nano /etc/apache2/mods-enabled/dir.conf`

Sau đó ta restart lại apache server

`sudo systemctl restart apache2`

Để kiểm tra thông tin PHP của bạn thì ta chỉnh sửa file `info.php`

`sudo nano /var/ww/html/info.php` 

Thêm code sau:

```sh
<?php
phpinfo();
?> 
```

Ta truy cập vào http://localhost/info.php để kiểm tra

![11](http://i.imgur.com/UPWS80E.png)

<a name="4"></a>
# 4. Cài PHP modules

Ta dùng lệnh:

`apt-cache search php- | less`

Màn hình sẽ hiện ra danh sách các module

![4](http://i.imgur.com/p8c2JS0.png)

Sau đó ta dùng lệnh sau để cài đặt module 

`sudo apt-get install tên-module`
<a name="5"></a>
# 5. Cài phpMyAdmin

Dùng lệnh sau:

`sudo apt-get install phpmyadmin`

Ấn "y" rồi ấn Enter

![5](http://i.imgur.com/SKhegOb.png)

Sau đó màn hình xuất hiện 1 cửa sổ thì t chọn apache2 rồi dùng nút Tab để di chuyển đến chữ OK rồi ấn Enter.

![6](http://i.imgur.com/LFf99bP.png)

![7](http://i.imgur.com/DgOFq46.png)

phpMyAdmin sẽ yêu cầu xác nhận cài đặt database trước đó.

![8](http://i.imgur.com/3vKQnPb.png)

Điền mật khẩu database vào

![9](http://i.imgur.com/WtrgYcw.png)

Tạo mật khẩu cho phpMyAdmin

![10](http://i.imgur.com/QGbRJ57.png)

Xác nhận lại mật khẩu

Cài đặt xong ta restat lại apache

`service apache2 restart`
