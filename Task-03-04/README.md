# Báo cáo Task [03-04]
>Nguồn tham khảo: [ThachPham-Share The Best](https://thachpham.com/) và [W3SCHOOL](http://www.w3schools.com/)

>Người thực hiện: Lã Ngọc Sơn

>Cập nhật lần cuối:21/01/2017
>------------------------

Mục lục
>### [I.Khái quát về HTML](#I)
>[1.HTML là gì?](#I.1)

>[2.HTML đóng vai trò gì trong website?](#I.2)

>### [II.Định dạng văn bản](#II)
>
>### [III.Khai báo thông tin web cơ bản](#III)
>
>### [IV.Tạo danh sách (list)](#IV)
>[1.Kiểu Ordered List](#IV.1)

>[2.Kiểu Unordered List](#IV.2)

>[3.Kiểu Description List](#IV.3)

>[4.Danh sách xếp chồng danh sách](#IV.4)
>
>### [V.Thẻ tạo liên kết và liên kết neo](#V)
>[1.Thẻ tạo liên kết](#V.1)
>[2.Liên kết neo](#V.2)
>
>### [VI.Chèn tập tin kỹ thuật số](#VI)
>[1.Chèn ảnh](#VI.1)

>[2.Chèn video](#VI.2)

>[3.Chèn âm thanh](#VI.3)

>[4.Nhúng tài liệu HTML vào web](#VI.4)
>
>### [VII.Tạo form nhập liệu](#VII)
>
>### [VIII.Tổng kết](#VIII)
>------------

<a id="I"></a>
# I.Khái quát về HTMl<a id="I.1"></a>
## 1.HTML là gì?
**HTML** là chữ viết tắt của cụm từ **H**yper **T**ext **M**arkup **L**anguage, được sử dụng để tạo một trang web, trên một website có thể sẽ chứa nhiều trang và mỗi trang được quy ra là một tài liệu **HTML** (thi thoảng mình sẽ ghi là một tập tin **HTML**).

![](http://i.imgur.com/zph8Sv0.jpg)

Một tài liệu **HTML** được hình thành bởi các phần tử **HTML** (**HTML Elements**) được quy định bằng các cặp thẻ (tag), các cặp thẻ này được bao bọc bởi một dấu ngoặc ngọn (ví dụ `<html>`) và thường là sẽ được khai báo thành một cặp, bao gồm thẻ mở và thẻ đóng (ví `<strong>` dụ `</strong>` và ). Các văn bản muốn được đánh dấu bằng **HTML** sẽ được khai báo bên trong cặp thẻ (ví dụ `<strong>`Đây là chữ in đậm`</strong>`). Nhưng một số thẻ đặc biệt lại không có thẻ đóng và dữ liệu được khai báo sẽ nằm trong các thuộc tính (ví dụ như thẻ `<img>`). 

![](http://i.imgur.com/1Hr7G4A.png)
<a id="I.2"></a>
## 2.HTML đóng vai trò gì trong website?

**HTML** là một ngôn ngữ đánh dấu siêu văn bản nên nó sẽ có vai trò xây dựng cấu trúc siêu văn bản trên một website, hoặc khai báo các tập tin kỹ thuật số (media) như hình ảnh, video, nhạc.

![](http://i.imgur.com/25qnFrw.png)

Điều đó không có nghĩa là chỉ sử dụng **HTML** để tạo ra một website mà **HTML** chỉ đóng một vai trò hình thành trên website. Ví dụ một website như Thachpham.com sẽ được hình thành bởi:

* **HTML** – Xây dựng cấu trúc và định dạng các siêu văn bản.
* **CSS** – Định dạng các siêu văn bản dạng thô tạo ra từ HTML thành một bố cục website, có màu sắc, ảnh nền,….
* **Javascript** – Tạo ra các sự kiện tương tác với hành vi của người dùng (ví dụ nhấp vào ảnh trên nó sẽ có hiệu ứng phóng to).
* **PHP** – Ngôn ngữ lập trình để xử lý và trao đổi dữ liệu giữa máy chủ đến trình duyệt (ví dụ như các bài viết sẽ được lưu trong máy chủ).
* **MySQL** – Hệ quản trị cơ sở dữ liệu truy vấn có cấu trúc (SQL – ví dụ như các bài viết sẽ được lưu lại với dạng dữ liệu SQL).
 
## Recommended: Ta sử dụng phần mềm Sublime Text 3 để viết code HTML
<a id="II"></a>
# II.Định dạng văn bản

* Thẻ khai báo tên tiêu đề `<hn> </hn>` với n nằm trong khoảng từ 1 đến 6, đồng thời kích thước của có kí tự giảm dần
* Thẻ đoạn văn `<p> </p>`
* Thẻ in đậm `<strong> </strong>`, in nghiêng `<i></i>`, gạch dưới `<u></u>`
* Highlight `<mark> </mark>`
* Gạch ngang chữ viết: `<strike>`
* Nhấn mạnh: `<em></em>`
* Kẻ ngang tài liệu: `<hr>`
* Thẻ trích dẫn `<quote> </quote>`
* Màu chữ: `<tên thẻ style="color: giá trị(red,blue,green,...)">`
* Màu nền: `<tên thẻ style="background-color: : giá trị(red,blue,green,...)">`
* Kích thức chữ `<tên thẻ style="font-size: giá trị(px,%,pt)">`
* Font chữ: `<tên thẻ style="font-family: giá trị(Arial,Helvetica)">`
* Căn lề văn bản: `<tên thẻ style="text-align: giá trị(center,right,left)>"`
* Nếu muốn kết hợp nhiều kiểu thì t dùng thêm thẻ `<span>Text</span>` 

Ví dụ thẻ `<span>`: `<span style="color: white; background-color: red">Text</span>`

**Ví dụ**

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8" />
<title>Lã Ngọc Sơn học html</title>
</head>
<body style="text-align: center;">
    <h1 style="color: blue">Học viện Kỹ thuật Mật mã bế giảng khóa 1 đào tạo <u>Thạc sĩ An toàn thông tin </u></h1>
    <h2>Nhân dịp này, <em>Học viện Kỹ thuật Mật mã</em> đã tổng kết đág tin sau 3 năm đào tạo thí điểm.</h2>
    <h4 style="font-family: Arial">Ngày 26-12, Học viện Kỹ toàn thông tin và tổng kết 3 năm đào tạo thí điểm thạc sĩ an toàn thông tin (2013-2016).</h4>
    <p><i>Học viện Kỹ thuật Mật mã</i> là một trong 8 trường đại họđộ thạc sĩ an toàn thông tin.</p> 
    <hr>
    <p> <span style="color: white; background-color: red">
        Trong 2 năm (từ tháng 10-2014 đến tháng 10-2016) học viện đào tạo <strong style="color: blue; background-color: grey">thạc sĩ an toàn thông tin</strong> khóa 1 đã hoàn thành .
    </span>
    </p>
    <p><mark>Các học phần giúp cho học viên củng cố khối kiến thức chun tại các cơ quan, đơn vị.</mark></p> 
    <quote>
    <p>Cơ quan chủ quản: Học viện Kỹ thuật Mật mã
Giám đốc Học viện: TS. Nguyễn Nam Hải
Địa chỉ: 141 đường Chiến Thắng, Tân Triều, Thanh Trì, Hà Nội</p>
    <cite><mark>Lã Ngọc Sơn</mark></cite>
</quote>
</body>
</html>
```
Kết quả:

[Hiển thị ngoài trình duyệt](http://i.imgur.com/oOqA4Ki.png)
<a id="III"></a>
# III.Khai báo thông tin web cơ bản

* Khai báo tên tài liệu `<title> </title>`
* Khai báo dữ liệu vĩ mô `<meta>` Chú ý: thẻ meta không có thẻ đóng. Ví dụ: `<meta charset="utf-8" />`
* Thuộc tính `name` và `content` <ul>Trong đó<li>`author` khai báo tên tác giả</li>
<li>`description` khai báo mô tả của tài liệu</li>
<li>`keyword` khai báo từ khóa của tài liệu</li></ul> 

**Ví dụ**

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8" />
<title>Lã Ngọc Sơn học html</title>
<meta name="author" content="Lã Ngọc Sơn"/>
<meta name="description" content="Lần đầu làm chuyện ấy" />
<meta name="keyword" content="html,langocson,deptrai"/>
</head>
<body>
<p>Nội dung khai báo sẽ không hiển thị trên trình duyệt</p>
</body>
</html>
```

![Hiển thị ngoài trình duyệt](http://i.imgur.com/BfhPQAz.png)
<a id="IV"></a>
# IV.Tạo danh sách (list)

Có 3 kiểu danh sách: Ordered List, Unordered List và Description List 

<a id="IV.1"></a>
### 1.Kiểu Ordered List

```sh
<ol>
<li>Item1</li>
<li>Item2</li>
<li>Item3</li>
</ol>
```

Ta cũng có thể thêm thuộc tính `type="giá trị"` vào trong thẻ `<ol>`

**Ví dụ**

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thẻ danh sách html</title>
</head>
<body>
<p><strong>Danh sách các bạn tham gia tư vấn tuyển sinh 2017</strong></p>
<ol type="1">
    <li>Lã Ngọc Sơn</li>
    <li>Phạm Phú Qúi</li>
    <li>Hỏa Ngọc Lê Hùng</li>
    <li>Nguyễn Văn Hiệp</li>
</ol>
<p> <u>Danh sách kiểu liệt kê bằng kí tự</u></p>
<ol type="I">
    <li>Mai Thy</li>
    <li>Huyền Trang</li>
    <li>Ngọc Trang</li>
    <li>Thanh Trang</li>
</ol>
<p><i>Một vài loài vật nuôi</i></p>
<ol type="a">
    <li>Chó</li>
    <li>Mèo</li>
    <li>Chuột</li>
</ol>
</body>
</html>
```

![Hiển thị ngoài trình duyệt](http://i.imgur.com/KNvo2mK.png)

<a id="IV.2"></a>
### 2.Kiểu Unordered List

```sh
<ul>
    <li>Item1</li>
    <li>Item2</li>
    <li>Item3</li>
</ul>
```

Ta cũng có thể thêm thuộc tính `style="list-style-type: "giá trị"` vào trong thẻ `<ul>`

**Ví dụ**

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thẻ danh sách html</title>
</head>
<body>
<p><mark>Một vài hãng điện thoại</mark></p>
<ul style="list-style-type: circle;">
    <li>Sony</li>
    <li>SamSung</li>
    <li>Apple</li>
    <li>Nokia</li>
</ul>
<p style="color: red">Một vài loại trái cây phổ biến</p>
<ul style="list-style-type: disc;">
    <li>Ổi</li>
    <li>Dưa hấu</li>
    <li>Táo</li>
    <li>Mít</li>
</ul>
</body>
</html>
```

![Hiển thị ngoài trình duyệt](http://i.imgur.com/xNHz37U.png)
<a id="IV.3"></a>
### 3.Kiểu Description List

Bắt đầu danh sách bằng cặp thẻ <dl> </dl>, trong đó tên mỗi mục con sẽ được khai báo bằng cặp thẻ <dt> </dt> và mô tả cho mục con sẽ được khai báo bằng cặp thẻ <dd> </dd>.

**Ví dụ**
```sh
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thẻ danh sách html</title>
</head>
<body>
<p>Một website bao gồm</p>
<dl>HTML</dl>
<dd>Khung xương của website</dd>
<dl>CSS</dl>
<dd>Bộ da của website</dd>
<dl>Javascript</dl>
<dd>Bộ cánh của website</dd>
<dl>Ngôn ngữ server-side < ASP.NET, PHP, RUBY... ></dl>
<dd>Linh hồn của website</dd>
</body>
</html>
```

[Hiển thị ngoài trình duyệt](http://i.imgur.com/TuvgmhV.png)
<a id="IV.4"></a>
### 4.Danh sách xếp chồng danh sách

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thẻ danh sách html</title>
</head>
<body>
<p>Xếp chồng danh sách</p>
<ul style="list-style-type: disc;">
    <li>WordPress
    <ul style="list-style-type: circle;">
        <li>WordPress Themes</li>
        <li>WordPress Plugin</li>
    </ul>
    </li>
    <li>Front-end
    <ul style="list-style-type: square;">
        <li>HTML</li>
        <li>CSS</li>
        <li>Javascript (jQuery, AngularJS,...)</li>
    </ul></li>
</ul>
</body>
</html>
```

![Hiển thị ngoài trình duyệt](http://i.imgur.com/P5GaHnS.png)

<a id="V"></a>
# V.Thẻ tạo liên kết và liên kết neo<a id="V.1"></a>
### 1.Thẻ tạo liên kết

<a href="link" title="Tên" target="giá trị">đoạn văn cần gán liên kết</a>

Trong đó:
* `href`: Địa chỉ của tài liệu muốn liên kết đến, đây có thể là một đường dẫn thư mục hoặc địa chỉ website. Nếu bạn muốn truy cập một tài liệu trên cùng một cấp thư mục thì chỉ cần ghi `tên-tập-tin.định dạng` (ví dụ: `gioi-thieu.html`).
* `title`: Tiêu đề của liên kết, tiêu đề sẽ hiển thị như một thông tin thêm khi rê chuột vào liên kết.
* `target`: Xác định nơi mở tài liệu, nó có các giá trị như `_blank` (mở tài liệu trên cửa sổ mới), `_self` (mở tài liệu trên cửa sổ hiện tại, nếu bạn không khai báo thuộc tính target thì nó sẽ sử dụng giá trị này làm mặc định),  `_top` (mở tài liệu trong nội dung trang hiện tại), `_parent` (mở tài liệu trên khung trình duyệt mẹ của nó).

**Ví dụ**

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8">
    <title>Thẻ liên kết</title>
</head>
<body>
    <h1>Thứ sáu ngày 13 có người trúng số hơn 17 tỉ đồng</h1>
    <h3>Tối 13.1, sau kỳ quay thưởng lần thứ 77 Công ty xổ số điện toán Việt Nam (Vietlott) vừa cho ra kết quả trúng thưởng giải Jackpot với số tiền hơn 17 tỉ đồng.</h3>
    <p>Theo đó, kết quả cập nhật trên website của Vietlott vào chiều tối nay đã cho ra bộ số 12 – 24 – 29 – 32 – 37 – 39 với số tiền cộng dồn lên đến 17.491.608.500 đồng.</p>
    <p>Tin liên quan:_blank</p>
    <a href="http://thanhnien.vn/doi-song/ve-so-trung-71-ti-dong-duoc-ban-o-quan-5-tphcm-764947.html" title="Trúng 71 tỉ" target="_blank">Vé số trúng 71 tỉ đồng được bán ở quận 5 TP.HCM</a>
</body>
</html>
```

![Hiển thị ngoài trình duyệt](http://i.imgur.com/ALwB0Pd.png)

### 2.Liên kết neo<a id="V.2"></a>

* Khu vực được neo, được khai báo bằng thẻ bất kỳ với thuộc tính id (ví dụ: `<p id="ten-neo"> </p>`).
* Liên kết neo, được khai báo bằng thẻ `<a>` nhưng có thuộc tính là href nhưng giá trị là có dấu `#` và tên id của khu vực cần truy cập đến (ví dụ: `<a href="#ten-neo">Văn bản</a>`).

<a id="VI"></a>
# VI.Chèn tập tin kỹ thuật số <a id="VI.1"></a>

### 1.Chèn ảnh

`<img src="Đường dẫn đến tập tin hình ảnh" title="Tiêu đề của hình ảnh" alt="Tên định danh của hình ảnh" />`

<a id="VI.2"></a>
### 2.Chèn video

```sh
<video width="chiều rộng" height="chiều cao" controls>
  <source src="Đường dẫn tới tập tin video" type="video/mp4">
</video>
```

Thuộc tính `controls` để hiện ta thanh điều khiển video

Nên dụng định dạng video là mp4 đề mọi trình duyệt có thể hỗ trợ

<a id="VI.3"></a>
### 3.Chèn âm thanh

```sh
<audio controls>
  <source src="Đường dẫn đến tập tin âm thanh" type="audio/mp3">
</audio>
```

<a id="VI.4"></a>
### 4.Nhúng tài liệu HTML vào web

`<iframe src="link" width="chiều rộng" height="chiều cao" scrolling="auto"></iframe>`

Ngoài ra, có một cách nữa để chèn một liên kết và ép nó mở bằng frame trên website đó là sử dụng thuộc tính name trong thẻ `<iframe>` và thuộc tính target trong thẻ `<a>`, xem ví dụ:

```sh
<p><a target="new-tab" href="link abc">Truy cập</a></p>
<iframe src="link xyz" name="new-tab" width="chiều rộng" height="chiều cao"></iframe>
```

<a id="VII"></a>
# VII.Tạo form nhập liệu

Ở HTML, để tạo form chúng ta sẽ sử dụng cặp thẻ `<form> </form>`, thẻ này sẽ chứa một vài thuộc tính quan trọng và nội dung bên trong cặp thẻ đó là các thẻ `<input>` để khai báo các trường nhập liệu. Trước hết hãy xem qua mẫu một cái form đăng nhập bằng HTML dưới đây.

**Ví dụ**

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
</head>
<body>
<form action="#" method="post" name="dangnhap">
    Username <input type="text" name="username" placeholder="Username"> <br/>
    Password <input type="password" name="password" placeholder="Password"> <br/>
    Save Password <input type="checkbox" name="checkbox"> <br/>
    <input type="submit" name="login" value="Log In">

</body>
</html>
```

![Hiển thị ngoài trình duyệt](http://i.imgur.com/4ltofTl.png)

Các thuộc tính tring thẻ `<form>`

* `action`: Đường dẫn đến một trang xử lý dữ liệu sau khi người dùng ấn nút gửi dữ liệu
* `method`: Phương thức gửi dữ liệu
* `name`: Tên của form

Các thuộc tính thẻ `<input>`

* `button`
* `checkbox`
* `color`
* `date`
* `datetime`
* `datetime-local`
* `email`
* `file`
* `hidden`
* `image`
* `month`
* `number`
* `password`
* `radio`
* `range`
* `reset`
* `search`
* `submit`
* `tel`
* `text`
* `time`
* `url`
* `week`

<a id="VIII"></a>
# VIII.Tổng kết
Ta đã được tìm hiểu qua khái quát về HTML để có thể sử dụng nó nhằm soạn tài liệu HTML hoặc phục vụ trong việc xây dựng website.

Contact: https://www.facebook.com/langocson8125

Nickname:LNS
