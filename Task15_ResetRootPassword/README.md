# Báo cáo Task 15 -  Reset Pasword Root MySql

>Người thực hiện: Lã Ngọc Sơn
>
>Cập nhật ngày: 15/04/2017
>
>------------------

Gỉa sử trường hợp bạn mất trí nhớ, bạn không thể nhớ được cái password roor của Mysql và bạn cần Reset lại nó.

Sau đây là các bước để reset một password:

**Bước 1: Dừng MySql Service**

Ta dùng lệnh:

`/etc/init.d/mysql stop`

**Bước 2: Khởi động MySql mà không cần password**

Ta dùng lệnh:

`sudo /usr/sbin/mysqld --skip-grant-tables --skip-networking &`

Nếu màn hình ternmal hiện ra dòng chữ sau:

![3](http://i.imgur.com/GupqdMR.png)

Thì có thể là đường dẫn này chưa được tạo trong lúc cài đặt nên ta tự lại đường dẫn này và restart lại service.

Ta dùng lệnh:

```sh
mkdir -p /var/run/mysqld
chown mysql:mysql /var/run/mysqld
```

Ta dùng lệnh `service mysql để restart.

Sau đó ta dùng lại lệnh `sudo /usr/sbin/mysqld --skip-grant-tables --skip-networking &` để khởi động Mysql mà không cần password

**Bước 3: Bắt đầu câu lệnh truy vấn MySql để reset password**

Bảng câu lệnh truy vấn của MySql xuất hiện, ta thực hiện theo thứ tự sau:

`use mysql;`

`show tables;`

![](http://i.imgur.com/SAQYH8m.png)

Ta thấy có table tên `user`, mở table đó lên:

`descibe user;`

![](http://i.imgur.com/R68orQd.png)

Ở đây password được đặt trong `authentication_string`
`update user set authotication_string=password('12345') where user='root';`

Trong đó `12345` là mật khẩu mới cần đặt lại.

`flush privileges;`

`quit`

**Bước 4: Tắt và bật lại MySql**

```sh
/etc/init.d/mysql stop
...
/etc/init.d/mysql start
```

Vậy là ta đã reset password root thành công.

**Bước 5: Đăng nhập vào MySQL bằng mật khẩu mới**

`mysql -u root -p`

Nhập mật khẩu là 12345

Vậy là ta đã reset password root thành công.
