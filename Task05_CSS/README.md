#Báo cáo Task05 [CSS cơ bản]
>Nguồn tham khảo: [TháchPham-Share the best](https://thachpham.com/series/css-co-ban)

>Người thực hiện: **Lã Ngọc Sơn**

>Cập nhật lần cuối: 28/01/2017

MỤC LỤC
>###[1.Ngày 22/01/2017](#1)
>
>###[2.Ngày 23/01/2017](#2)
>
>###[3.Ngày 25/01/2017](#3)
>
>###[4.Ngày 29/01/2017](#4)
>
>###[5.Ngày 30/01/2017](#5)
>
>###[Hết](#6)


<a name="1"></a>
#1.Ngày 22/01/2017
##Vùng chọn cơ bản
Bên HTML: `<h1 id="name">Hello</h1>`
Bên CSS: `#name`

Bên HTML: `<h1 class="name">Hello</h1>`
Bên CSS: `.name`

##Đơn vị đo trong CSS
Đơn vị tuyệt đối:
`px`, `pt`
Đơn vị tương đối:
`%`, `em`, `rem`

##Các thuộc tính cho Text
**Text-align** tùy chỉnh canh lề cho các đoạn văn bản 

```sh
text-align: left; // Căn lề văn bản từ bên trái
 
text-align: right; // Căn lề văn bản từ bên phải
 
text-align: center; // Căn lề văn bản từ chính giữa
 
text-align: justify; // Căn lề văn bản đều hai bên
```

**Text-decoration** trang trí lại văn bản hiển thị trên tài liệu
```sh
text-decoration: overline   gạch trên chữ
text-decoration: underline  gạch dưới chữ
text-decoration: line-through   gạch ngang chữ
text-decoration: none   không có gạch gì cả
```

**Text-indent** tạo ra một khoảng trắng bên trái của văn bản (hoặc bên phải của văn bản với các ngôn ngữ hiển thị từ phải sang trái)
Ví dụ: 
```sh
p {
   text-indent: 15px;
   text-indent: 15%;
   text-indent: 1.5pt;
}
```

**Text-shadow** thêm bóng đổ cho văn bản
`text-shadow: [màu sắc] [tọa độ x y] [độ mờ];`
Ví dụ:
```sh
#title {
   text-shadow: blue 2px 3px 4px;
}
```

**Text-transform** tùy chỉnh việc hiển thị chữ in hoa hay in thường trong đoạn văn bản mà không cần viết thủ công cả đoạn văn bản
Ví dụ:
`#title { text-transform: uppercase; }  in hoa cả đoạn văn` 
`#title { text-transform: lowercase; }  viết thường cả đoạn văn`
`#title { text-transform: capitalize; } in hoa chữ cái đầu tiên của mỗi từ`
`#title { text-transform: none; }   không có gì cả`

##Trang trí font chữ cho văn bản

**Font-family** để thiết lập font chữ cho văn bản
`font-family: tên-font, tên-font-backup, tên-font-backup,...;`
Ví dụ:
`font-family: Helvetica, Arial, Tahoma, sans-serif;`

**Font-style** thiết lập chữ viết được hiển thị dưới dạng in nghiêng hoặc bình thường
`normal` thường
`italic`, `oblique` nghiêng

**Font-weight**  tùy chỉnh in đậm chữ viết
Ví dụ: 
`font-weight: 100`

**Color** tạo màu chữ
`color: màu(mã màu);`

Ví dụ:
```sh
body {
 
   color: #333333;
 
}
```
 
 **Font-size** tùy chỉnh kích cỡ chữ
 Ví dụ:
 `font-size:15px;`

##Thẻ Div
Đây là cái thẻ mà nó là chữ viết tắt của division (nghĩa là khu trong tiếng Việt theo từ điển kỹ thuật chung) được sử dụng để tạo ra một khu vực kiểu block nào đó trên một website, hay bạn có thể hiểu là gom nhóm tập hợp các phần tử trên website vào một khu vực với thẻ `<div>`.

![](http://i.imgur.com/T6ExfUm.png)

`Tạo khu vực với thẻ <div>`
<a name="2"></a>
#2.Ngày 23/01/2017
##Box Model và các thuộc tính
Kỹ thuật Box Model trong CSS bao gồm 4 phần quan trọng đó là:

* `Margin`: Khoảng cách tính từ bên ngoài của phần tử.
* `Border`: Đường viền của phần tử.
* `Padding`: Khoảng cách tính từ bên trong của phần tử.
* `Content`: Nội dung trong phần tử.

![](http://i.imgur.com/16mLVZj.gif)
 
**Padding** 
`padding: top right bottom left;`
Ví dụ:
`  padding: 20px 10px 20px 10px;`

Ngoài thuộc tính `padding` thì thuộc tính này còn có 4 thuộc tính con khác đó là `padding-top`, `padding-bottom`, `padding-left` và `padding-right` và mỗi thuộc tính là để thiết lập giá trị cho từng mặt cụ thể.

**Border**
`border: [size] [type] [color];`

Ví dụ:
`border: 1px solid red;`
Trong border có hỗ trợ một số type như `solid`, `dotted`, `double`, `groove`, `ridge`, `inset` và `outset`.
Giống như các thẻ trong Box Model khác, `border` cũng có các thẻ con là `border-top`, `border-right`, `border-bottom` và `border-left`.

**Margin**
`marrgin:top right bottom left;`
Ví dụ:
`margin: 32px 0 0 0;`
Và nó cũng có một số thuộc tính con là `margin-top`, `margin-right`, `margin-bottom` và `margin-left`.

##Các thuộc tính tùy chỉnh kích thước
```ssh
height          Thiết lập chiều cao của một phần tử.
max-height      Thiết lập chiều cao tối đa của một phần tử.
min-height      Thiết lập chiều cao tối thiểu của một phần tử.
width           Thiết lập chiều rộng của phần tử.
max-width       Thiết lập chiều rộng tối đa của một phần tử.
min-width       Thiết lập chiều rộng tối thiểu của một phần tử.
```

##Box-sizing
`box-sizing:giá trị;`

Hiện tại `box-sizing` có hỗ trợ một số giá trị như sau:

* `content-box`: Giá trị mặc định, nghĩa là giá trị `width` và height chỉ áp dụng cho khu vực nội dung bên trong, không bao gồm `padding`, `border` và `margin`.
* `border-box`: Khi thiết lập giá trị này, thì `width` và `height` sẽ bao gồm cho cả phần nội dung, `padding` và `border` nhưng không bao gồm `margin`.
* `padding-box`: Với giá trị này thì `width` và `height` chỉ bao gồm cho phần nội dung và `padding`, không bao gồm `border` và `margin`.
Lưu ý: `padding-box` chỉ có tác dụng với trình duyệt Firefox.

**Lưu ý về cách viết**

`box-sizing` là một thuộc tính trong CSS3 nên khi viết bạn phải viết thành 3 lần với các tiền tố khác nhau, ví dụ:
```sh
{
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
}
```
Trong đó, nếu viết không có tiền tố là dành cho trình duyệt IE8, Opera 7, Firefox và Google chrome bản mới. `-webkit` là dành cho Google Chrome bản cũ và `-moz` là dành cho Firefox bản cũ.

##Màu nền và Ảnh nền 
**Màu nền**
`background-color: màu hoặc mã màu;`
**Hình nền**
`background-image: url('link ảnh 1'), url('link ảnh 2');`

Tùy chỉnh lặp lại ảnh nền với background-repeat:

* `no-repeat`: Không lặp.
* `repeat-x`: Lặp theo chiều ngang.
* `repeat-y`: Lặp theo chiều dọc.
* `space`: Lặp đều theo chiều ngang và chiều dọc, ảnh nền sẽ cách nhau bằng khoảng trắng.
* `round`: Chưa hiểu lắm nên không giải thích.
* `repeat`: Mặc định.


Đổi vị trí ảnh nền với background-position

Đối với các tấm ảnh nền cỡ nhỏ hoặc dùng background-size để sửa lại kích thước thì có thể bạn sẽ cần thay đổi vị trí hiển thị của ảnh nền đó, và bạn có thể dùng thuộc tính background-position này. Nó có một số giá trị như sau:

* `top`: hiển thị ở trên đầu phần tử.
* `bottom`: hiển thị bên dưới phần tử.
* `left`: hiển thị bên trái phần tử.
* `right`: hiển thị bên phải phần tử.
* `center`: hiển thị chính giữa phần tử.
* `y-x`: tùy biến vị trí hiển thị theo tọa độ, giá trị đứng trước là `y` và đứng sau là `x`. Ví dụ: `15px` `10px`

##Sử dụng Float để chia cột
`float: giá trị;`
 Có 2 gái trị `right` và `left`

Khi chia cột trong CSS, bạn nên làm tuần tự đầy đủ các bước sau để chia cột được chính xác:

Các cột phải luôn có một container, tức là phần tử mẹ bao bọc nó.
Thiết lập chiều rộng cho container.
Thiết lập chiều rộng cho hai cột, tổng chiều rộng trong hai cột phải luôn bằng hoặc ít hơn chiều rộng của container.
Nên sử dụng `box-sizing: border-box` để tính toán kích thước chính xác.
Sử dụng thuộc tính float với giá trị `left` và `right` để đẩy phần tử về sang trái hoặc phải.
<a name="3"></a>
#3.Ngày 25/01/2017
##Các thuộc tính danh sách
`list-style: <list-style-type> <list-style-position> <list-style-image>;`

Trong đó:

* `list-style-type`: Thay đổi loại hiển thị của danh sách.
 (các giá trị: `disc`, `circle`, `square`, `decimal`, `lower-reman`, `upper-roman`, `none`)
* `list-style-position`: Tùy chỉnh vị trí hiển thị các dấu đầu dòng của mục con nằm bên trong danh sách hoặc bên ngoài danh sách.
 (các giá trị:`inside`, `outside` )
* `list-style-image`: Sử dụng hình ảnh làm các dấu đầu dòng cho danh sách.
 ( ví dụ: `list-style-image: url('link ảnh');`)

##Tùy biến loại hiển thị với Display
Thuộc tính display có một số giá trị cơ bản như:

* `inline`: Chuyển phần tử về hiển thị trên cùng một hàng.
* `inline-block`: Chuyển phần tử về hiển thị trên cùng một hàng nhưng nó vẫn thừa hưởng các đặc tính của block như có thể tùy chỉnh kích thước, thêm background,…
* `block`: Chuyển phần tử về hiển thị kiểu block, sở hữu một hàng riêng.
* `list-item`: Chuyển phần tử về hiển thị như một mục danh sách, để có thể sử dụng thuộc tính `list-style`.
* `none`: Đơn giản là ẩn phần tử đó đi không cho hiển thị nữa, nó cũng sẽ ẩn luôn toàn bộ các khoảng trống mà nó sở hữu. Nếu bạn muốn ẩn đi mà vẫn đề lại “dấu vết” thì có thể sử dụng `visibility: hidden`.

##Position và Absolute – Relative

Nếu như bạn muốn di chuyển một phần tử nào đó mà không ảnh hưởng đến bố cục của website thì sẽ có một giải pháp đó là sử dụng thuộc tính `position`.

`postition: giá trị;`

Hiện tại position hỗ trợ cho một số giá trị như sau:

* `relative`: Dùng để thiết lập một phần tử sử dụng các thuộc tính `position` (xem ở dưới) mà không làm ảnh hưởng đến việc hiển thị ban đầu.
* `absolute`: Dùng để thiết lập vị trí của một phần tử nhưng nó sẽ luôn nằm trong một phần tử mẹ đang là `relative`.
* `fixed`: Hiển thị luôn đi theo trình duyệt khi cuộn trang.
* `static`: Đưa phần tử về hiển thị theo kiểu mặc định.

Sau khi thiết lập một phần tử sử dụng position, chúng ta sẽ sử dụng thêm một số thuộc tính position để căn chỉnh vị trí của nó và giá trị là số kèm theo đơn vị, có 4 thuộc tính position là:

* `top`: Căn vị trí hiển thị của phần tử theo hướng từ trên xuống dưới. Giá trị càng cao thì phần tử càng thụt xuống dưới.
* `bottom`: Căn vị trí hiển thị của phần tử theo hướng từ dưới lên trên. Giá trị càng cao thì phần tử càng hiển thị lên cao.
* `left`: Căn vị trí hiển thị từ trái sang phải. Giá trị càng cao thì phần tử sẽ càng thụt về bên phải.
* `right`: Căn vị trí hiển thị từ phải sang trái. Giá trị càng cao thì phần tử sẽ càng thụ về bên trái.

Ví dụ: kiểu relative

```sh
img {
  position: relative;
  top: 85px;
  left: 85px;
}
```

##Pseudo class đơn giản

Pseudo Class trong CSS được sử dụng để viết CSS cho một trạng thái nào đó của một phần tử. Ví dụ viết CSS đổi màu các liên kết khi rê chuột vào, đổi thuộc tính một phần tử khi nhấp vào,….

Một số Pseudo Class thông dụng:

* `:hover` – Chọn trạng thái khi rê chuột vào một phần tử.
* `:visited` – Được sử dụng cho liên kết, chọn liên kết khi đã được truy cập (dựa vào History trên trình duyệt).
* `:link` – Được sử dụng cho liên kết, chọn liên kết khi chưa nhấp vào.
* `:active` – Chọn phần tử khi họ chọn/nhấp vào.

Ví dụ: 
```sh
a {
  color: red;
  text-decoration: none;
}
b:hover {
  color: blue;
}
c:visited {
  color: purple;
}
d:active {
  color: green;
}
e:link {
    color:yellow;
}
```

##Tạo Menu NGANG cơ bản
Kiến thức tổng hợp nên chỉ cần ví dụ

Ví dụ:
1 đoạn bên HTML
```sh
<div id="menu">
  <ul>
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Diễn đàn</a></li>
    <li><a href="#">Tin tức</a></li>
    <li><a href="#">Hỏi đáp</a></li>
    <li><a href="#">Liên hệ</a></li>
  </ul>
</div>
```

bên CSS

```sh
body {
  font-family: sans-serif;
  color: #333;
}

/*==Style cho menu===*/
#menu ul {
  background: #1F568B;
  list-style-type: none;
  text-align: center;
}
#menu li {
  color: #f1f1f1;
  display: inline-block;
  width: 120px;
  height: 40px;
  line-height: 40px;
  margin-left: -5px;
}
#menu a {
  text-decoration: none;
  color: #fff;
  display: block;
}
#menu a:hover {
  background: #F1F1F1;
  color: #333;
}
```

##Tạo Menu DỌC cơ bản
Ví dụ:
bên HTML
```sh
<div id="menu">
  <ul>
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Tin tức</a></li>
    <li><a href="#">Sản phẩm</a></li>
    <li><a href="#">Liên hệ</a></li>
  </ul>
</div>
```
bên CSS
```sh
body {
  font-family: sans-serif;
  font-size: 15px;
}
#menu ul {
  background: #8AD385;
  width: 250px;
  padding: 0;
  list-style-type: none;
  text-align: left;
}
#menu li {
  width: auto;
  height: 40px;
  line-height: 40px;
  border-bottom: 1px solid #e8e8e8;
  padding: 0 1em;
}
#menu li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  display: block;
}
#menu li:hover {
  background: #CDE2CD;
}
```
<a name="4"></a>
#4.Ngày 29/01/2017
##Tạo Dropdown

Ví dụ: 
bên HTML
```sh
<div id="menu">
  <ul>
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Diễn đàn</a></li>
    <li><a href="#">Tin tức</a>
      <ul class="sub-menu">
        <li><a href="#">WordPress</a></li>
        <li><a href="#">SEO</a></li>
        <li><a href="#">Hosting</a>
        </li>
      </ul>
    </li>
    <li><a href="#">Hỏi đáp</a></li>
    <li><a href="#">Liên hệ</a></li>
  </ul>
</div>
```

bên CSS
```sh
body {
  font-family: sans-serif;
  color: #333;
}

/*==Style cho menu===*/
#menu ul {
  background: #1F568B;
  list-style-type: none;
  text-align: center;
}
#menu li {
  color: #f1f1f1;
  display: inline-block;
  width: 120px;
  height: 40px;
  line-height: 40px;
  margin-left: -5px;
}
#menu a {
  text-decoration: none;
  color: #fff;
  display: block;
}
#menu a:hover {
  background: #F1F1F1;
  color: #333;
}

/*==Dropdown Menu==*/
.sub-menu {
  display: none;
  position: absolute;
}
#menu li {
  position: relative;
}
#menu li:hover .sub-menu {
  display: block;
}
.sub-menu li {
  margin-left: 0 !important;
}

/*==Menu cấp 3==*/
.sub-menu > ul {
  display: none !mportant;
}
```
<a name="5"></a>
#5.Ngày 30/01/2017
##Tạo chuyển động với Transition
`transition: [thuộc tính chuyển động] [thời gian chuyển động] [thời gian delay] [kiểu chuyển động];`

Ví dụ:
```sh
#box {
    width:200px;
    height: 200px;
    background-color:yellow;
    transition: margin-left 2s 0.5s ease-in-out;
}
```

Các thuộc tính chuyển động tham khảo ở [link này](https://www.w3.org/TR/css3-transitions/#animatable-properties)

Bây giờ bạn đã khai báo cho #box áp dụng hiệu ứng chuyển động rồi, nhưng để vậy nó sẽ không chuyển động mà sẽ bắt buộc có thêm một sự kiện xảy ra để nó kích hoạt. Ví dụ mình sẽ viết thêm CSS với `pseudo-class` là `:hover` để tiến hành sửa giá trị `margin-right` và lúc này nó sẽ chuyển động dựa theo giá trị mới.

Ví dụ:

```sh
#box:hover {
  background-color:red;
  margin-left: 150px;
}
```

Lúc này nó sẽ chuyển động sang phải và chuyển từ màu vàng sang màu đỏ

##Transform 

Thuộc tính `transform` có chức năng đổi hình dạng các phần tử block trong website.

* `transform: rotate(số độ hoặc số lượt );` xoay 
 Ví dụ: 
```sh
#img { transform: rotate(180deg); }
#img2 { transform: rotate(3turn); }
```

* `transform: skew(số độ)` nghiêng
 Ví dụ: `img4 { transform: skew(50deg); }`
 Muốn nghiêng theo chiều ngang hoặc dọc thì ta dùng `skewX(số độ)` là nghiêng theo chiều ngang hoặc `skewY(số độ)` là nghiêng theo chiều dọc

* `transform: scale(giá trị);` co dãn
 Ví dụ: `img3 { transform: scale(3); }`
 Muốn dãn một chiều ngang hoặc dọc thì ta dùng `scaleX();` hoặc `scaleY();`

* `transform: translate(tọa độ X tọa độ Y);` di chuyển tới 1 vị trí có tọa độ
Ví dụ: `img5 { transform: translate(5px 7px);`

#Hết
