#Báo cáo Task07 [PHP cơ bản]
>Nguồn tham khảo: [JimiDark](https://www.youtube.com/watch?v=73p8U16n6zM&list=PLuOlFjICKPR6RRl82a8DYGuP1YoJZ9w8L)
>
>Người thực hiện: **Lã Ngọc Sơn**
>
>Cập nhật lần cuối:12/02/2017
>
>-----------------

**Mục lục**
>###[1.Hello World ](#1)
>
>###[2.Sử dụng echo để in ra giá trị](#2)
>
>###[3.Vị trị trình bày code PHP ](#3)
>
>###[4.Biểu thức điều kiện If-Else và If-ElseIf-Else](#4)
>
>###[5.Toán tử trong PHP](#5)
>
>###[6.Biểu thức so sánh](#6)
>
>###[7.Hàm die() và hàm exit()](#7)
>
>###[8.Các vòng lặp trong PHP](#8)
>
>###[9.Cấu trúc rẽ nhánh switch case](#9)
>
>###[10.Expression matching](#10)
>
>###[11.Hàm funtion()](#11)
>
>###[12.Hàm với tham số](#12)
>
>###[13.Lệnh return;](#13)
>
>###[14.Biến cục bộ và biến toàn phần](#14)
>
>###[.Hết.](#15)
>---------------------

![](http://i.imgur.com/NxHetHU.png) 
<a name="1"></a>
##1.Hello World 

```sh
<?php
echo "Hello World";
?>
```
<a name="2"></a>
##2.Sử dụng echo để in ra giá trị
####In ra một đoạn Text
`echo "Text";`
Text có thẻ là khoảng trắng space
Nếu trong đoạn Text đó có kí tự đặc biệt như "'?...v.v thì để hiện thị ra ngoài mà không bị báo lỗi thì ta thêm dấu / trước kí tự đặc biệt đó

**Ví dụ**
`$str = 'There\'re 45 persons in my class';`

####In ra giá trị trong một biến

`echo $tenbien;` 

Muốn nối nhiều biến hoặc nối biến với 1 đoạn text 
ta thêm dấu . (dấu chấm) hoặc dấu , (dấu phẩy) giữa hai biến 

**Ví dụ:**

```sh
echo $addr1.$addr2;
echo $addr1." ".$addr2;
```
<a name="3"></a>
##3.Vị trị trình bày code PHP 
![](http://i.imgur.com/rOEY7Fk.png)
<a name="4"></a>
##4.Biểu thức điều kiện If-Else và If-ElseIf-Else
**If-Else**

Câu lệnh:
```sh
If (điều kiện) {
    câu lệnh thực thi;
}
Else (điều kiện [có hoặc không]) {
    câu lệnh thực thi;
}
```

**Chú ý**:Khi chỉ có 1 câu lệnh thực thi thì ta ko cần dùng cặp dấu `{}`, chỉ khi có 2 câu lệnh thực thi trở lên ta bắt buộc phải dùng.

Ví dụ:

```sh
$age = 18;
    If ($age >= 18) { 
    echo "Bạn"." ".$age." "."tuổi.<br/>";
    echo "Bạn được xem phim 18+<br/>";
    }
    Else {
        echo "Nít ranh";
    }
```


**If-ElseIf-Else**

Câu lệnh:
```sh
    If (điều kiện) {
    câu lệnh thực thi;
    }
    ElseIf (điều kiện) {
    câu lện thực thi;
    }
    ....
    Else (điều kiện [có hoặc không]) {
    câu lệnh thực thi;
    }
```

Ví dụ:

```sh
$date = 6;
    echo "Hôm nay là: ";
    If ($date == 2) {
        echo "Monnday";
    }
    Elseif ($date == 3) {
        echo "Tuesday";
    }
    Elseif ($date == 4) {
        echo "Webnesday";
    }
    Elseif ($date == 5) {
        echo "Thursday";
    }
    Elseif ($date == 6) {
        echo "Friday";
    }
    Elseif ($date == 7) {
        echo "Saturday ";
    }
    Elseif ($date==8) {
        echo "Sunday";
    }
    Else
        echo "Sorry!!Please try again.";
```
<a name="5"></a>
##5.Toán tử trong PHP
Tham khảo:
[VietJack](http://vietjack.com/php/toan_tu_trong_php.jsp)
<a name="6"></a>
##6.Biểu thức so sánh
Ví dụ:

```sh
    $a=10;
    $b=20;

    $x=true;
    $y=false;
#-------------------------------------------------
    If ($a != $b) {
        echo "a != b<br/>";
    }

    If ($a == $b) {
        echo "a = b<br/>";
    }
    Else {
        If ($a > $b){
            echo "a > b<br/>";
        }
        Else { 
            echo "a < b<br/>";
        }
    }
#-------------------------------------------------
    If ($a) {
        echo "a != 0<br/>";
    }
    Else {
        echo "a = 0<br/>";
    }
#-------------------------------------------------
    If ($x) {
        echo "x true<br/>";
    }
    Else {
        echo "x false<br/>";
    }
```

**Chú ý**
Sự khác  hau giữa == và === hoặc != và !==

```sh
    $a = 10;
    $b = "10";
    $c = 10;

    $x = true;
    $y = "true";
    $z = false;


//DÙNG == HOẶC !=
    //NẾU CHỈ DÙNG == HOẶC != THÌ MÁY SẼ TỰ ĐỘNG HIỂU KIỂU GIÁ TRỊ CỦA BIẾN CHO DÙ BẠN KHAI BÁO KIỂU KHÁC
    //VÍ DỤ NHƯ $a= "true" thì máy sẽ hiểu là $a = true hoặc $a = "10" thì máy sẽ hiểu là $a = 10
    If ($a == $b)  
        echo "a == b<br/>";
    Else 
        echo "a! = b<br/>";


//DÙNG === HOẶC !===
    //NẾU DÙNG === HOẶC !== THÌ MÁY SẼ CHỈ NHẬN KIỂU GIÁ TRỊ MÀ BẠN KHÁI BÁO TRONG BIẾN, KHÔNG HIỂU KHÁC ĐI
    If ($a === $b) 
        echo "a === b<br/>";
     Else
        echo "a !== b<br/>";
    //-----------------------

    If ($a === $c) 
        echo "a === c<br/>";
     Else
        echo "a !== c<br/>";
```
<a name="7"></a>
##7.Hàm die() và hàm exit()
Trong code PHP, nếu đặt vị trí hàm `die();` hay `exit();` thì code bạn khi chạy sẽ dừng ở đoạn `die()` hoặc `exit()` và những dòng lệnh phía sau hai hàm trên sẽ không có hiệu lực

Ta sẽ không phải tiêu tốn tài nguyên để xử lý các lệnh bên dưới

Mỗi một hàm sẽ được dùng trong một trường hợp cụ thể

Ví dụ:

```
    $a = 5;
    $b = 10;
    $b += $a;

    echo "Gía trị của b= ".$b."<br/>";
    die("Không thể kết nối tới mấy chủ");
    echo "Chào tạm biệt";
```
<a name="8"></a>
##8.Các vòng lặp trong PHP
###Vòng lặp for
Câu lênh:
```sh
    For (biểu thức 1; biểu thức 2; biểu thức 3) {
        câu lệnh thực thi;
    }
```
Ví dụ:
```sh
    For ($i=5; $i<10 ; $i++) { 
        echo "Số quả táo của bạn: ".$i."<br/>";
    }
```

Vẽ tam giác đơn giản:
```sh
    For ($i=0; $i<8; $i++) {
        For ($j=0; $j<$i+1; $j++){
            echo "*";
    }
```

###Vòng lặp while
Câu lệnh:
```sh
    while (điều kiện) {
        câu lệnh thực thi;
    }
```
Ví dụ:
```sh
    $so_cam = 10;
    while ($so_cam <= 20) {
        $so_cam++;
        echo "Số quả cam của bạn là: ".$so_cam."<br/>";
    }
```

###Vòng lặp do while
Câu lệnh:
```sh
    do {
        câu lệnh thực thi;
    }
    while (điều kiện);
```

Ví dụ:
```sh
    $so_tao = 10;
    do {
        echo "Số của tạo hiện tại của bạn là: ".$so_tao."<br/>";
        $so_tao++;
    }
    while ( $so_tao <= 20);
```
<a name="9"></a>
##9.Cấu trúc rẽ nhánh switch case 
Câu lệnh:
```sh
    switch (tên biến) {
        Case giá trị 1:
        câu lệnh thực thi;
        Case giá trị 2:
        câu lệnh thực thi;
        Case giá trị 3:
        câu lệnh thực thi;
        .....
        default:
        câu lệnh thực thi;
    }
```

Ví du:

```sh
$date = 3;
    switch ($date) {
        Case 2:
            echo "Monday";
            break;
        Case 3:
            echo "Tuesday";
            break;
        Case 4:
            echo "Webnesday";
            break;
        Case 5:
            echo "Thursday";
            break;
        Case 6:
            echo "Friday";
            break;
        Case 7:
            echo "Saturday";
            break;
        Case 8:
            echo "Sunday";
            break;
        default:
            echo "Sorry!!!Please try again";
            break;
    }
```
<a name="10"></a>
##10.Expression matching
Cơ bản là cú pháp `preg_match()`

Ví dụ: muốn xác định đó có phải là một email hay không
```sh
    $email = "langocson8125@gmail.com"; 
    If (preg_match("/@/", $email)) {
        echo "Đúng là email<br/>";
    }
    else
    echo "Đéo phải email<br/>";
```
Ví dụ: muốn biết đó có phải sđt hay không

Sdt thì không có kí tự là chữ
```sh
$phoneNumber = "0919518970abc";
        echo $phoneNumber."<br/>";
    If (preg_match("/[a-zA-Z]/", $phoneNumber)) {
        echo "Đéo phải sdt<br/>";
    }
    else
        echo "Đúng là sdt<br/>";
```

Trong đó: 

* `[a-z]` là tất cả các kí tự chữ cái in thường
* `[A-Z]` là tất cả các kí tự chữ in hoa

Ví dụ: muốn xác định chữ cái đầu của chuỗi đó có viết hoa hay không
```sh
$name ="Lã Ngọc Sơn";
    echo $name."<br/>";
    If (preg_match("/^[A-Z]/", $name)) {
        echo "Chữ cái đầu của chuỗi được viết hoa";
    }
    else
        echo "Chữ cái đầu của chuỗi được viết thường";
```
Trong đó: `^[A-Z]` dấu ^ có nghĩa là xét kí tự đầu tiên của chuỗi

<a name="11"></a>
##11.Hàm funtion()
Câu lệnh:
```sh
function tên hàm() {
    câu lệnh thực thi;
}
tên hàm();
```

Ví dụ:
```sh
function myname() {
        $MyName = "Lã Ngọc Sơn";
        echo "Tên của bạn là: ".$MyName."<br/>";
    }
    myname();
```

Ví dụ:
```sh
function vonglap() {
        For ($i=0; $i < 10; $i++) { 
        echo "Số người yêu của bạn là: ".$i."<br/>";
        }
    }
    vonglap();
```
<a name="12"></a>
##12.Hàm với tham số
Câu lệnh:
```sh
function tên hàm(tham số 1, tham số 2, tham số n){
    câu lệnh thực thi;
}
tên hàm(giá trị 1, giá trị 2, giá trị n);
```

Ví dụ:
```sh
function DateOfWeek($date) {
    switch ($date) {
        Case 2:
            echo "Monday";
            break;
        Case 3:
            echo "Tuesday";
            break;
        Case 4:
            echo "Webnesday";
            break;
        Case 5:
            echo "Thursday";
            break;
        Case 6:
            echo "Friday";
            break;
        Case 7:
            echo "Saturday";
            break;
        Case 8:
            echo "Sunday";
            break;
        default:
            echo "Sorry!!!Please try again";
            break;
        }
    }
    $number = 6;        //truyền giá trị cho tham số
    DateOfWeek(3);
    DateOfWeek($number);
```
<a name="13"></a>
##13.Lệnh return;
Ví dụ:
```sh
    function tong($a, $b) {
        $c =$a + $b;
        return $c;
    }
    $d =tong(5, 13);
    echo $d;
```
Khi tính toán xong `$c` thì nó sẽ `return(trả về)` giá trị `$c` và gán giá trị đó cho `$d`.

Ví dụ: 

Nhập ngày sinh bằng số sẽ chuyển thành chữ

```sh
function birthday($date, $month, $year) {  //1.lấy giá trị của info để điền vào birthday
        If ($date == 14) {                  
            $date2 ="Ngày mười bốn";            //2. thực thi câu lệnh
            If ($month == 2) {                  
                $month2 ="Tháng 2";
                If ($year ==1998) {
                    $year2 = "Năm một chín chín tám";
                }
            }
        }
        $Birthday =$date2."--".$month2."--".$year2;
        return $Birthday;                   //3. trả về giá trị của $Birthday
    }
    $info = birthday(14,2,1998);            //4.gán giá trị trả về đó vào lại info
    echo $info;
```

Nó sẽ thực hiện theo thứ tự như sau:

1.Lấy giá trị của biến `$info` để truyền vào các biến của hàm `birthday`

2.Thực thi lệnh trong hàm

3.Trả về giá trị `$Birthday`

4.Gán lại giá trị của `%Birthday` cho `%info`

<a name="14"></a>
##14.Biến cục bộ và biến toàn phần
Câu thần chú: cái bên ngoài có thể dùng được ở mọi nơi còn cái bên trong thì bên ngoài không dùng được

Nếu ở bên trong hàm khác mà muốn dùng cái bên ngoài thì ta có 2 cách:

1.Dùng `global $biến 1, biến 2, biến n;` để dùng được

Ví dụ:
```sh
    $a = 5;
    $b =10;
    function tong() {
        global $a, $b;
        $c =$a + $b;
        echo $c;
    }
    tong();
```

2.Gán biến cũ bằng biến mới
`$biến mới = $GLOBALS["biến cũ"];`

Ví dụ:
```sh
$a = 5;
$b =10;
function tong2(){
        $a1 = $GLOBALS["a"];
        $b1 = $GLOBALS["b"];
        $c1 = $b1 + $a1;
        echo $c1;
    }
    tong2();
```

Khi đó:

Gía trị của `$a` sẽ gán cho `$a1`, `$b` sẽ gán cho `$b1`
<a name="15"></a>
##.Hết.
