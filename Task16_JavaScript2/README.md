# Báo cáo Task 16 - Javascript Fundamentals

>Người thực hiện: Lã Ngọc Sơn
>
>Nguồn: [Javascript.info](http://javascript.info)
>
>Cập nhật ngày: 23/04/2017
>
>------------

Mục lục

* [1. Hello, world!](#1)
* [2. Cấu trúc câu lệnh (Code structure)](#2)
* [3. Strict mode (Chế động nghiêm ngặt)](#3)
* [4. Biến và Hằng](#4)
* [5. Các kiểu dữ liệu](#5)
* [6. Chuyển đổi kiểu dữ liệu (Type Conversions)](#6)
* [7. Các toán tử](#7)
* [8. Các phép so sánh (Comparisions)](#8)
* [9. Sự tương tác (Interaction)](#9)
* [10. Toán tử IF - Else If - Else](#10)
* [11. Toán tử logic (OR AND NOT)](#11)
* [12. Vòng lặp](#12)
* [13. Witch..case](#13)
* [14. Hàm (function)](#14)
* [15. Function biểu thức và con trỏ (mũi tên)](#15)

>----------------

![Javascript](http://i.imgur.com/VRLLkmD.png)

<a name="1"></a>
## 1. Hello, world!

### Thẻ "script"

Ngôn ngữ Javascript có thể được chèn vào trong mọi nơi của HTML với sự trợ giúp của thẻ `<script>`.

Ví dụ:

```sh
<!DOCTYPE html>
<html>
<head>
    <title>Hello world bằng Javascript</title>
    <meta charset="utf-8">
</head>
<body>
    <p>Trước script</p>
    <script>
    alert("I'm Javascript");
    </script>
    <p>Sau script</p>
</body>
</html>
```

Thẻ `<script>` chứa code Javascript được xử lý tự động khi trình duyệt thấy thẻ đó.

### Modern Markup (Tạm dịch là đánh dấu hiện đại)

Thẻ `<script>` chứa một ít thuộc tính mà hiếm khi được sử dụng trong ngày nay, nhưng chúng ta có thể tìm thấy chúng trong các code cũ:

**Thuộc tính `type`:**

Chuẩn HTTML4 cũ yêu cầu một script phải có type. Thường là nó như thế này: `type="text/javascript"`. Chuẩn HTML hiện đại thừa nhận `type` là mặc định, không bị yêu cầu.

### External scripts (Các script từ bên ngoài)

Nếu chúng ta có nhiều JS code, chúng ta có thể đặt nó trong một file riêng.

File script được nối với HTTL như thể này:

`<script scr="/path/to/script.js"></script>`

`/path/to/script.js` là một đường dẫn tuyệt đối tới file script (từ trang root).

Nó có thể cung cấp một đường dẫn liên quan tới một page hiện tại. Ví dụ, `sec="script.js"` nghĩa là file `script.js` cùng nằm trong một folder.

Để nối nhiều script, sử dụng nhiều thẻ:

```sh
<script src="script1.js"></script>
<script src="script2.js"></script>
...
```

**Chú ý:**

Theo quy tắc, chỉ những script đơn giản thì hãy đặt vào file HTML, còn nếu script phức tạp hơn thì đặt trong một file riêng.

### Nếu `src` được thiết lập, nội dung trong script bị bỏ qua

Một thẻ `<script>` không thể chứa cùng một `src` và code bên trong.

Điều này sẽ không hoạt động:

```sh
<script src="abc.js">
    alert(1);   //nội dung này bị bỏ qua, bởi vì src được thiết lập
</script>
```

Chúng ta phải chọn; một là external `<script src="...">` hoặc là một `<script>` bình thường với code nằm bên trong.

Ví dụ trên có thể tách thành hai script để nó hoạt động:

```sh
<script src="abc.js"> </script>
<script>
    alert(1);
</script>
```

### Task:

**Show một alert **

```sh
<!DOCTYPE html>
<html>
<head>
    <title>Hello world bằng Javascript</title>
    <meta charset="utf-8">
</head>
<body>
    <script>
    alert("I'm Javascript");
    </script>
</body>
</html>
```

**Show một alert với external script**

```sh
<!DOCTYPE html>
<html>
<head>
    <title>Hello world bằng Javascript</title>
    <meta charset="utf-8">
</head>
<body>
    <script src="script.js"></script>
</body>
</html>
```

Trong `script.js`

`alert("I'm Javascript");`
<a name="2"></a>
## 2. Cấu trúc câu lệnh (Code structure)


### Câu lệnh (Statements)

Chúng ta đã được thấy một câu lệnh `alert("Hello World")` ở ví dụ trước.

Chúng ta có thể có nhiều câu lệnh trong code nếu chúng ta muốn. Các câu lệnh khác được ngăn cách nhau bởi dấu chấm phẩy.

Ví dụ, chúng ta chia ví dụ trên thành hai ví dụ tách rời:

`alert("Hello"); alert("World");`

Thường thì mỗi câu lệnh được ngăn cách nhau bởi dấu chấm phẩy - điều đó làm cho code dễ đọc hơn:

```sh
alert("Hello"); 
alert("World");
```

### Dấu chấm phẩy (Secmicolons)

Một dấu chấm phẩy có thể bỏ qua trong nhiều trường hợp khi một dòng kết thúc.

Điều đó cũng có thể hoạt động:

```sh
alert("Hello"); 
alert("World");
```

Ở đây Javascript thông dịch mỗi dòng và ngầm định tự thêm dấu chấm phẩy.

**Trong hầu hết các trường hợp một dòng mới tự ngầm định một dấu chấm phẩy. Nhưng "trong hầu hết các trường hợp" không có nghĩa là "luôn luôn".** 

Có nhiều trường hợp khi một dòng mới không mang dấu chấm phẩy, ví dụ:

```sh
alert(3 +
1
+ 2);
```

Kết quả đầu ra lúc này là 6.

**Nhưng có nhiều tình huống nơi JS không thể tự thêm dấu chấm phẩy vào được.**

Các lỗi xảy ả trong các trường hợp này rất khó để tìm ra và sửa.

*Một ví dụ cho một lỗi*

Nếu bạn muốn thấy một ví dụ cụ thể của một lỗi, kiểm tra dòng này dưới đây:

`[1, 2].forEach(alert)`

Không cần quan tâm đến dấu [] và `forEach`. Chúng ta sẽ học chúng sau, lúc này-nó không là vấn đề. Kết quả hiện ra là 1, sau đó 2.

Giờ chúng ta thêm một `alert` trước dòng code. Và không kết thúc nó với dấu chấm phẩy:

```sh
alert("Có một lỗi xảy ra ở đây")

[1, 2].forEach(alert)
```

Giờ nếu chúng ta chạy nó, chỉ có `alert` đầu tiên được hiện ra, và sau đó chúng ta gặp lỗi!

Nhưng để không bị lỗi đó, ta thêm dấu chấm phẩy vào sau `alert`:

```sh
alert("Tất cả hoạt động bình thường");

[1, 2].forEach(alert)
```

Và giờ chúng ta thấy cái thông báo và sau đó 1 và 2.

Lỗi trong biến không có dấu chấm phẩy xảy ra bởi vì JS không tự ngầm hiểu được một dấu chấm phẩy trước dấu ngặc vuông [...].

Nên vì thế dấu chấm phẩy không tự động được thêm vào, code trong ví dụ đầu tiên được xử lý như là một câu lệnh đơn.

Khuyên bạn rằng nên đặt dấu chấm phẩy giữa các câu lệnh thậm chí chúng được ngăn cách ra từng dòng. Quy tắc này được sử dụng khá phổ biến trong cộng đồng. Đối với người mới bắt đầu, ta nên đặt chúng vào.

### Comment (Lời giải thích)

Comment một dòng bắt đầu với hai dấu gách chéo `//`.
Như thế này:

```sh
alert("I'm Javascript");
alert(3 +
1
+ 2);
alert("I'm Lã Ngọc Sơn");
//Javascript không tự thêm dấu chấm phẩy trước dấu ngặc vuông []
[1, 2].forEach(alert);
// Tốt nhất ta nên thêm dấu chấm phẩy sau mỗi câu lệnh để cho an toàn hơn
```

Comment nhiều dòng `/* nội dung comment */`.

Như thế này:

```sh
/* Một ví dụ với hai message.
Đây là một comment nhiều dòng.
*/
alert('Hello');
alert('World');
```
<a name="3"></a>
## 3. Strict mode (Chế động nghiêm ngặt)

Khi bạn làm việc với Javascript thì bạn có thể sử dụng biến mà chưa cần định nghĩa (hoisting), bạn có thể quên đặt dấu chấm phẩy ở cuối mỗi đoạn code và bạn có thể sử dụng tên những từ khóa để tạo tên biến. Vì thế Strict mode "buộc bạn phải viết chương trình một cách cẩn thận hơn".

### Sử dụng Strict mode

Để sử dụng Strict mode, ta khai báo "use strict" hoặc 'use strict' chỗ mình muốn sử dụng. Có thể đặt trên đầu code hoặc trong một hàm. Nó thể hiện tính toàn cục hoặc tính cục bộ.

### Một số ví dụ khi sử dụng Strict mode

**Khi bạn chưa định nghĩa biến**

```sh
"use strict";

name = "la ngoc son";   //sai vì doman chưa được khởi tạo từ trước
```

**Không chấp nhận delete biến**

```sh
"use strict";

var name = "la ngoc son";

delete domain; //sai vì không được delete
```

**Định nghĩa hai lần**

```sh
"use strict";

var info = {
    email : "langocson8125@gmail.com",
    email : "langocson8130@gmail.com" //sai vì key name bị trùng
};
```

**Khai báo tham số bị trùng**

```sh
"use strict";
function show_name(name, name){ //sai vì tham số domain bị trùng
    // làm gì đó
}
```

**Khai báo tên biến trùng với key**

Các key không được không được sử dụng cho tên biến:

* eval
* arguments
* implements
* interface
* package
* private
* protected
* public
* static
* yield

Việc sử dụng Strict mode sau này qua các bài học chúng ta sẽ được thấy từ từ và hiểu một cách cụ thể hơn. Trong bài học này ta chỉ cần hiểu được strice mode là gì và nó hoạt động như thế nào.
<a name="4"></a>
## 4. Biến và Hằng

### Một biến

Để tạo một biến trong JS, chúng ta cần phải sử dụng từ khóa `let`.

Câu lệnh dưới đây tạo một biến với tên là "message".

`let message;`

Giờ chúng ta có thể thêm dữ liệu vào trong đó bằng việc sử dụng toán tử gán `=`:

```sh
let message;
message = "Hello";
```

Chuỗi đó được lưu vào trong bộ nhớ với biến đó. Chúng ta có thể truy cập nó bằng cách sử dụng tên biến:

```sh
let message;
message = "Hello";
alert(message);
```

Để rút gọn chúng ta có thử gộp việc khai báo biến và gán thành một dòng đơn;

```sh
let message = "Hello";
alert(message);
```

Chúng ta cũng có thể khai báo nhiều biến trong một dòng:

`let user = "Son", age = 19, message = "Hello";`

Nhìn thì có vẻ ngắn hơn nhưng ta không nên làm vậy. Chúng ta nên sử dụng một dong đơn cho mỗi biến.

Nhiều biến thì có vẻ tốn chút thời gian nhưng dễ đọc hơn:

```sh
let user = "Son";
let age = 19;
let message = "Hello";
```

Cũng có người viết nhiều biến như thế này:

```sh
let user = "Son",
    age = 19,
    message = "Hello";
```

**`var` thay cho `let`**

Trong có script cũ mà bạn có thể thấy một keyword khác đó là `var` thay vì `let`:

Từ khóa `var` cũng giống như `let`. Nó cũng khai báo một biến, nhưng nó cũ rồi.

### So sánh với thực tế.

Chúng ta có thể dễ dàng hiểu được khái niệm của một "biến" nếu chúng ta tưởng tượng nó như là một "hộp" chứa dữ liệu, với một miếng dán khi tên trên đó.

Ví dụ, biến `message` có thể được mần tượng như một hộp dán nhãn `message` với giá trị `Hello` trong đó:

![1](http://i.imgur.com/j11YHLE.png)

Chúng ta có thể đặt bất cứ giá trị nào vào trong hộp.

Chúng ta cũng có thể thay đổi nó. Gía trị có thể thay đổi nhiều lần khi cần:

```sh
let message;
message = "Hello";
message = "World";  // giá trị đã thay đổi thành  World
alert(message);
```

Khi giá trị thay đổi, dữ liệu cũ bị xóa đi khỏi biến:

![2](http://i.imgur.com/RBaA0gM.png)

Chúng ta cũng có thể khai báo hai biến và copy dữ liệu từ cái này qua cái khác:

```sh
let hello = "Hello World";
let message;
message = hello;
alert(hello);
alert(message);
```

### Đặt tên biến

Có hai giới hạn cho một tên biến trong JS:

1. Tên biến chỉ chứa các chứ cái, các chữ số, và các ký tự là $ và _.
2. Ký tự đầu tiên không được là một chữ số.

Ví dụ một tên biến hợp lý:

```sh
let userName;
let admin123;
let _=19;
let $="abc";
```

Khi tên biến chứa nhiều từ, nên sử dụng *camelCase*.  Ví dụ: `myVeryLongName`.

Ví dụ cho một tên biến kho hợp lý:

```sh
let 1a;
let my-name;
```

Và cuối cùng tên biến không được sử dụng ngôn ngữ khác tiếng anh. cũng không được đặt tên biến trùng với các từ khóa trong JS.

**Việc gán mà không có `use strict`**

Thường thì chúng ta cần xác định một biến trước kh sử dụng nó. Nhưng trong thời gian trước, ta có thể tạo một tên biến rồi gán giá trị mà không cần dùng đến `let`. Chúng vẫn hoạt động ở thời điểm hiện tại nếu chúng ta không đặt `use strict` vào trong đó.

Ví dụ:

```sh
num = 15;
alert(num);
```

Nhưng nếu ta sử dụng `use strict` thì sẽ xảy ra lỗi như thế này:

```sh
"use strict"
num = 15;   //lỗi: num không được xác định
```

### Hằng

Để khai báo một hằng (biến không đổi), ta sử dụng `const` thay cho `let`:

`const myBỉthDay = "14.02.1998";`

Biến được khai báo bởi `const` thì được gọi là hằng. Chúng không bị thay đổi. Một sử thay đổi có thể tạo ra lỗi. Ví dụ:

```sh
const myBỉrthDay = "14.02.1998";
myBirthDay = "14.09.2017";  //lỗi: không thế tái gán cho hằng
```

### Hằng chữ in hoa

Hằng được đặt tên bằng các chữ hoa và dấu gạch dưới.

Như thế này:

```sh

const COLOR_RED = "#F00";
const COLOR_GREEN = "#0F0";
const COLOR_BLUE = "#00F";

let color = COLOR_GREEN;
alert(color);
```

Là một hằng có nghĩa là giá trị không bao giờ thay đổi. Nhưng có nhiều hằng được biết đến trước khi xử lý, và được tính toán trong thời gian xử lý, nhưng không thay đổi sau khi gán. Ví dụ:

`const pageLoadTime =   //thời gian tải một webpage `

Gía trị của pageLoadTime chưa được biết trước khi tải page, nên nó được đặt tên bình thường. Những nó vẫn là một hằng, bởi vì nó không thay đổi sau khi gán.

### Đặt tên cho đúng

Đặt tên biến là một trong những kỹ năng quan trọng và phức tạp trong lập trình. Nhìn liếc qua là biết một người mới học hay là một người chuyên nghiệp.

Các quy tắc tốt nên tuân theo:

* Sử dụng tên mà có thể được được như `userName` hay `shoppingCart`.
* Tránh các tên biến ngắn như a, b, c, nếu không bạn sẽ không biết nó hoạt động ra sao.
* Tạo các tên chi tiết và đơn giản. Các tên sau đây `value` và `data` không nói lên điều gì cả.

###Tasks

**Làm việc với các biến**

Declare two variables: `admin` and `name`.
Assign the value `"John"` to `name`.
Copy the value from `name` to `admin`.
Show the value of `admin` using `alert` (must output “John”).

Đề bài:

```sh
let admin,
    name;
name = "John";
admin = name;
alert(admin);
```

**Đặt tên đúng**

Create the variable with the name of our planet. How would you name such a variable?
Create the variable to store the name of the current visitor. How would you name that variable?

```sh
let ourNextPlanet = "abc";
let currentVisitor = "Anonymous";
```
<a name="5"></a>
## 5. Các kiểu dữ liệu

Có tổng cộng 7 kiểu dữ liệu trong JS. Nay chúng ta sẽ học các thứ cơ bản, và trong chương tiếp theo chúng ta sẽ tìm hiểu chi tiết về từng cái một.

### Một số

```sh
let n=123;
n=123.456;
```

Kiểu số chứa cả số nguyên và số thập phân.

Có nhiều toán tử cho các số, ví dụ như nhân `*`, chia `/`, cộng `+`, trừ `-`.

Bên cạnh các số bình thường, còn có những số đặc biệt đó là `NaN` và `Infinity`.

`Infinity` hiển thị phép toán vô cực. Nó là một giá trị đặc biệt lớn hơn các số.

Chúng ta có thể nhận được giá trị của nó bằng việc thực hiện một phép chia cho 0:

`alert(1/0); //Infinity`

Hoặc đề cấp trực tiếp đến nó trong code:

`alert(Infinity) //Infinity`

`NaN` hiện thị một lỗi tính toán. Nó là kết quả ủa một toán tử sai hoặc không xác định, ví dụ:

`alert("not a number" / 2);`

### Một chuỗi

Một chuỗi trong JS phải được khai báo trong dấu nháy:

```sh
let str = "John";
let str2 = 'John';
let phrase = `Im ${str1}`;
```

Trong JS, có ba kiểu khai báo:

1. Dấu nháy kép `"John"`
2. Dấu nháy đơn `'John'`
3. Dấu backtick ``

Dấu backtick là chức năng trích dẫn mở rộng. Chúng cho phép nhúng các biến và biểu thức vào một chuỗi bằng việc sử dụng `${...}`, ví dụ:

```sh
let name="John";
alert(`Hello, ${name}`);
alert(`Result is ${1+2}`);
```

Chú ý rằng chỉ có thể chỉ có backticks mới có thể sử dụng `${...}`.

**Không có kiểu ký tự**

Trong nhiều ngôn ngữ, một kiểu ký tự đặc biệt cho một ký tự đơn. Ví dụ, trong ngôn ngữ C và Java là `char`.

Trong JS, không có các kiểu đó. Chỉ có một kiểu `string`. Một chuỗi có thể chứa một hoặc nhiều ký tự.

### Kiểu Boolean (Kiểu logic)

Kiểu Boolean chỉ có hai giá trị là `true` và `false`.

Ví dụ: 

```sh
let nameFiledChecker = true;
let ageFieldChecker = false;
```

Gía trị boolean là kết quả của một sự so sánh:

```sh
let isGreater = 4 > 2;
alert(isGreater);
```

###  Gía trị null

Gía trị đặc biệt `null` không thuộc bất cứ kiểu nào trong các kiểu ở trên.

Nó chỉ có một giá trị là `null`.

`let age = null;`

Ý nghĩa của nó là "không có gì","trống", hoặc "giá trị không biết".

Code ở trên báo rằng `age`` là không biết hoặc trống vì lý do gì đó.

### Gía trị "undefined"

Gía trị đặc biệt `undefined`  có nghĩa là giá trị chưa được gán và không xác định được.

```sh
let x;
alert(x);
```

Nó có thể gán vào biến:

```sh
let x = 123;
x= undefined;
alert(x);
```

### Objects và Symbols

Kiểu `object` là một kiểu đặc biệt. Nó được sử dụng để lưu trữ các sự lựa chọn dữ liệu và các thực thể phức tạm hơn. Chúng ta sẽ đối mặt với nó trong chương Object sau khi chúng ta biết được hết cái cơ bản.

Kiểu `symbol` được sử dụng để tạo một kiểu nhận dạng đặc biệt cho đối tượng. Chúng ta học nó sau khi học Object.

### Toán tử "type of"

Toán tử `typeof` trả về kiểu dữ liệu của argument. Nó rất hữu ích khi chúng ta muốn xử lý các giá trị của các kiểu khác nhau, hoặc muốn kiểm tra nhanh.

Nó hỗ trợ hai dạng cú pháp

1. Là một toán tử `typeof x;`
2. Là một hàm `typeof(x);`

Ví dụ:

```sh
typeof undefined // "undefined"
typeof 0 // "number"
typeof true // "boolean"
typeof "foo" // "string"
typeof Symbol("id") // "symbol"
typeof Math // "object"  (1)
typeof null // "object"  (2)
typeof alert // "function"  (3)
```

Dòng (2) là một lỗi của ngôn ngữ JS.

### Task

```sh
let name = "Ilya";

alert( `hello ${1}` ); // hello 1

alert( `hello ${"name"}` ); // hello name

alert( `hello ${name}` ); // hello Ilya
```
<a name="6"></a>
## 6. Chuyển đổi kiểu dữ liệu (Type Conversions)

### Thành kiểu Chuỗi (String)
Chuyển thành kiểu string khi chúng ta cần một giá trị dạng chuỗi ký tự.

Để chuyển sang kiểu String, ta dùng hàm `String(giá trị)`

Ví dụ:

```sh
let value =  true;
alert(typeof value); // kiể boolean

value = String(value); //chuyển sang kiểu String, lúc này trong value chứa chuỗi "true"
alert(typeof value); // Kiểu String
```

### Thành kiểu số (Number)

Chuyển thành kiểu số xảy ra trong các hàm toán học và các biểu thức một cách tự động.

Ví dụ, khi một phép chia `/`:

`alert("6" / "3") //kết quả là 3, chuỗi trong dấu nghoặc kép được chuyển thành kiểu số`

Chúng ta cũng có thể sử dụng hàm `Number(giá trị)` để chuyển một `giá trị` thafh kiểu số.

```sh
let str = "123";
alert(typeof str); //kiểu string

let num = Number(str);
alert(typeof num);  //kiểu number
```

Hàm `Number` chỉ chuyển một chuỗi có chứa chữ số phù hợp. Nếu chuỗi đó không phải là một chuỗi phù hợp thì sẽ có lỗi, ví dụ:

```sh
let name = Number("tên của tôi là Sơn");

alert(typeof name); //Nan, conversion failed
```

Quy tắc chuyển đổi:

|Gía trị|Trở thành..|
|-------|-----------|
|`undefined`|`NaN`|
|`null`|`0`|
|`true và false`|`1 và 0`|
|`string`|Khoảng trắng từ đầu đến cuối bị xóa bỏ. Sau đó, nếu chuỗi còn lại trống, kết quả là `0`, mặt khác-nó không xác định được thì nó trả về một lỗi với `NaN`.|

Ví dụ:

```sh
alert(Number("   123   ")); // 123
alert(Number("123z")); // NaN (lỗi khi đọc số z)
alert(Numver(true)); // 1
```

**Dấu + nối chuỗi**

Tất cả các toán tử chuyển giá trị thành kiểu số. Ngoại trừ dấu +. Nếu một trong các giá trị được thêm vào là một chuỗi, thì các giá trị **PHÍA SAU NÓ** sẽ chuyển thành kiểu chuỗi. Ví dụ: 

```sh
alert(1 + "2"); // '12'
alert("a" + 2); //'a2'
```

### Thành kiểu Boolean 

Nó xảy ra trong các toán tử logic, ta dùng hàm `Boolean(giá trị)`

Quy tắc chuyển đổi:

1. Một giá trị là `0`, một chuỗi trống, `null`, `undefined`, `NaN` sẽ thành `false`
2. Các giá trị còn lại là `true`

Ví dụ:

```sh
alert(Boolean(1)); //true
alert(Boolean(0)); //false
alert(Boolean("Hello")); //true
alert(Boolean("")); //false
```

**Chú ý**

Chuỗi chỉ có "0" sẽ là `true`

Nhiều ngôn ngữ (củ thể là PHP) xử lý `"0"` là `false`. Nhưng trong JS thì một chuỗi không trống cũng là `true`.

```sh
alert("0"); //true
alert(" "); //true
```

###Task

```
    alert(Number("-9\n"));  //-9
    alert("" + 1 +0); // '10'
    alert("" -1 + 0); // -1
    alert(true + false); // 1
    alert("2" * "3"); // 6 
    alert(2 + "3");  // '23'
    alert(2 + "a"); // '2a'
    alert(4 + 5 +"px"); // '5px'
    alert("$" + 4 + 5); // '$45'
    alert("4" - 2); // 2
    alert("4px" - 2); // NaN
    alert(7/0); // Infinity
    alert(" -9\n" + 5); // phép cộng nên thành nối chuỗi '-9\n5'
    alert(" -9\n" - 5); // -14
    alert(null + 1); // 1
    alert(undefined + 1 ); // NaN
```
<a name="7"></a>
## 7. Các toán tử

### Các khái niệm : "đơn phân", "nhị phân", "số hạng"

Ví dụ:

```
let x =1;
x=-x;
alert(x);  // -1
```

```
let x =1, y= 3;
alert(y-x); // 2
```

### Dấu + gộp chuỗi

Ta thường sử dụng dấu + để tính tổng các số.

Nhưng nếu dấu + được áp dụng cho chuỗi, nó gộp chúng lại:

```
let s = "my" + "string";
alert(s); // "mystring"
```

Chú ý rằng nếu các số hạng là một chuỗi thì sau đó các số hạng còn lại sẽ chuyển thành chuỗi. Ví dụ:

```
alert(1 + '2'); // '12'
alert('1' + 2); // '12'
```

Các toán tử khác thì không bị ảnh hưởng. Ví dụ:

```
alert( '2' - 1); // 1
alert('6' / '2'); // 3
```

### Dấu + chuyển thành số:

Ngoài chức năng ở trên thì dấu + được áp dụng cho một giá trị đơn, nó không ảnh hưởng gì đến các số nhưng nếu số hạng đó không phải là một số thì nó chuyển  số hạng đó thành 1 số. Ví dụ:

```
let x = 1;
alert(+x); //1

let y =-2;
alert(+y); //-2

alert(+true); // 1
alert(+""); // 0 
```

Dấu + ở đây giống Hàm `Number(..)`

Gỉa dụ, nếu bạn lấy giá trị từ các trường trong HTML, nó giá trị đó là các chuỗi.

Bạn phải tính tổng chúng như thế nào:

```
let x ="2";
let y="3";
alert(x + y); //"23"
```

Để tính tổng thì ta làm như sau:

```
let x ="2";
let y ="3";
alert(+x + +y); //5

//nó tương đương
alert(Number(x) + Number(y)); // 5
```

### Chia lấy phần dư

Ví dụ:

```
alert(5 % 2); //1
alert(8 % 3); //2
alert(6 % 3); //0
```

### Lũy thừa

Ta có công thức `a**b`, có nghĩa là a lũy thừa b lần. Ví dụ:

```
alert( 2**2 ); //4
alert( 2**3 ); //8
```

Ngoài ra b còn có thể nhỏ hơn 1. Ví dụ:

```
alert(8 ** (1/2)); 
alert(9 ** (1/3));
```

### Tiền tố hậu tố ++ --

**Hậu tố**

Ví dụ về việc tăng giá trị:

```
let counter = 2;
counter++;
alert(counter); //3
```

Ví dụ cho việc giảm giá trị:

```
let counter = 3;
counter--;
alert(counter); //2
```

**Tiền tố**

Ví dụ cho việc tăng giá trị:

```
let counter = 3;
alert(++counter); // 4
```

Ví dụ cho việc giảm giá trị:

```
let counter = 5;
alert(--counter); // 4
```

Các ví dụ khác về tiền tố hâu tố:

```
let counter = 0;
counter++; //1
++counter; //2
alert(counter); //2
```

```
let counter =0;
alert(counter++); //0
```

```
let counter=2;
alert(2 * counter); //4
counter++;
```

### Toán tử Bitwise

Danh sách các toán tử:

* AND(&)
* OR(|)
* XOR(^)
* NOT(~)
* LEFT SHIFT(<<)
* RIGHT SHIFT(>>)
* ZERO-FILL RIGHT SHIFT (>>>)

### Chỉnh sửa tại chỗ

Chúng ta thường áp dụng một toán tử cho một biến và lưu trữ giá trị mới vào nó.

```
let n=4;
n = n +5;
n = n *2;
```

Để rút ngắn ta viết như sau:

```
let n=4;
n+=5;
n*=2;
```

Các toán tử khác cũng tương tự.

Ví dụ:

```
let x= 5;
x *=2+1;
alert(x); //15
```

### Dấu phẩy (,)

Dấu phẩy rất hiếm khi được sử dụng. Nó dùng để viết code ngắn hơn, nên chúng ta cần biết về nó để hiểu được nó hoạt động ra sao.

Ví  dụ:

```
let a=(1+2, 3+4);
alert(a); //7
```

Ý nghĩa của code trên là: giá trị của a lúc đầu là 1+2 =3 nhưng sau đó có thêm 1 giá trị mới là 3+4=7 nên giá trị của a chính xác là 7.

Nhiều người sử dụng dấu phẩy trong các cấu trúc phức tạp hơn để thêm vài thao tác trong một dong:

```
for(a=1, b= 3,c = a * b; a<10; a++){
    ...
}
```

### Task

Task 1

```
let a =1, b=1;
let c = ++a; // giá trị của c là 2
let b = d++; // giá trị của b là 1
```

Task 2

```
let a= 2;
let x= 1 + (a *=2); giá trị của x là 5
```
<a name="8"></a>
## 8. Các phép so sánh (Comparisions)

Những phép so sánh chúng ta biết được từ toán :

* Lớn hơn, nhỏ hơn `a > b`, `a < b`
* Lớn hơn hoặc bằng, nhỏ hơn hoặc bằng `a >= b`, `a <= b`
* So sánh bằng `a == b`
* Khác nhau `a != b`

### Kết quả là true/false

Ví dụ:

```
alert( 2 > 1 ); //true
alert( 2 == 1 ); //false
alert( 2 != 1); //true
```

So sánh một kết quả được gán cho 1 biến:

```
let result = 5 < 3;
alert(result); //false
```

### So sánh chuỗi

Ví dụ:

```
alert( 'A' > 'Z') // false
alert('Glow' > 'Glee'); // true
alert('Bee' > 'Be') //true
```

Thuật toán so sánh chuỗi

1. So sánh ký tự đầu tiên của mỗi chuỗi
2. Nếu chuỗi đầu tiền lớn hơn (hoặc nhỏ hơn), thì chuỗi đó lớn hơn(hoặc nhỏ hơn)
3. Mặt khác, nếu ký tự đầu tiên bằng nhau, so sánh tiếp đến ký tự thứ hai
4. Lặp đi lặp lại cho tới khi kết thúc chuỗi

###  So sánh các kiểu dữ liệu khác nhau

Khi so sánh các giá trị thuộc các kiểu dữ liệu khác nhau, chúng được chuyển thành kiểu số (Number):

Ví dụ:

```
alert( '2' > 1 ); //true
alert ( '01' == 1 ); //true
```

Với giá trị true/false, true trở thành 1, false trả thành 0:

```
alert( true == 1 ); //true
alert( false == 0 ); //false
```

**Một ví dụ vui**

```
let a = 0;
alert(Boolean(a)); //false

let b ='0';
alert(Boolean(b)); //true

alert(a == b); // true
```

### So sánh bằng cùng kiểu dữ liệu

`===` khác với `==`, tương tự thì `!==` khác với `!=`

Ví dụ:

`alert( 0 === false); //false`

Tương tự với dấu `!==`

### So sánh giữa "null" và "undefined"

So sánh với `===`

`alert( null ===undefined ); // false`

Sai vì khác kiểu dữ liệu

So sánh với `==`

`alert( null == undefined ); // true`

Đây là một quy tắc đặc biệt. Những các giá trị khác lại không thể.

Gía trị `null/undefined` được chuyển thành số: `null` thành 0, trong khi `undefined` thành `NaN`.

Ta áp dụng quy tắc trên cho hai phép so sánh dưới đây:

**So sánh null với 0**

```
alert( null > 0); // false (1)
alert( null == 0); //false (2)
alert(null >= 0); //true (3)
```

Kết quả cuối cùng khẳng định rằng `null` lớn hơn hoặc bằng 0. Thì các so sánh ở trên phải đúng, nhưng chúng lại sai.

Lý do là một so sánh bằng và so sánh ` < > >= <=` hoạt động khác nhau. Khi so sánh nó chuyển `null` thành một số, và xử lý nó như là 0.  Đó là lý do tại sao (3) `null >= 0` lại đúng cùng `null > 0` lại sai.

Mặt khác, `null == undefined` chỉ có 2 cái đó mới có thể bằng nhau và `null == 0` là sai

**So sánh undefined với 0**

Ví dụ:

```
alert( undefined > 0 ); // false (1)
alert( undefined < 0 ); // false (2)
alert( undefined == 0 ); //false (3)
```

Cái số (3) thì không cần phải nói lại.

`undefined` được chuyển thành `NaN`.  và `NaN` là số đặc biệt trả về giá trị `false` cho tất cả các so sánh.

### Task 

```
5 > 4 // true
"apple" > "pineapple" // false
"2" > "12" // true
undefined == null // true
undefined === null //false 
null == "\n0\n" // false
null === +"\n0\n" // false
```
<a name="9"></a>
## 9. Sự tương tác (Interaction)

### alert

Cú pháp: `alert(message);`

Ví dụ: `aler("Hello everyone");`

### promt

Cú pháp `prompt("Tiêu đề","giá trị mặc định");`

Ví dụ: 

```
let name = prompt("What is your name?","Sơn");
alert(`Hello ${name}`);
```

Nếu bạn nhấn CANCEL thì giá trị nhận vào cho `name` là null.

**Chú ý với IE:**
Phải cung cấp giá trị mặc định nếu không thì IE tự thêm giá trị mặc định là identified 

Ví dụ: `let test =prompt("Hello","");`

### confirm

Cú pháp: `result = confirm(question);`

Nó sẽ đưa ra một câu hỏi. Nếu ấn vào OK thì sẽ là true và ấn vào CANCEL thì sẽ là false.

Ví dụ: 

```
let question = confirm("Are you a boy?");
alert(question);
```

### Task

Create a web-page that asks for a name and outputs it.

```sh
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Interaction</title>
    <meta charset="utf-8">
</head>
<body>
<script>
    let name = prompt("What's your name?", "Vin Diesel");
    alert(`Hello ${name} !`);
</script>
</body>
</html>
```

![1](http://i.imgur.com/bw8QnCf.png)
<a name="10"></a>
## 10. Toán tử IF - Else If - Else

### Toán tử If
Toán tử if nhận một điều kiện, kiểm tra nó và - nếu đúng thì xử lý câu lệnh.

Ví dụ: 

```
let year = prompt('In which year was ECMAScript-2015 specification published?', '');

if (year == 2015) alert( 'You are right!' );
```

Có thể thực hiện nhiều hơn 1 lệnh

```
if (year == 2015) {
  alert( "That's correct!" );
  alert( "You're so smart!" );
}
```

### Điều kiện

`if(...)` chỉ nhận hai giá trị `true` hoặc `false`

* Số 0, một chuỗi chống `""`, `null`, `undefined`, và `NaN` đều là `false`
* Các giá trị còn lại đều là `true`

### Vế else cho một điều kiện ngược lại

Ví dụ:

```
        let name = prompt("Tên của tao là gì?","");
        if (name == "Sơn") alert("Đúng");
        else {
            alert("Sai rồi nhé");
            alert("Ngôn lù");
        }
```

### Nhiều điều kiện khác nhau

Ví dụ:

```
        let name = prompt("Tên của tao là gì?","");
        if (name == "Sơn") {
            alert("Đúng");
        }
        else if (name == "sơn") {
            alert("Đúng");
        }
        else if (name == "son") {
            alert("Đúng");
        }
        else {
            alert("Sai rồi nhé");
            alert("Ngôn lù");
        }
```

### Toán tử ba ngôi "?"

Cú pháp là 
`let result = điều kiện ? giá trị 1 :  giá trị 2;`

Vi dụ:

```
let age = prompt("Ban bao nhieu tuoi","");
let result = (age >= 18) ? "Bạn đủ tuổi rồi nhé" : "Còn non lắm";
alert(result);
```

Có thể dùng nhiều dấu "?", ví dụ:

```
let result2 = (myBirth < 1998) ? "Hơi sớm đó" :
(myBirth > 1998) ? "Hơi muộn đó" :
"Đúng rồi";
alert(result2);
```

### Sử dụng cách phi truyền thống

Ví dụ:

```
let age = prompt("Ban bao nhieu tuoi","");
(age >= 18) ? "Bạn đủ tuổi rồi nhé" : "Còn non lắm";
alert(result);
```

Ta không nên sử dụng cách này.

### Task

**Task 1:**

Will `alert` be shown?

```
if ("0") {
  alert( 'Hello' );
}
```

Tất nhiên là `alert` sẽ được chạy vì điều kiện "0" được chuyển thành giá trị `true` nên điều kiện đúng.

**Task 2:**

Using the `if..else` construct, write the code which asks: `‘What is the “official” name of JavaScript?’`

If the visitor enters `“ECMAScript”`, then output `“Right!”`, otherwise – output: `“Didn’t know? ECMAScript!”`.

```
let name = prompt("What is the "official" name of JS?","");
let result = (name == "ECMAScript") ? "Right!" : "Didn’t know? ECMAScript!";
```

**Task 3:**

Using `if..else`, write the code which gets a number via `prompt` and then shows in `alert`:

* `1`, if the value is greater than zero,
* `-1`, if less than zero,
* `0`, if equals zero.

```
let number = prompt("Insert a number","");
let result = ( number > 0) ? 1 :
(number < 0) ? -1 :
0;
alert(result);
```

**Task 4:**

Write the code which asks for a login with prompt.

If the visitor enters "Admin", then prompt for a password, if the input is an empty line or Esc – show “Canceled.”, if it’s another string – then show “I don’t know you”.

The password is checked as follows:

* If it equals “TheMaster”, then show “Welcome!”,
* Another string – show “Wrong password”,
* For an empty string or cancelled input, show “Canceled.”

```
    "use strict";
    let userName = prompt("Input username","");
    if (userName == "Admin") {

        let passWord = prompt("Input password","");
        if (passWord == "TheMaster") 
            alert("Welcome");
        else if (passWord == false) 
            alert("Canceled");
        else 
            alert("Wrong password");
    }
    else if (userName == false) 
        alert("Canceled");
    else 
        alert("I dont know you");
```

**Task 5:**

```
result = (a + b < 4) ? "Below" : "Over";
```

**Task 6:**

```
let message = (login == 'Employee') ? 'Hello' :
(login == 'Director') ? 'Greetings' : 
(login == '') ? 'No login' :
'';
```
<a name="11"></a>
## 11. Toán tử logic (OR AND NOT)

### || (OR)

Toán tử "OR" với cú pháp là `||`

Cú pháp: `result = a || b`

Thứ tự thực hiện:

* 1. Kiểm gia các số hạng theo thứ tự từ trái sang phải
* 2. Với mỗi giá trị - chuyển nó thành kiểu boolean. Nếu nó đúng thì dừng lại lại và trả về giá trị đó
* 3. Nếu tất cả các giá trị đều đúng hoặc đều sai thì nó trả về giá trị cuối cùng.

Ví dụ:

```
alert( 1 || 0); //1
alert( true || "one string"); // true
alert( null || 1); // 1
alert( null || 0 || 1); //1
alert( null || undefined || 0); //0
```

Sử dụng `||` trong câu lệnh IF

```
    let hour = 9;
    if (hour < 20 || hour >30) {
        alert("Right condition");
    }
```

Thêm một ví dụ nữa với

```
let hour = 12;
let isWeekend = true;
if (hour < 10 || hour > 18 || isWeekend) {
  alert( 'The office is closed.' );
}
```

Chọn giá trị đúng đầu tiên

```
let currentUser = null;
let defaultUser = "Son";
let name = currentUser || defaultUser || "chưa đặt tên";
alert( name ); 
```
 
Vì điều kiện `defaultUser` đúng đầu tiên nên nó sẽ gán giá trị của của `defaulUser` cho `name`.

**Ta có thê sử dụng || OR thay cho lệnh IF**

Ví dụ:

```
let x;
true || (x = 1);
alert(x);
```

Ở đây x nhận giá trị là undefined (undefined chuyển qua dạng boolean là false) nên không đúng điều kiện để thực hiện lệnh gán x =1, và sau đó khi dùng lệnh alert(x) thì nó sẽ hiện ra là undefined.

Để gán cho x=1 thì ta phải sửa true thành false:

```
let x;
false || (x=1);
alert(x);
```
Lúc này x được in ra giá trị là 1.

### && (AND)

Cú pháp: ` result = a && b;`

Thứ tự thực hiện

* 1. Xem xét từng số hạng từ trái sang phải
* 2. Với mỗi giá trị chuyển nó thành dạng boolean - nếu kết quả là `false`, dừng lại và trả về giá trị sai ban đầu.
* 3. Nếu tất cả các giá trị đúng, nó trả về giá trị cuối cùng. 

Ví dụ:

```
alert( 1 && 5); // 5
alert( 1 && 0); // 0
alert( null && 5); //null
alert( 0 && "La Ngoc Son"); // 0
alert( 1 && 2 && null && 3); //null
alert( 1 && 2 && 3); //3
```

**Xét về mặt ưu tiên thì AND `&&` được ưu tiên hơn OR `||`**

Ví dụ:

`alert( 5 || 1 && 0 ); `

Lúc này nó sẽ in ra giá trị là 5 vì `1 && 0` được xử lý trước và đưa ra kết quả là `0`. Sau đó nó sẽ xử lý `5 || 0` và đưa ra kết qua là 5.

Ví dụ sử dụng && trong câu lệnh If

```
    let hour = 14;
    let minute = 30;
    if (Hour == 14 && Minute == 30) {
        alert("Now is 14:30");
    }
```


**Ta có thể sử dụng && AND thay cho câu lệnh If**

Ví dụ:

```
let x = 1;
(x > 0) && alert("It greater than 0");
```

### ! (NOT)

Cú pháp: `result = !value;`

Thứ tụ thực hiện:

* 1. Chuyển nó sang kiểu boolean: `false/true`
* 2. Trả về giá trị ngược lại.

Ví dụ:

```
alert(!true); //false
alert(!0); //true
alert(!"langocson"): //false
```

**Sử dụng hai dấu !!**

Hai dấu !! có chức năng chuyển nó thành kiểu boolean `true/false`

Ví dụ:

```
alert(!!"La Ngoc Son"); // true
alert(!!null); //false
```

### Task

Task 1: What the code below is going to output?

`alert( null || 2 || undefined );`

Nó sẽ in ra 2.

Task 2: What the code below is going to output?

`alert( alert(1) || 2 || alert(3) );`

Đầu tiên là hiện ra 1 sau đó là 2.

`alert(1)` nó sẽ in ra 1 những alert chính nó vẫn nhận là `undefined`, sau đó nó qua điều kiện tiếp theo là 2 và điều điện này đúng. Nó in ra 2.

Task 3: What this code is going to show?

`alert( 1 && null && 2 );`

Nó sẽ in ra `null`

Task 4: What this code is going to show?

`alert( alert(1) && alert(2) );`

Nó sẽ in ra 1 và sau đó là `undefined` vì nó thực hiện `alert(1)` đề in ra 1 nhưng alert chính nó nhận giá trị là `undefined` và giá trị này `false` nên alert chính sẽ in ra `undefined`.

Task 5: What will be the result?

`alert( null || 2 && 3 || 4 );`

Nó sẽ in ra 3.

Task 6: 

Write an “if” condition to check that age is between 14 and 90 inclusively.

“Inclusively” means that age can reach the edges 14 or 90.

`if(age >=14 && age <= 90)`

Task 7: 

Write an if condition to check that age is NOT between 14 and 90 inclusively.

Create two variants: the first one using NOT !, the second one – without it.

`if(age<14 && age >90)`

Có sử dụng !

`if(!(age>=14 && age <=19))`

Task 8:

Which of these alerts are going to execute?

What will be the results of the expressions inside if(...)?

```
if (-1 || 0) alert( 'first' ); //(1)
if (-1 && 0) alert( 'second' ); //(2)
if (null || -1 && 1) alert( 'third' ); //(3)
```

Chỉ có (1) và (3) có thực hiện được vì điều kiện đúng.
<a name="12"></a>
## 12. Vòng lặp

### Vòng lặp for

Cú pháp:

```
while(điều kiện) {
    code...
}
```

Ví dụ:

```
let i = 0;
while(i<3) {
    alert(i);
    i++;
}
```

Ví dụ, một cách ngắn hơn để viết `while(i!=0)` là `while(i)`

```
let i = 3;
while(i) { // khi mà i=0 thì vòng lặp dừng lại
    alert(i); 
    i--;
}
```

### Vòng lặp do...while

Cú pháp:

```
do {
    code...
}
while(điều kiện);
```

Vòng lặp sẽ xử lý code, sau đó kiểm tra điều kiện, nếu đúng thì tiếp tục thực hiện code, nếu sai thì dừng vòng lặp. Ví dụ:

```
let i=0;
do {
    alert(i);
    i++;
}
while(i<3);
```

### Vòng lặp for

Cú pháp:

```
for(bắt đầu, điều kiện, step) {
    code...
}
```

Ví dụ:

```
for(let i=0; i <4; i++) {
    alert(i);
}
```

Nếu khai báo biến trong vòng lặp thì ta không thể sử dụng biến đó ngoài vòng lặp. Để sử dụng được ta phải khai báo biến ở ngoài.

Ví dụ cho việc khai báo biến trong vòng lặp:

```
for(let i =0; i <3; i++) {
    alert(i);
}
alert(i); //ở đây nó sẽ không xác định được giá trị của i
```

Ví dụ cho việc khai báo biến ở ngoài vòng lặp:

```
let i;
for(i=0; i <3; i++) {
    alert(i);
}
alert(i); //giá trị in ra ở đây là 3
```

### Bỏ qua các bộ phận

Các bộ phần của vòng lặp `for` có thể bỏ qua.

Ví dụ:

```
let i=0;
for(;i<3;i++){
    alert(i);
}
```

Ví dụ nếu bỏ `step` sẽ tạo ra vòng lặp vô hạn:

```
let i =0;
for(;i<3;) {
    alert(i);
}
```

Vòng lặp vô hạn có thể được viết như sau:

```
for(;;) {
    code...
}
```

### Thoát vòng lặp

Ta sử dụng lệnh `break` để thoát khỏi vòng lặp đơn.

Ví dụ:

```
for(let i = 0; i <10;i++){
    alert(i);
    if(i == 5) break;
}
```

Nếu i = 5 thì nó sẽ dừng vòng lặp bằng lệnh `break` mặc cho điều kiện của vòng lặp.

### Thoát khỏi 1 bước lặp

Bạn không muốn lặp 1 lần nào đó và muốn chuyền qua lần lặp tiếp theo thì ra dùng lệnh `continue`. Ví dụ:

```
for(let i = 0; i<10; i++){
    if(i% 2 == 0) continue;
    alert(i); //tìm các số lẻ, kết quả à 1 3 5 7 9
}
```

Ví dụ trên cũng được viết ngắn lại như sau:

```
for(let i=0; i<10; i++){
    if(i%2){
        alert(i);
    }
}
```

Ở đây nếu i chia lấy phần dư cho 2 mà bằng 1 thì nó in ra giá trị của i, tường tự với code ban đầu, nếu i chia hết cho hai thì nó sẽ bỏ qua lần lặp đó.

### Thoát khỏi đa vòng lặp

Chẳng hạn vòng lặp của bạn chỉ là vòng lặp đơn thì việc sử lệnh break để thoát khỏi nó thì đơn gian. Nhưng nếu vòng lặp này chứa vòng lặp khác và có thể chứa nhiều vòng lặp thì ko thể. 

Để thoát khỏi được phòng lặp nhiều lớp như vậy, ta sử dụng Nhãn.

Cú pháp: 
```
tenNhan: for(...) {
    code...
}
```

Trong đó `tenNhan` là tên của nhãn đó đi kèm với dấu :

Ví dụ cho việc thoát vòng lặp sử dụng nhãn kết hợp break.

```
newLabel:
for(let i =0; i<3; i++) {
    for(let j=0; j<3; j++) {
        if(j==2) break newLabel;
    }
}
alert("Break to newLabel successfully!");
```

### Task 

Task 1: What is the last value alerted by this code? Why?

```
let i = 3;

while (i) {
  alert( i-- ); 
}
```

Gía trị cuối cùng là 1

Task 2: For every loop, write down which values it shows, in your opinion. And then compare with the answer. Both loops alert same values or not?

```
let i = 0;
while (++i < 5) alert( i );
```

Các giá trị in ra là 1 2 3 4

```
let i = 0;
while (i++ < 5) alert( i );
```

Các giá trị in ra là 1 2 3 4 5

Task 3: For each loop write down which values it is going to show. Then compare with the answer. Both loops alert same values or not?

`for (let i = 0; i < 5; i++) alert( i );`

`for (let i = 0; i < 5; ++i) alert( i );`

Cả hai đều in ra 0 1 2 3 4

Task 4: Use the for loop to output even numbers from 2 to 10.

`for(let i=2; i<=10;i+=2) alert(i);`

Task 5: Rewrite the code changing the for loop to while without altering it’s behavior (the output should stay same).

```
for (let i = 0; i < 3; i++) {
  alert( `number ${i}!` );
}
```

==>

```
let i=0;
while(i<3) {
    alert(`number ${i}!`);
    i++;
}
```

Task 6: Write a loop which prompts for a number greater than 100. If the visitor enters another number – ask him to input again.

The loop must ask for a number until either the visitor enters a number greater than 100 or cancels the input/enters an empty line.

Here we can assume that the visitor only inputs numbers. There’s no need to implement a special handling for a non-numeric input in this task.

```
let number;
        do {
        number = prompt("Insert a number greater than 100","");
        }
        while(number<=100);
        alert("Done");
```

Task 7: Tìm các số nguyên tố từ 1 đến n

```
let n=prompt("Insert n","");

nextPrime:
for(let i=2;i<=n;i++){
    for(let j=2;j<i;j++){
        if (i%j==0) {
            continue nextPrime; // nếu i chia hết cho j thì bỏ qua lần lặp đó
        }
    }
    alert(i);
}
```
<a name="13"></a>
## 13. Witch..case

Cú pháp:

```
switch(x) {
    case 'value1': 
    ...
    [break]
    case 'value2':
    ...
    [break]
    ...
    default:
    ...
    [break]
}
```

Ví dụ:

```
let a = 4;
switch (a) {
  case 3:
    alert( 'Qúa nhỏ' );
    break;
  case 4:
    alert( 'Chính xác' );
    break;
  case 5:
    alert( 'Qúa lớn' );
    break;
  default:
    alert( "Không biết giá trị đó" );
}
```

Ta sử dụng `break` để nhưng kiểm tra các `case` khác. Nếu ta không sử dụng `break` thì nó sẽ như thế nào. Ví dụ:

```
let a = 4;
switch (a) {
  case 3:
    alert( 'Qúa nhỏ' );
  case 4:
    alert( 'Chính xác' );
  case 5:
    alert( 'Qúa lớn' );
  default:
    alert( "Không biết giá trị đó" );
}
```

Lúc này nó sẽ chạy 3 case liên tiếp

```
alert('Chính xác');
alert('Qúa lớn');
alert('Không biết giá trị đó');
```

Trong `switch` và `case` đều có thể đặt một biểu thức. Ví dụ:

```
let a = "1";
let b = 0;

switch (+a) {
  case b + 1:
    alert( 1 );
    break;

  default:
    alert('Không. nhìn code phía trên á, nó được xử lý');
}
```

### Nhóm các case lại

Ví dụ nhóm `case 3` và `case 5` lại:

```
let a = 4;

switch (a) {
  case 4:
    alert('Đúng');
    break;

  case 3:                    // nhóm case
  case 5:
    alert('Sai');
    alert('Đi học lại toán là được rồi');
    break;

  default:
    alert('Gía trị lạ');
```

### Cùng kiểu dữ liệu

Khi kiểm tra từng case, thì giá trị của case đó phải cùng kiểu dữ liệu với biến được xét.

Ví dụ:

```
let arg = prompt("Nhập một giá trị")
switch (arg) {
  case '0':
  case '1':
    alert( 'Một hoặc không' );

  case '2':
    alert( 'Hai' );
    break;

  case 3:
    alert( 'Không xử lý' );

  default:
    alert( 'Một giá trị không biết' )
}
```

Lúc này `case 3` là kiểu số còn giá trị của `arg` là kiểu chuỗi nên ở đây có một code chết ở `case 3`. Nếu ta nhập 3 vào `arg` thì `default` sẽ xử lý.

### Task

Task 1: Write the code using if..else which would correspond to the following switch

```
switch (browser) {
  case 'Edge':
    alert( "You've got the Edge!" );
    break;

  case 'Chrome':
  case 'Firefox':
  case 'Safari':
  case 'Opera':
    alert( 'Okay we support these browsers too' );
    break;

  default:
    alert( 'We hope that this page looks ok!' );
}
```

Chuyển thành:

```
        let browser = prompt("What browser are you using?","");
        if (browser == "Edge") {
            alert("You've got the Edge");
        }
        else if( browser == "Chrome" ||
                 browser == "Firefox"||
                 browser == "Safari" ||
                 browser == "Opera") {
            alert("Okey we support these browser too");
        }
        else alert("We hope that this page looks ok");
```

Task 2: Rewrite the code below using a single switch statement

```
let a = +prompt('a?', '');

if (a == 0) {
  alert( 0 );
}
if (a == 1) {
  alert( 1 );
}

if (a == 2 || a == 3) {
  alert( '2,3' );
}
```

Chuyển thành:

```
let a = +prompt("a?","");
switch(a) {
    case 0:
        alert(0);
        break;
    case 1: 
        alert(1);
        break;
    case 2:
    case 3:
        alert("2,3");
}
```
<a name="14"></a>
## 14. Hàm (function)

Ví dụ:

```
function showMessage() {
  alert( 'Hello everyone!' );
}
```

![1]()

Để chạy hàm đó ta gọi tên hàm đó ra, có thể gọi nhiều lần liên tiếp;

```
function showMessage() {
  alert( 'Hello everyone!' );
}
showMessage();
showMessage();
```

### Biến "nội bộ" (Local Variables)

Là biến được khai báo trong một hàm và chỉ có thể dùng được biến đó trong hàm đó. Ví dụ:

```
function showMessage() {
  let message = "Hello, I'm JavaScript!"; 
  alert( message );
}
showMessage();
alert( message );// ở đây sẽ có lỗi vì không biết biến message là gì
```

### Biến ngoại (Outer Variables)

Biến có thể sử dụng ở mọi nơi. Ví dụ:

```
let userName = 'John';

function showMessage() {
  let message = 'Hello, ' + userName;
  alert(message);
}
showMessage();
```

Một hàm có thể làm thay đổi giá trị của biến ngoại đó. Ví dụ:

```
let userName = 'John';
function showMessage() {
  userName = "Bob"; 
  let message = 'Hello, ' + userName;
  alert(message);
}
alert( userName ); // ở đây sẽ là John
showMessage();
alert( userName ); // ở đây là Bob
```

Nếu biến ngoại và biến nội cùng tên nhưng khác giá trị thì hàm sẽ chỉ sử dụng biến nội. Còn giá trị của biến ngoại vẫn được giữ nguyên. Ví dụ:

```
let userName = 'John';
function showMessage() {
  let userName = "Bob"; // khai báo một biến nội
  let message = 'Hello, ' + userName; // ở đây userName là Bob
  alert(message);
}
showMessage(); 
alert( userName ); // ở đây là John
```

### Các tham số

Như các ví dụ trên thì không có tham số, để truyền tham số vào ta làm như sau, đưới đây là ví dụ:

```
function showMessage(from, text) {
  alert(from + ': ' + text);
}
showMessage('Ann', 'Hello!');
```

Ở đây biến form được gán giá trị là "Ann" và biến text được gán giá trị là "Hello".

Ta cũng có thể truyền vào bằng một biến, ví dụ:

```
function showMessage(from, text) { // arguments: from, text
  alert(from + ': ' + text);
}
let from = 'Ann';
showMessage(from, 'Hello!');
```

### Gía trị mặc định

Nếu một tham số không được gán giá trị thì nó sẽ nhận giá trị cho tham số đó là `undefined`. Ví dụ:

```
function showMessage(from, text) { // arguments: from, text
  alert(from + ': ' + text);
}
showMessage('Ann');
```

Ở đây, giá trị của `text===undefined`

Để đặt giá trị mặc định cho `text`, ta làm như sau:

```
function showMessage(from, text = "hello") {
  alert( from + ": " + text );
}
showMessage("Ann");
```

Ở đây giá trị mặc định cho `text = "Hello"`. Gía trị cho text cũng có thể là một hàm. Ví dụ:

```
function showMessage(from, text = motHamKhac()) {
}
```

**Chú ý**

Với phiên bản JS cũ thì không có hỗ trợ giá trị mặc địch thì ta làm như sau:

```
function showMessage(from, text) {
  if (text === undefined) {
    text = 'Hello';
  }
  alert( from + ": " + text );
}
```

Hoặc dùng `||`

```
function showMessage(from, text) {
  text = text || 'no text given';
  ...
}
```

### Trả về một giá trị

Ta dùng `return`. Nó sẽ trả về giá trị của hàm đó và kết thúc hàm. Ví dụ:

```
function sum(a, b) {
  return a + b;
}
alert(sum(1,2));
```

Một ví dụ nữa về `return`

```
function checkAge(age) {
if (age > 18) return true;
else return confirm('Got a permission from the parents?');
}
let age = prompt('How old are you?', '');
if ( checkAge(age) ) {
  alert( 'Access granted' );
} else {
  alert( 'Access denied' );
}
```

**Chú ý**
Nếu sau `return` không có gì hoặc hàm không có `return` thì coi như hàm đó trả về `undefined`.

Ví dụ về không có `return`L

```
function doNothing() {
}
alert( doNothing() === undefined ); // nó sẽ in ra true
```

Ví dụ về sau `return` không có gì:

```
function doNothing() {
  return; // sau return không có gì
}
alert( doNothing() === undefined ); // nó in ra true
```

Nếu một biểu thức dài mà muốn `return` thì nên để biểu thức đó ở một dòng riêng và sau `return` không được thêm dấu ; Ví dụ:

```
return
 (some + long + expression + or + whatever * f(a) + f(b));
```

Ví du: tìm các số nguyên tố trong khoảng từ 2 đến n, ở đây mình gán n bằng 10

```
function showPrime(n){ //hàm in ra số nguyên tố
    for(let i=2;i<n;i++){
        if (!isPrime(i)) continue; 
        alert(i);
    }
}
function isPrime(n){  //hàm kiểm tra số nguyên tố
    for(let i=2;i<n;i++){
        if( n % i==0) return false;
    }
        return true;
}
showPrime(10);
```

Ở chỗ `isPrime(n)`, n ở đây được gán giá trị là i của hàm `showPrime`

### Task

Task 1: Is there any difference in the bahavior of these two variants?

```
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    // ...
    return confirm('Did parents allow you?');
  }
}
```

```
function checkAge(age) {
  if (age > 18) {
    return true;
  }
  // ...
  return confirm('Did parents allow you?');
}
```

Hai đoạn code này không khác nhau.

Task 2: Rewrite the function using '?' or '||'

```
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    return confirm('Did parents allow you?');
  }
}
```

```
function checkAge(age){
    return (age > 18) ? true : confirm('Did parent allow you');
}
```

```
function checkAge(age) {
    return (age > 18) || confirm('Did parent allow you');
}
```

Task 3: Write a function min(a,b) which returns the least of two numbers a and b.

```
let a = prompt('Insert a: ','');
let b = prompt('Insert b: ','');

function getMin(a,b){
    if(a>b) return b;
    if(b>a) return a;
}
alert(getMin(a,b));
```

Task 4: Write a function pow(x,n) that returns x in power n. Or, in other words, multiplies x by itself n times and returns the result.

```
let x = prompt('Insert x: ','');
let n = prompt('Insert y: ','');
function getPow(x,n){
    for(let i =1; i<n; i++){
        x *= x;
    }
        return x;
}
alert(getPow(x,n));
```
<a name="15"></a>
## 15. Function biểu thức và con trỏ (mũi tên)

Cú pháp mà chúng ta sử dụng để khai báo một hàm gọi là Function Declaration:

```
function sayHi(){
    alert("Hi"):
}
```

Một cú pháp khác để tạo một hàm gọi là Function Expression:

```
let sayHi = function(){
    alert("Hi");
};  // chú ý dấu chấm phấy ";" ở đây
```

Ở đây hàm được tạo và được gán cho bộ biến xác định, giống như một giá trị được lưu trong biến `sayHi`.

Ý nghĩa của code trên là tạo một hàm và đặt vào trong biến `sayHi`

Chúng ta cũng có thể in ra ngoài giá trị bằng việc sử dụng `alert`:

```
function sayHi(){
    alert("Hi");
}
alert(sayHi);
```

Lúc này nó sẽ in ra ngoài giá trị đưới dây:

![1](http://i.imgur.com/fwVIvj3.png)

Chú ý rằng dòng cuối cùng không phải dòng cuối cùng không chạy hàm, bởi vì không có dấu ngoặc tròn "()" sau `sayHi`.

Chúng ta có thể copy một hàm cho một biến:

```
function sayHi(){
    alert("Hi");
}
let func = sayHi; 
// copy giá trị của hàm sayHi cho biến func và func trở thành 1 hàm
func();     // "Hi"
sayHi():    // "Hi"
```

Chú ý rằng chúng ta cũng có thử sử dụng một Function Expression để khai báo `sayHi`:

```
let sayHi = function(){...}; // chú ý dấu chấm phẩy
let func = sayHi;
```

**Tại sao lại có dấu chấm phẩu ở cuối**

Bởi vì đây không phải là một khối lệnh được đặt trong { các lệnh } mà ta hiểu đây là một lệnh đơn thuần là gán giá trị cho `sayHi` với giá trị là `function{...}` nên ta phải kết thúc lệnh bằng dấu chấm phẩy.

### Gọi lại các hàm (Callback function3)

Chúng ta cùng xem vài ví dụ về việc truyền hàm cho một giá trị và sử dụng function expression.

Chúng ta sẽ viết một hàm `ask(question, yes, no)` với ba tham số:

```
function ask(question, yes, no){
    if(confirm(question)) yes();
    else no();
}

function showOk(){
    alert('You clicked OK');
}

function showCancel(){
    alert('You clicked Cancel');
}
ask("Do you know me?",showOk,showCancel);
```

Ta copy giá trị hàm `showOk` cho biến `yes` và nó trở thành hàm `yes()`. Ta truyền giá trị của `showCancel` cho biến `no` và nó trở thành hàm `no()`.

Ta cũng có thể viết lại như sau:

```
function ask(question, yes, no){
    if(confirm(question)) yes;
    else no;
}

function showOk(){
    alert('You clicked OK');
}

function showCancel(){
    alert('You clicked Cancel');
}
ask("Do you know me?",showOk(),showCancel());
```

Hoặc viết ngắn gọn hơn nữa:

```
function ask(question, yes, no){
    if(confirm(question)) yes();
    else no();
}
ask(
    "Do you know me?",
    function() { alert("You clicked OK"); },
    function() { alert("You clicked Cancel"); }
    );
```

### Function Expression với Function Declaration

Khai báo Function Declaration:

```
function sum(a, b){
    return a + b;
}
```

Khai báo Function Expression:

```
let sum = function(){
    return a + b;
};
```

### Về việc gọi hàm ra để sử dụng

Đối với Function Declaration, thì ta có thể gọi ra để sử dụng ở mợi nơi vì khi xử lý code, nó sẽ quét hết những chỗ khởi tạo hàm trước rồi mới đến việc xử lý gọi hàm. Ví dụ:

```
sayHi("Son");
function sayHi(name){
    alert(`Hello ${name}`);
}
sayHi("SoN");
```

Còn đối với Function Expression thì không thể gọi tùy tiện mà phải khởi tạo trước rồi mới được gọi. Ví dụ:

```
sayHi("Son"); // có lỗi ở đây

let sayHi = function(name) { 
  alert( `Hello, ${name}` );
};
```

Thay vì đặt ở trên, ta đặt ở dưới:

```
let sayHi = function(name) { 
  alert( `Hello, ${name}` );
};
sayHi("Son");
```

### Function Declaration trong một khối lệnh

Nếu Function Declaration được khai báo trong một khối lệnh thì việc sử dụng ở bên ngoài là không thể. Ví dụ:

```
let age = 16;
if(age < 18){
    welcome(); //code chạy bình thường
    function welcome(){
        alert("Too young");
    }
}
else {
    function welcome(){
        alert("Old enough");
    }
}
welcome(): //code xảy ra lỗi vì welcome() được khai báo trong 1 khối lệnh
```

Để sử dụng ở mọi nơi, ta sử dụng Function Declaration. Ví dụ:

```
let age = prompt("How old are you","");
let welcome;
if(age < 18){
    welcome = function(){
        alert("Too young"):
    };
}
else {
    welcome = function(){
        alert("Old enough");
    };
}
welcome(); 
```

Ý nghĩa của code trên là ứng với mỗi điều kiện đúng thì giá trị của welcome được gán với một hàm. Và việc gọi hàm ra ở ngoài là đúng vì ta đã khai báo welcome ở ngoài.

Ta rút ngắn code bằng cách sử dụng dấu `?`:

```
let age = prompt("How old are you","");
let welcome = (age < 18) ? 
    function(){ alert("To young"); } : 
    function(){ alert("Old enough"); };
welcome();
```

### Hàm con trỏ (Mũi tên)

Có một cách khác ngăn gọn hơn để khai báo hàm. Cú pháp:

`let func = (param1, param2, ...) => biểu thức;`

Cú pháp ở trên có ý nghĩa như sau

```
let func = (param1, param2, ...) {
    return biểu thức;
}
```

Ví dụ: Có nhiều tham số
```
let sum = (a, b) => a + b;
alert(sum(1, 2));
```

Ví dụ: có 1 tham số

```
let double = (n) => n*2;
alert(double(4));
```

Ví dụ: không có tham số

```
let sayHi = () => alert('Hello');
alert(sayHi);
```

Sử dụng dấu `?`

```
let age = prompt('How old are you','');
let welcome = (age < 18) ?
    () => alert("Too young") : 
    () => alert("Old enough");
welcome();
```

Sử dụng nhiều còn trỏ:

Nếu sau `=>` là một khối lệnh, thì trong khối lệnh đó phải sử dụng return để trả về kết quả. Ví dụ:

```
let sum = (a, b) =>{
    let result = a + b;
    return result;
};
alert(sum(1, 2));
```

### Task

Replace Function Expressions with arrow functions in the code:

```
function ask(question, yes, no) {
  if (confirm(question)) yes()
  else no();
}

ask(
  "Do you agree?",
  function() { alert("You clicked OK"); },
  function() { alert("You clicked Cancel"); }
);
```

```
function ask(question, yes, no) {
    if(confirm(question)) yes();
    else no();
};
ask("Do you know me?",
    () =>  alert('You clicked OK') ,
    () =>  alert('You clicked Cancel')
    );
```
