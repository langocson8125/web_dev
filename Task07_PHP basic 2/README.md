#Báo cáo Task[08] - PHP cơ bản
>Nguồn tham khảo: [FreeTuts](http://freetuts.net/hoc-php/hoc-lap-trinh-php-can-ban) và [W3school](https://www.w3schools.com/php/default.asp) Somemore...
>
>Người thực hiện: Lã Ngọc Sơn
>
>Cập nhật lần cuối: 26/2/2017


Mục lục:
>###[1.Ngày 20/2/2017](#1)
>
>###[2.Ngày 21/2/2017](#2)
>
>###[3.Ngày 22/2/2017](#3)
>
>###[4.Ngày 23/2/2017](#4)
>
>###[5.Ngày 24/2/2017](#5)
>
>###[6.Ngày 25/2/2017](#6)
>----------------------------

<a name="1"></a>
##1.Ngày 20/2/2017

###Vòng lặp foreach

Câu lệnh:

```sh
foreach($tenbien as $key => $value){
    câu lệnh;
}
```
Ví dụ:

Ta có mảng

```sh
$thongtin = array(
    'name' => 'Lã Ngọc Sơn',
    'age' => '18'
    );
foreach($thongtin as $key => $value) {
    echo $key.'<br/>';
    echo $key.': '.$value.'<br/>';
}
```

###Hàm trong PHP (function)

**Hàm 1 biến**

Câu lệnh:

```sh
function ten_ham(){
    câu lệnh;
}
```

Gọi hàm đó ra

`ten_ham();`

Tryền giá trị vào hàm

```sh
function $ten_ham($tenbien){
    câu lệnh;
}
//gọi hàm ra-đồng thời truyền giá trị cho biến
$ten_ham($tenbien);
```

**Hàm nhiều biến**

```sh
function ten_ham($tenbien1,$tenbien2){
    câu lệnh;
}
//gọi hàm ra và truyền giá trị vào
ten_hiep($tenbien#1,$tenbien#2)
```

Ví dụ:

```sh
$a1 = 15;
$b1 = 10;
function tong($a,$b){
    return $a + $b;
}
tong($a1,$b1);
```

**Biến toàn cục**

Là biến nằm trong chương trình chính

Chương trình con muốn sử dụng phải dùng lệnh `global $tenbien;`

Ví dụ:

```sh
$a = 15;
$b = 10;
function tong(){
    global $a,$b;
    return $a + $b;
}
$c = tong();
echo $c; //in giá trị ra màn hình
```

**Biến cục bộ**

Là biến dùng trong chương trình con, chương trình chính không sử dụng được biến cục bộ đó

Để báo đó là biến cục bộ t dùng lệnh `static %tên biến;`

Ví dụ:

```sh
function tong(){
    static $a, $b;
    return $a + $b;
}
$c = tong(); //gán hàm với 1 biến khác
```

**Chú ý**:Nếu trong hàm mà có lệnh return thì nếu muốn in giá trị của hàm ra thì phải gán tên hàm với một biến.

###Giải thuật đệ quy

**Đệ quy tuyến tính**

Ví dụ: tính tổng các chữ số trong 1 dãy (mảng)

```sh
function tong($n){
    If($n == 1){ return $n;}
    return $n + tong($n-1);
}
```

**Đệ quy phi tuyến**

Ví dụ:

```sh
function $de_quy_tuyen_tinh($a){
    If ($a < 6 ) { return $a; }
    else {
        $tong = 0;
        for($i=1;$i < $a;$i++){
            $tong += de_quy_tuyen_tinh($a-$i);
        }
        return $tong;
    }
}
echo de_quy_tuyen_tinh(7);
```

<a name="2"></a>
##2.Ngày 21/2/2017

###Thuật toán sắp xếp

Ví dụ: Sắp xếp theo thứ tự tăng dần

```sh
$mang = array(1,5,9,7,3,4,6,8,2);
For($i=0;$i < (count($mang)-1);$i++){
    For($j=$i + 1;$j <count($mang);$j++){
        If ($mang[$j] > $mang[$i]){
            $gan = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $gan;
        }
    }
}
For($i=0;$<count($mang)){ //đưa ra kết quả
    echo $mang[$i].' ';
}
```

Đưa vào hàm

```sh
    $mang = array(1,5,9,7,3,4,6,8,2);
    $sophantu = count($mang);
Function $sap_xep($mang){
    global $sophantu;
    For ($i=0;$<$sophantu;$++){
        For ($j=$i+1;$j<$sophantu;$j++){
            If($mang[$i] > $mang[$j]){
                $gan = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $gan;
            }
        }
    }
    return $mang;
}
$mang_moi = $sap_xep($mang);
//in ra màn hình
Function in_ra($mang_moi){
    For ($i=0;$i<$sophantu;$i++){
        echo $mang_moi[$i].' ';
    }
}
in_ra($mang_moi);
```

###Tìm kiếm tuyến tính

Ví dụ:

Tìm một số bất kì trong 1 mảng

```sh
$mang = array(12,13,15,24,28,29,57,59,68,48);
for($i=0;$i<count($mang);$i++){
    If($mang[$i]== 24){ //24 là số cần tìm
        echo 'Đã tìm thấy số: '.$mang[$i];
        break;
    }
    else {
        echo 'Đếch có nhá';
        break;
    }
}
```

Đưa bào hàm:

```sh
$mang = array(12,13,15,24,28,29,57,59,68,48);
Function $tim_kiem($mang){
    For($i=0;$i<count($mang);$i++){
        If($mang[$i] == 24){
            return true;
            break;
        }
    }
    return false;
}
If($tim_kiem($mang)) echo 'Đã tìm thấy';
else echo 'Đếch có';
```

###GET-POST lên server

GET và POST đều là gửi dữ liệu lên server

Server sẽ tạo 2 mảng là `$_GET` hoặc `$_POST` để lưu trữ thông tin

POST bảo mật tốt hơn GET

GET thực hiện nhanh hơn POST

Để lấy hết thông tin trong mảng đó:

```sh
$_POST = array{
    'name' => 'Lã Ngọc Sơn',
    'age' => '18'
}
foreach($_POST as $key => $value){
    echo $key.': '.$value;
}
```


Để lấy chỉ mục tùy ý:

```sh
$name = $_POST['name'];
echo $name;
```

**Chú ý**: Ta nên kiểm tra coi biến đó có tồn tại hay không để còn lấy 

Ta dùng `isset($tenbien);`

Ví dụ:

`isset($_GET['name'])` ý nghĩa: kiểm tra trong mảng `$_GET` có giá trị `name` hay không

Ví dụ: 
```sh
If(isset($_GET['name'])){
    $name = $_GET['name'];
    echo $name;
}
```

###Lấy thông tin từ form

```sh
$_POST = array{
    'name' => 'Lã Ngọc Sơn',
    'age' => '18'
};
$name = isset($_POST['name']) ? $_POST['name']:'';
$age = isset($_POST['age']) ? $_POST['age']:'';
```

Ta dùng điều kiện 3 ngôi: nếu kiểm tra có biến `name` đó thì nó sẽ nhận giá trị sau dấu `?` còn không thì nhận giá trị sau dấu `:`.
<a name="3"></a>
##3.Ngày 22/2/2017
###Kỹ thuật đặt lính canh 

Kỹ thuật đặt lính canh dùng khi bạn muốn duyệt qua danh sách và chọn một phần tử có đặc điểm đặc biệt nào đó.

Ví dụ: Tìm số lớn nhất 
```sh
$a=4;
$b=8;
$c=3;
function GTLN(){
    global $a,$b,$c;
    $max=$a;
    If($a<$b) $max = $b;
    If($b<$c) $max = $c;
    return $max;
}
GTLN();
```

###Kỹ thuật đặt cờ hiệu trong PHP

Kỹ thuật đặt cờ hiệu dùng để duyệt mảng danh sách và kiểm tra từng phần tử để đưa ra kết quả cuối cùng.

Ví dụ: tìm cách số chia hết cho 40 từ 1 đến 1000

```sh
for($i=1;$i<=1000;$i++){
    If($i%40==0) $flag = true;
    else $flag = false;
}
If($flag = true) echo 'Có';
else echo 'Không';
```
<a name="4"></a>
##4.Ngày 23/2/2017
###Kỹ thuật sắp xếp chọn
Ví dụ: Sắp xếp theo thứ tự giảm dần

Kết hợp kỹ thuật đặt lính canh và kỹ thuật sắp xếp nổi bọt

```sh
$mang = array(1,4,8,7,5,2);
$sophantu = count($mang);
Function sap_xep($mang){
    global $sophantu;
    For($i=0; $i < $sophantu;$i++0){
        $x = $i; //gán vị trí phần tử đầu tiên cho x
        For ($j =$i +1; $j < $sophantu; $j++){
            If($mang[$j] > $mang[$x]) {
                $x = $j;
            }
        }
        $gan = $mang[$i];
        $mang[$i] = $mang[$x]; //tim vị trí số lớn nhất r thay đổi vị trí giữa 2 số đó
        $mang[$x] = $gan;

    }
    return $mang;
}
//đưa giá trị vào hàm
$mang = sap_xep($mang);
//In kết quả ra màn hình
for($i=0;$i<$sophantu;$i++){
    echo $mang[$i]. ' ';
}
```

###Các hàm xử lý mảng
* `array_change_key_case($array, $case)`

Chuyển các key trong mảng thành chữ hoa hoặc chữ thường

Nếu $case = 1 là chữ hoa, $case = 0 là chữ thường

 CASE_UPPER thay cho số 1 và CASE_LOWER thay cho số 0

```sh
 $mang = array (
    'name' => 'Sơn',
    'age' => '18'
    );
    array_change_key_case($mang, CASE_UPPER );
var_dump($mang);
```

* `array_combine($tenmang)`

Trộn hai mảng lại với nhau

```sh
$array_keys = array('a', 'b', 'c');
$array_values = array('one', 'two', 'three');
print_r(array_combine($array_keys, $array_values));
//kết quả:
Array(
[a] => one
[b] => two
[c] => three;
);
```

* `array_count_values($tenmang)`

Đếm số lần xuất hiện của các phần tử giống nhau trong mảng
```sh
$mang = array(1,'hello',1,'son','hello');
print_r(array_count_values($mang));
```

* `array_push($tenmang,giá trị 1, giá trị 2,.....)`

Thêm vào cuối mảng một hoặc nhiều giá trị

```sh
$mang = array('Sơn','Hiệp');
array_push($mang,'An','Qúy','Thy');
print_r($mang);
```

* `array_pad($tenmang,size,giá trị)`

Nếu kích thước truyền vào lớn hơn kích thước mảng `$mang` thì giá trị `giá trị` được thêm vào, ngược lại nếu kích thước truyền vào nhỏ hơn kích thước mảng `$mang` thì sẽ giữ nguyên

Thêm vào phía trước thì size có giá trị âm và ngược lại

```sh
$mang = array(1,3,5,6);
array_pad($mang,6,2);
print_r($mang);
//kết quả sẽ là 
//$mang = array(1,3,5,6,2,2);
```

* `array_shift($tenmang)`

Xóa phần tử đầu tiên trong mảng và trả về giá trị đó

```sh
$mang= array('Sơn','Hiệp','Qúy');
$delete = array_shift($mang);
print_r($mang);
//mảng còn ('Hiệp','Qúy');
//in ra kết quả là Sơn
```

* `array_unshift` 
 
Ngược lại với `array_shift`

* `is_array($tenmang)`

Kiểm tra đó có phải là kiểu mảng hay không

Nếu trả về là true nếu phải và false nếu không phải

* `in_array(giá trị,$tenmang)`

Kiểm tra giá trị nào đó cở nẳm ở trong mảng hay không

Nếu kết quả trả về là true nếu có và ngược lại

```sh
$mang = array('Sơn','Đẹp','Trai');
var_dump(in_array('Sơn',$mang));
```

* `array_key_exists(tên key,$tenmang)`

Kiểm tra key nào đó có nằm trong mảng hay không

Nếu kết quả trả về là true nếu có và ngược lại

```sh
$mang = array(
    'name'=>'Sơn',
    'age'=>'18'
    );
var_dump(array_key_exists('name',$mang));
```

* `array_unique($tenmang)`

Loại bỏ giá trị trùng trong mảng

```sh
$mang = array('Sơn','Sơn');
var_dump(array_unique($mang));
```

* `array_values($tenmang)`

Chuyển mảng thành mảng chỉ mục

```sh
$mang = array('Sơn','Đẹp','Trai');
var_dump(array_values($mang));
//Kết quả sẽ là:
$mang = array(
    0=>'Sơn',
    1=>'Đẹp',
    2=>'Trai');
```
<a name="5"></a>
##5.Ngày 24/2/2017

###Các hàm xử lý file

**Mở file**
`fopen($path,quyền);`
Trong đó `$path` là đường dẫn tới file

Dưới đây là các quyền:

|Mode|Diễn giải|
|----|---------|
|r   |Read only|
|r+  |Read + Write|
|w   |Write only|
|w+  |Write + Read. Nếu file này tồn tại thì nội dung cũ sẽ bị xóa đi và ghi lại nội dung mới, còn nếu file chưa tồn tại thì nó tạo file mới|
|a   |Mở dưới dạng append dữ liệu, chỉ có write và nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới|
|a+  |Mở dưới dạng append dữ liệu, bao gồm write và read. Nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới|
|b   |Mở dưới dạng chế độ binary|

Ví dụ: 

```sh
$path = 'Dat-co-hieu.php';
$open = @fopen($path,'r');
//ta thêm dấu @ trước hàm fopen để phòng trường hợp đường dẫn file bị sai thì sẽ không bung lỗi ra màn hình
//kiểm tra file có mở thành công hay không
If(!$open) echo'Không mở được file';
else echo 'Mở thành công';
```

**Đọc file**

Ta dùng hàm `fgetc($linkfile)` để đọc theo từng ký tự, dùng `fgets($linkfile)` để đọc theo từng dòng. Đối với đọc từng dòng và đọc từng ký tự ta phải dùng hàm `feof($linkfile)` đặt trong vòng lặp `while` để sau khi đọc xong nó sẽ chuyển sang dòng mới hoặc ký tự mới.

Để đọc hết tất cả file ta dùng hàm `fread($linkfile, $size)`, trong đó `$linkfile` là đối tượng lúc mở file còn `$size` là kích cỡ của file cần đọc. Để lấy kích cỡ của file cần đọc ta dùng hàm `filesize($path)`.

Ví dụ: 

* Đọc từng dòng (đưa vào vòng lặp)

```sh
$file = @fopen('text.txt','r'); //mở file trước và cấp quyền
If(!$file) echo 'Chưa mở được';
else{
    while (!foef($file)){ //đọc từng kí tự
        echo fgets($file); //dấu ! mang ý nghĩa phủ đinh, lặp đến khi nào file không đọc được nữa
    }
}
```

* Đọc cả file

```sh
$file = @fopen('text.txt','r'); //mở file trước và cấp quyền
If(!$file) echo 'Ko đọc được';
else {
    $data = fread($file,filesize('text.txt'));
    echo $data;
}
```

**Ghi file**

Để ghi nội dung vào file ta dùng hàm `fwrite($tenfile,'nội dung')`

Ví dụ:

```sh
$file = @fopen('text.txt','a+'); //mở fle và cấp quyền
If (!$file) echo 'Không mở được';
else {
    fwrite($file,'Da duoc ghi them');
}
```

**Đóng file**

Đảm bảo sự an toàn sau khi sử dụng file

Ta dùng hàm `fclose($tenfile)`

```sh
$file = @fopen('text.txt','r'); //mở file trước và cấp quyền
If(!$file) echo 'Ko đọc được';
else {
    $data = fread($file,filesize('Dat-co-hieu.php'));
    echo $data;
    fclose($file);
}
```

**Các hàm xử lý khác**

* Kiểm tra file

    Để xem file có tồn tại hay không ta dùng hàm `file_exists($linkfile)`

* Lấy nội dung file mà không cần `fread`

    `file_get_contents($linkfile)` trong đó `$linkfile` có thể là link đến 1 web thì nó sẽ trả về file html của web đó

* Ghi nội dung file mà không cần `fwrite`

    Ta dùng hàm `file_put_contents($linkfile,'nội dung')`

* Đổi tên file

    Ta dùng hàm `rename('tên cũ','tên mới')`

* Copy file

    Để copy sang file mới ta dùng hàm `copy($source, $dest)`, trong đó `$source` là path file cần copy và `$dest` là path file cần di chuyển tới. Nếu bạn muốn đổi luôn tên thì đường dẫn `$dest` bạn khai báo một cái tên khác.
 
 * Kiểm tra một đường dẫn
 
    Để kiểm tra một đường dẫn có tồn tại hay không ta dùng hàm `is_dir('link)`

* Tạo folder mới

    Ta dùng hàm `mkdir($tenlink)`

```sh
//Kiểm tra xem folder me có chưa, nếu có thì tạo folder con
If(is_dir('me/con')) {
    mkdir('me/con');
}
```

###Upload file lên server

Để upload file lên Server thì ban phải sử dụng form có thuộc tính `enctype="multipart/form-data"` và phương thức `POST`, thẻ input sẽ có `type="file"`.

Khi bạn upload một file lên thì trên Server sẽ nhận được 5 thông số cho một file, và PHP sẽ dựa vào các thông số đó để tiến hành upload, các thông số đó là:

* name: Tên của file bạn upload
* type: Kiểu file mà bạn upload (hình ảnh, word, …)
* tmp_name: Đường dẫn đến file upload ở client
* error: Trạng thái của file bạn upload, 0 => không có lỗi
* size: Kích thước của file bạn upload

```sh
<!DOCTYPE html>
<html>
<head>
    <title>Uploadfile lên server</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <br/>
    <input type="submit" name="uploadclick" value="Upload"/>
</form>
<?php
If (isset($_POST['uploadclick'])) //kiểm tra uploadclick có nằm trong mảng $_POST ko
{
    If (isset($_FILES['file'])) //kiểm tra file có nằm trong mảng $_FILES ko
    {
        If ($_FILES['file']['error'] > 0) //nếu có lỗi
        { 
            echo 'Xảy ra lỗi trong quá trình tải file';
        }
        else{
            move_uploaded_file($_FILES['file']['tmp_name'], '/uploads/'.$_FILES['file']['name']);
            // move_upload_file($tên_file_tạm, $đường_dẫn_thư_mục_lưu_file/tên_file.jpg).
                echo 'Đã tải file lên';
        }

    }
    else echo 'Bạn chưa chọn file để upload';
}

?>
</body>
</html>
```
<a name="6"></a>
##6.Ngày 25/2/2017

Làm bài tập
