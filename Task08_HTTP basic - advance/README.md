#BÁO CÁO TASK 09 - Giao thức HTTP cơ bản và nâng cao
>Nguồn tham khảo: [Vietjack](http://vietjack.com/http/) , [Tutsplus](https://code.tutsplus.com/tutorials/http-the-protocol-every-web-developer-must-know-part-1--net-31177) & Wikipedia
>
>Người thực hiện: Lã Ngọc Sơn
>
>Cập nhật ngày: 7/3/2017

>-----------------------------------
>
>###[1.HTTP là gì](#1)
>
>###[2.Các tham số trong HTTP](#2)
>
>###[3.Thông báo (Message) trong HTTP](#3)
>
>###[4.Yêu cầu(Request) trong HTTP](#4)
>
>###[5.Phản hồi(Reponse) trong HTTP](#5)
>
>###[6.Phương thức(Method) trong HTTP](#6)
>
>###[7.Mã hóa trạng thái trong HTTP](#7)
>
>###[8.Các trường Header trong HTTP](#8)
>
>###[9.Mã hóa URL trong HTTP](#9)

>---------------------------------------

<a name="1"></a>
##1.HTTP là gì

HTTP là một giao thức cấp độ ứng dụng cho các hệ thống thông tin phân phối, cộng tác, đa phương tiện. Đây là nền tảng giao tiếp dữ liệu cho WWW từ năm 1990.

![](http://i.imgur.com/5d7tnhZ.png)

HTTP là một giao thức giao tiếp trên nền TCP/IP, mà được sủ dụng để phân phối cá dữ liệu (các tệp HTML, các file ảnh,...) trên WWW.

Cổng mặc định là 80, các cổng khác cũng có thể được sử dụng.

**Các đặc trưng cơ bản**

![](http://i.imgur.com/UUD0vxg.gif)

* **HTTP là giao thức connectionless ( kết nối không liên tục )**:  Client của HTTP, ví dụ: một trình duyệt khởi tạo một yêu cầu HTTP và sau đó một yêu cầu được tạo ra, Client ngắt kết nối từ Server và đợi cho một phản hồi. Server xử lý yêu cầu và thiết lập lại sự kết nối với Client để gửi phản hồi trở lại.

* **HTTP là một phương tiện độc lập**: Nó nghĩa là, bất kỳ loại dữ liệu nào cũng có thể được gửi bởi HTTP miễn là Server và Client biết cách để kiểm soát nội dung dữ liệu. Nó được yêu cầu cho Client cũng như Server để xác định kiểu nội dung bởi sử dụng kiểu MIME thích hợp.

* **HTTP là stateless**: Như đã được đề cập ở trên, HTTP là connectionless và nó một kết quả trực tiếp là HTTP trở thành một giao thức Stateless. Server và Client biết về nhau chi trong một yêu cầu hiện tại. Sau đó, cả hai chúng nó quên tất cả về nhau. Do bản chất của giao thức, cả Client và các trình duyệt có thể giữ lại thông tin giữa các yêu cầu khác nhau giữa các trang web.

Phiên bản hiện tại của HTTP là **v1.1**

Trong khi phiên bản của HTTP **v1.0** chỉ sử dụng **1** kết nối mới cho trao đổi Rq/Rp thì **v1.1** có thể sử dụng **nhiều** trao đổi Rq/Rp

![](http://i.imgur.com/XJcitrI.png)
<a name="2"></a>
##2.Các tham số trong HTTP

###Cách để xem các thông số HTTP

Bước 1: Click chuột phải trên website bất kì

![](http://i.imgur.com/4m2rQWH.png)

Bước 2: Chọn network 

![](http://i.imgur.com/x7FHY5F.png)

###Phiên bản HTTP

Ví dụ: 

```sh
HTTP/1.0
 hoặc
HTTP/1.1
```

###Uniform Resource Identifier-Bộ nhận diện tài nguyên đồng nhất
URI là một chuỗi được đinh dạng, nhạy cảm với chứ hoa-thường theo một cách đơn giản chứa tên, vị trí,... để xác định vị trí nguồn, ví dụ, một website, một dịch vụ web....

![](http://i.imgur.com/T8GvXNA.png)

Ở đây, nếu **port** là trống thì mặc định port là 80 và một **resource path** trống trương đương với `/`.

Các kí tự khác trong bộ thiết lập **reserved** và **unsafe** là tương đương với mã hóa `%HEX HEX` của chúng.

Ví dụ 3 URI tương đương nhau:

```sh
http://abc.com:80/~son/deptrai.html
http://abc.com/%7Eson/deptrai.html
http://abc.com:/%7eson/deptrai.html
```

###Các định dạng thời gian

Tất cả các nhãn Ngày/Thời gian trong HTTP **phải** được biểu diễn trong Greenwich Mean Time(GMT), không có sự ngoài trừ.

Các ứng dụng HTTP được cho phép để sử dụng 3 nhãn đại diện Ngày/Thời gian sau:

```sh
Sun, 06 Nov 1994 08:48:37      ; RFC 822, updated by RFC 1123
Sunday, 06-Nov-94 08:49:37 GMT ; RFC 850, obsoleted by RFC 1036
Sun Nov  6 08:49:37 1994       ; ANSI C''s asctime() format
```

###Các bộ kí tự

Chúng ta sử dụng các bộ ký tự để xác định các thiết lập kí tự mà Client ưu thích.

Nhiều bộ thiết lập kí tự có thể được liệt kê riêng biệt bởi các dấu phẩy.

Nếu một giá trị không được xác định thì mặc địng là US-ASII.

Ví dụ:

```sh
US-ASII
 hoặc
ISO-8859-1
 hoặc
ISO-8859-7
```

###Mã hóa nội dung

Một giá trị mã hóa nội dung chỉ rằng 1 thuật toán mã hóa đã được sử dụng để mã hóa nội dung trước khi truyền tới mạng.

Mã hóa nội dung được sử dụng lần đầu để cho phép một tài liệu để được nén hoặc ngoài ra được truyền tải mà không thất lạc nhận diện.

Tất cả các giá trị mã hóa nội dung là không phân biệt kiểu chữ.

HTTP/1.1 sử dụng các giạ trị mã hóa nội dung trong các trường `Accept-Encoding` hoặc `Content-Encoding Header`.

Ví dụ:
```sh
Accept-Encoding: gzip
 hoặc
Accept-Encoding: compress
 hoặc
Accept-Encoding: deflate
```

###Các kiểu đa phương tiện (media type)

HTTP sử dụng các kiểu phương tiện Internet trong các trường **Content_type** và **Accept** để cung cấp dữ liệu mở và có thể mở rộng.

Cú pháp chung để xác định kiểu phương tiện:

`media-type: type/subtype *(";" parameter)`

Ví dụ:

`Accept: image/gif`

###Các thẻ ngôn ngữ

HTTP sử dụng các thẻ ngôn ngữ trong các trường **Accept-language** và **Content-Language**.

Một thẻ ngôn ngữ bao gồm một hoặc nhiều thành phần: 1 thẻ ngôn ngữ sơ cấp và 1 dãy các thẻ phụ:

`language-tag = primary-tag *( "-" subtag )`

Các khoảng trắng không được cho phép trong thẻ và tất cả các thẻ là case-isentitive.

Ví dụ:

`en, en-US, en-cockney, i-cherokee`

Hai chữ `primary-tag` là một chứ viết tắt cho các ngôn ngữ trong ISO-639 và hai kí tự đầu tiên trong thẻ phụ subtag lag mã quốc gia
<a name="3"></a>
##3.Thông báo (Message) trong HTTP

HTTP được xây dựng trên cơ sở mô hình cấu trúc Client-Server và giao thuccws Stateless các Rq/Rp mà điều hành bởi việc trao đổi các thông báo (Message) dọc theo một kết nối TCP/IP

Một Client là một chương trình mà thiệt lập một kết nối tới một Server cho mục đích gửi một hoặc nhiều thông báo yêu cầu HTTP. Một HTTP "Server" là một chương trình mà chấp nhận các kết nối để phục vụ các yêu cầu HTTP bởi việc gửi các thông báo phản hồi HTTP

![](http://i.imgur.com/orXtD31.png)

HTTP sử dụng URI để nhận diện một nguồn đã cho và để thiết lập một kết nối. Một khi một kết nối được thiết lập, các **Thông báo HTTP** được truyền qua một định dạng tương tự như được sử dụng trong thư điện tử Internet Mail [RFC5322] và MIME [RFC2045].

Các thông báo này bao gồm các *Request* từ CLient tới Server và **Phản hồi** từ Server gửi tới Client mà sẽ theo định dạng sau:

`HTTP-message =<Request> | <Reponse> ; HTTP/1.1 mesages`

Các Request HTTP và các Reponse HTTP sử dụng một định dạng thông báo chung của RFC 882 cho truyền tải dữ liệu được yêu cầu. Định dạng thông báo chung này này bao gồm 4 mục:

```sh
* Một dòng đầu tiền

* Không hoặc nhiều trường Header theo sau bởi CRLF

* Một dòng trống (ví dụ: một dòng không có gì trước CRLF), chỉ phần cuối của trường Header

* Một thân thông báo tùy ý
```

###Dòng đầu thông báo (start-line)

Một dòng đầu có cú pháp chung như sau:

`start-line = Request-Line | Status-Line`

Ví dụ:

```sh
GET /hello.jsp HTTP/1.1 (Đây là dòng Request-Line được gửi bởi Client)

HTTP/1.1 200 OK (Đây là dòng Status-Code được gửi từ Server )
```

###Các trường Header

Các trường Header cung cấp thông tin được yêu cầu về yêu cầu hoặc phản hổi, hoặc về đối tượng được gửi trong thân thông báo.

Trình duyệt và server sẽ dựa vào các thông số header này để trả dữ liệu và hiển thị dữ liệu cho phù hợp, vì vậy nó đóng vai trò khá là quan trọng đấy.

[Tất cả các tham số](https://en.wikipedia.org/wiki/List_of_HTTP_header_fields)

Có 4 kiểu của Header trong các thông báo HTTP:

* **Kiểu chung(General-Header)**: Các trường Header này có khả năng ứng dụng chung cho tất cả các thông báo Request hoặc Reponse
* **Kiểu yêu cầu(Request-Header)**: Các trường Header này chỉ có khả năng áp dụng cho các thông báo Request.
* **Kiểu phản hồi(Reponse-Header)**: Các trường Header này chỉ có khả năng áp dụng cho các thông báo Reponse.
* **Kiểu thực thể (Entity-Header)**: Các trường này xác định thông tin về thân-thực thể hoặc, nếu không có phần thân nào hiển thị, về nguồn được nhận diện bởi yêu cầu.

Tất cả các Header được đề cập ở trên theo một định dạng chung và mỗi một trường Header bao gồm một tên được theo sau bởi một dấu hai chấm(:) và giá trị của trường như sau:

`message-header = field-name ":" [ field-name ]`

Ví dụ:
![](http://i.imgur.com/y4XXHXr.png)

###Phần thân thông báo

Phần thân thông báo là tùy ý cho một thông báo HTTP nhưng nếu nó là có sẵn, thì khi đó nó được sử dụng để mang phần thân được kiên kết với yêu cầu hoặc phản hồi.

Nếu phần thân thực thể được liên kết, thì sau đó thường các dòng Content-Type và Content-Lenght xác định bản chất của phần thân liên kết.

Một phần thân thông báo là phần mà mang dữ liệu yêu cầu HTTP thực sự(bao gồm dữ liệu mẫu và dữ liệu được tải lên,....) và dữ liệu phản hồi HTTP từ Server (bao gồm các file,ảnh,...)

Ví dụ:

![](http://i.imgur.com/0p9U1Uk.png)
<a name="4"></a>
##4.Yêu cầu(Request) trong HTTP

Một Client gửi một yêu cầu HTTP tới một server trong một mẫu thông báo yêu cầu bao gồm định dạng sau:

```sh
* Một dòng yêu cầu

* Không hoặc nhiều hơn trường Header (General|Request|Entity) được theo sau bởi CRLF

* Một dòng trống (ví dụ: một dòng không có gì đằng trước CRLF) chỉ phần kết thúc của trường Header

* Một phần thân thống báo tùy ý
```


###Dòng yêu cầu

Dòng yêu cầu bắt đầu với thủ tục method, được theo sau bởi một Request-URI và phiên bản giao thức, và kết thúc với CRLF. Các yếu tố được phân biệt riêng lẻ bởi các khoảng trống SP

`Request-Line = Method SP Request-URI SP HTTP-Version CRLF`

###Các phương thức yêu cầu

Phương thức yêu cầu chr phương thức để được thực hiện trên nguồn được nhận diện bởi **Request-URI** đã cung cấp.

Method là case-intensitive và luôn luôn được đề cập trong chữ hoa,
Bảng liệt kê các method hỗ trợ trong HTTP/1.1

![](http://i.imgur.com/tJifJV6.png)

Ví dụ:

![](http://i.imgur.com/XoqPdHF.png)

###Request-URI

**Request-URI** là một bộ nhận diện nguồn đồng nhất (URI) và xác định nguồn mà áp dụng yêu cầu.

Ví dụ:

`Request-URI = "*" | absoluteURI | resouce_patch | authority`

Các mẫu thường được sử dụng để xác định một URI

![](http://i.imgur.com/yGO7US9.png)

###Các trường yêu cầu Header

Các trường Request-Header cho phép Client truyền thông tin thêm về yêu cầu, và về chính Client đó, tới Server.

Những trường này hoạt động như các bộ chỉnh sửa yêu cầu.

Danh sách các trường Request-Header quan trọng mà có thể được sử dụng dựa trên sự yêu cầu

* Accept-Charset

* Accept-Encoding

* Accept-Language

* Authorization

* Expect

* From

* Host

* If-Match

* If-Modified-Since

* If-None-Match

* If-Range

* If-Unmodified-Since

* Max-Forwards

* Proxy-Authorization

* Range

* Referer

* TE

* User-Agent

Bạn có thể tự tạo ra các trường cho mình trong trường hợp bạn đang viết Client và Server cho riêng mình

###Các ví dụ của Thông báo Yêu cầu

Bây giờ chúng ta đặt tất cả những thứ đã học ở trên cùng với nhau để tạo một yêu cầu HTTP để chỉ thị trang **hello.htm** từ Server chạy trên tutorialspoint.com.

```sh
GET /hello.htm HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Accept-Language: en-us
Accept-Encoding: gzip, deflate
Connection: Keep-Alive
```

Tại đây chúng ta không gửi bất cứ yêu cầu dữ liệu tới Server bởi vì chúng ta đang chỉ thị một trang thuần HTML từ Server. Kết nối là General-Header, và phần còn lại của Header là các Header yêu cầu. Ví dụ sau đây chỉ cách để gửi dữ liệu mẫu tới Server bởi sử dụng phần thân thông báo yêu cầu:

```sh
POST /cgi-bin/process.cgi HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Content-Type: application/x-www-form-urlencoded
Content-Length: length
Accept-Language: en-us
Accept-Encoding: gzip, deflate
Connection: Keep-Alive

licenseID=string&content=string&/paramsXML=string
```

Ở đây, URl được cung cấp /cgi-bin/process.cgi sẽ được sử dụng để xử lý dữ liệu được truyền và theo đó, một phản hồi sẽ được trả lại. Ở đây **content-type** nói cho Server rằng dữ liệu được truyền là một dữ liệu mẫu web đơn giản và **length** sẽ là độ dài thực của dự liệu đặt trong phần thân thông báo. Ví dụ sau chỉ cách bạn có thể truyền XML thuần tới Server của bạn.

```sh
POST /cgi-bin/process.cgi HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Content-Type: text/xml; charset=utf-8
Content-Length: length
Accept-Language: en-us
Accept-Encoding: gzip, deflate
Connection: Keep-Alive

<?xml version="1.0" encoding="utf-8"?>
<string xmlns="http://clearforest.com/">string</string>
```
<a name="5"></a>
##5.Phản hồi(Reponse) trong HTTP

Sau khi nhận và phiên dịch một thông báo yêu cầu, một Server gửi tín hiệu phản hồi với một thông báo phản hồi HTTP.

```sh
* Một dòng trạng thái (Status-Line)

* Không hoặc nhiều hơn các trường Header (General|Response|Entity) được theo sau bởi CRLF.

* Một dòng trống (ví dụ: một dòng mà không có gì đằng trước CRLF) chỉ phần kết thúc của các trường Header. 

* Một phần thân thông báo tùy ý.
```

![](http://i.imgur.com/dyhYbKv.png)

![](http://i.imgur.com/LMwOlfa.png)

###Dòng trạng thái

Một dòng trạng thái bao gồm phiên bản giao thức được theo sau bởi một mã hóa trạng thái số và cụm từ thuần văn bản được liên kết của nó.

`Status-Line = HTTP-Version SP Status-Code SP Reason-Phrase CRLF`

###Phiên bản HTTP

`HTTP-Version = HTTP/1.1`

###Mã hóa trạng thái (Status-Code)

[Danh sách chi tiết các kiểu mã hóa](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)

Tóm tắt:

![](http://i.imgur.com/3sHp2zE.png)

Ví dụ:

![](http://i.imgur.com/rkqNaQV.png)

###Các trường Header Phản hồi

Các trường Header phản hồi cho phép Server truyền thông tin thêm về phản hồi mà không thể được đặt trong dòng Status-Line.

Những trường này cung cấp thông tin về Server và về truy cập từ xa tới nguồn được xác định bởi Request-URI

* Accept-Ranges

* Age

* ETag

* Location

* Proxy-Authenticate

* Retry-After

* Server

* Vary

* WWW-Authenticate

###Các ví dụ Thông báo Phản hồi
Bây giờ chúng ta đặt tất cả các thứ trên cùng với nhau để tạo một phản hồi HTTP cho một yêu cầu để chỉ thị trang hello.jsp từ Server đang chạy trên tutorialspoint.com.

```sh
HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
Content-Length: 88
Content-Type: text/html
Connection: Closed

<html>
<body>
<h1>Hello, World!</h1>
</body>
</html>
```

Ví dụ sau đây chỉ một thông báo phản hồi HTTP hiển thị trạng thái lỗi khi Server không thể tìm thấy trang được yêu cầu:

```sh
HTTP/1.1 404 Not Found
Date: Sun, 18 Oct 2012 10:36:20 GMT
Server: Apache/2.2.14 (Win32)
Content-Length: 230
Connection: Closed
Content-Type: text/html; charset=iso-8859-1

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
<head>
   <title>404 Not Found</title>
</head>
<body>
   <h1>Not Found</h1>
   <p>The requested URL /t.html was not found on this server.</p>
</body>
</html>
```

Tiếp theo là một ví dụ của một thông báo phản hồi HTTP chỉ trạng thái lỗi khi Server nhập vào một phiên bản HTTP sai trong yêu cầu HTTP đã cung cấp:

```sh
HTTP/1.1 400 Bad Request
Date: Sun, 18 Oct 2012 10:36:20 GMT
Server: Apache/2.2.14 (Win32)
Content-Length: 230
Content-Type: text/html; charset=iso-8859-1
Connection: Closed
  
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
<head>
   <title>400 Bad Request</title>
</head>
<body>
   <h1>Bad Request</h1>
   <p>Your browser sent a request that this server could not understand.</p>
   <p>The request line contained invalid characters following the protocol string.</p>
</body>
</html>
```
<a name="6"></a>
##6.Phương thức(Method) trong HTTP
Tập hợp các phương thức phổ biến cho HTTP/1.1 được xác định bên dưới và bộ thiết lập này có thể được mở rộng dựa trên các sự yêu cầu. Những tên method này là case-sensitive và chúng phải được sử dụng trong dạng chữ hoa.

![](http://i.imgur.com/tJifJV6.png)

###Phương thức GET

Một **Request GET** lấy dữ liệu từ một Server bở việc xác định các tham số trong đoạn URL của yêu cầu.

Đây là phương thức chính được sử dụng để thu hồi tài liệu.
Vi dụ: Sử dụng phương thức GET để chị thị **hello.htm**

```sh
GET /hello.htm HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Accept-Language: en-us
Accept-Encoding: gzip, deflate
Connection: Keep-Alive
```

Server sẽ phản hồi lại yêu cầu như sau:

```sh
HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
ETag: "34aa387-d-1568eb00"
Vary: Authorization,Accept
Accept-Ranges: bytes
Content-Length: 88
Content-Type: text/html
Connection: Closed
<html>
<body>
<h1>Hello, World!</h1>
</body>
</html>
```

###Phương thức HEAD

**Phương thức HEAD** là có chức năng tương tự như GET, ngoại trừ Server phản hồi với một dòng và các Header phản hồi, nhưng không có phần thân dối tượng.

Ví dụ: Phương thức HEAD để chỉ thị thông tin Header về **hello.htm**

```sh
HEAD /hello.htm HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Accept-Language: en-us
Accept-Encoding: gzip, deflate
Connection: Keep-Alive
```

Server sẽ phản hồi lại yêu cầu HEAD như sau:

```sh
HEAD /hello.htm HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Accept-Language: en-us
Accept-Encoding: gzip, deflate
Connection: Keep-Alive
```

**Chú ý**:Tại đây Server không gửi bất cứ dữ liệu nào sau Header.

###Phương thức POST

**Phương thức POST** được sử dụng khi bạn muốn gửi một vài dữ liệu tới Server, dí dụ, cập nhật file, dữ liệu mẫu,...

Ví dụ: Sử dụng phương thức POST để gửi một dữ liệu mẫu tới Server, mà sẽ được xử lý bởi một **process.cgi**

```sh
POST /cgi-bin/process.cgi HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Content-Type: text/xml; charset=utf-8
Content-Length: 88
Accept-Language: en-us
Accept-Encoding: gzip, deflate
Connection: Keep-Alive
>----------------------------------------------
<?xml version="1.0" encoding="utf-8"?>
<string xmlns="http://clearforest.com/">string</string>
```

Bên server, script process.cgi xử lý dữ liệu đã truyền và gửi phản hồi như sau:

```sh
HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
ETag: "34aa387-d-1568eb00"
Vary: Authorization,Accept
Accept-Ranges: bytes
Content-Length: 88
Content-Type: text/html
Connection: Closed
>-----------------------------------------------
<html>
<body>
<h1>Request Processed Successfully</h1>
</body>
</html>
```

###Phương thức PUT

**Phương thức PUT** được sử dụng để yêu cầu Server lưu trữ phần thân đối tượng được bao gồm tại một vị trí được xác định bởi URL đã cung cấp.

Ví dụ: Yêu cầu Server lưu phần thân đối tượng đã cung cấp trong **hello.htm** tạ root của server:

```sh
PUT /hello.htm HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Accept-Language: en-us
Connection: Keep-Alive
Content-type: text/html
Content-Length: 182
>---------------------------------------------------
<html>
<body>
<h1>Hello, World!</h1>
</body>
</html>
```

Server sẽ lưu phần thân đối tượng trong tệp hello.jsp và sẽ gửi phản hồi sau trở lạ Client:

```sh
HTTP/1.1 201 Created
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Content-type: text/html
Content-length: 30
Connection: Closed
>----------------------------------------------------
<html>
<body>
<h1>The file was created.</h1>
</body>
</html>
```

###Phương thức DELETE

**Phương thức DELETE** được sử dụng để yêu cầu Server xóa một file tại vị trí xác định bưởi URL đã cung cấp.

Ví dụ: Yêu cầu Server xóa tệp đã cho **hello.html** tại root của Server

```sh
DELETE /hello.htm HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.tutorialspoint.com
Accept-Language: en-us
Connection: Keep-Alive
```

Server sẽ xóa một file đã được đề cập và sẽ gửi phản hồi về Client

```sh
HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Content-type: text/html
Content-length: 30
Connection: Closed
>-----------------------------------------------------
<html>
<body>
<h1>URL deleted.</h1>
</body>
</html>
```

###Phương thức CONNECT

**Phương thức CONNECT** được sử dụng bởi Client để tạo một kết nối mạng với Server qua HTTP.

Ví dụ: Yêu cầu một kết nối với một Server đang chạy trên host **tutorialspoint.com**

```sh
CONNECT www.tutorialspoint.com HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
```

Kết nối được tạo với Server và phản hồi sau được gửi trả lại tới Client

```sh
HTTP/1.1 200 Connection established
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
```

###Phương thức OPTIONS

**Phương thức OPTIONS** được sử dụng bởi Client để tìm ra các phương thức HTTP và các chức năng được hỗ trợ bởi một Server đang chạy

Ví dụ: Yêu cầu một danh sách các phương thức được hỗ trợ bởi một Server đang chạy trên **tutorialspoint.com**

```sh
OPTIONS * HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
```

Server sẽ gửi một thông báo dựa trên định cấu hình hiện tại sủa Server:

```sh
HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Allow: GET,HEAD,POST,OPTIONS,TRACE
Content-Type: httpd/unix-directory
```

Phần Allow là tất cả các phương thức hỗ trợ trên Server

###Phương thức TRACE

**Phương thức TRACE** được sử dụng để ảnh xạ các nội dung của một yêu cầu HTTP tới người yêu cầu mà có thể được sử dụng cho mục đích debug tại thời điểm của sự phát triển.

Ví dụ:

```sh
TRACE / HTTP/1.1
Host: www.tutorialspoint.com
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
```

Server sẽ gử thông báo sau trong phản hồi tới yêu cầu trên:

```sh
HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Connection: close
Content-Type: message/http
Content-Length: 39

TRACE / HTTP/1.1
Host: www.tutorialspoint.com
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
```
<a name="7"></a>
##7.Mã hóa trạng thái trong HTTP

###1xx: Thông tin
![](http://i.imgur.com/MOUZqch.png)

###2xx: Thành công
![](http://i.imgur.com/SoI7PX5.png)

###3xx: Sự điều hướng lại
![](http://i.imgur.com/ygqTtLm.png)

###4xx: Lỗi Client
![](http://i.imgur.com/SZI5B9L.png)

###5xx: Lỗi Server
![](http://i.imgur.com/rFpmlGy.png)
<a name="8"></a>
##8.Các trường Header trong HTTP

###General Header

####Trường Cache-Control

Trường Header chung **Cashe-Control** được sử dụng để xác định các chỉ dẫn mà **PHẢI** được tuân theo bởi tất cả các hệ thống bộ nhớ ẩn.

Cú pháp: 

`Cache-Control : cache-request-directive|cache-response-directive`

Một Cient hoặc Server có thể dử dụng Header chung **Cache-Control** để xác định các tham số cho bộ nhớ ẩn hoặc yêu cầu các loại cụ thể của tà liệu từ bộ nhớ ẩn.

Các chỉ dẫn bộ nhớ ẩn được xác định trong một danh sách được phân biệt bởi dấu phẩy.

Ví dụ:

`Cache-control: no-cache`

Bảng dưới liệt kê các chỉ thị yêu cầu bộ nhớ ẩn quan trọng mà có thể được sử dụng bởi **Client** trong yêu cầu HTTP của nó:

![](http://i.imgur.com/mq0U7wF.png)

Các chỉ dẫn phản hồi bộ nhớ ẩn quan trọng sau đây có thể được sử dụng bởi Server trong phản hồi của nó:

![](http://i.imgur.com/KBC0Z03.png)

####Trường Connection

Trường Header chung **Connection** cho phép người gửi xác định các chức năng mà được mong ước cho kết nối cụ thể đó và phải không được giao tiếp với các trạm ủy nhiệm qua các kết nối xa hơn.

Cú pháp:

`Connection : "Connection"`

HTTP/1.1 xác định rõ chức năng kết nối "**close**" cho người gửi tín hiệu mà kết nối sẽ được đóng sau khi hoàn thành phản hồi.

Ví dụ:

`Connection: close`

Theo mặc định, HTTP/1.1 sử dụng kết nối liên tục

Ví dụ:

`Connection: keep-alive`

####Trường Date

Tất cả các nhãn Ngày/Thời gian **PHẢI** được biểu diễn trong GMT, không có trường hợp ngoại trừ.

Các ứng dụng HTTP được cho phép được sử dụng bất kỳ 3 sự biểu diễn nhãn Ngày/Thời gian nào sau đây:

```sh
Sun, 06 Nov 1994 08:49:37 GMT  ; RFC 822, updated by RFC 1123
Sunday, 06-Nov-94 08:49:37 GMT ; RFC 850, obsoleted by RFC 1036
Sun Nov  6 08:49:37 1994       ; ANSI Cs asctime() format
```

Định dạng đầu tiên được sử dụng nhiều nhất

####Trường Pragma

Trường Pragma được sử dụng dể bao gốm các chỉ dẫn cụ thể thực hiện mà có thể áp dụng tới bất kỳ nhười nhận nào trong chuỗi Rq/Rp

Ví dụ:

`Pragma: no-cache`

Chỉ dẫn chỉ xác định rõ trong HTTP/1.0 là chỉ dẫn không bộ nhớ ẩn và được duy trì trong HTTP/1.1 cho tính tương thích ngược về sau

####Trường Trailer

Gía trị trường Trailer chỉ ra rằng thiết lập đã cho của trường Header biểu diễn trong trailer của một thông báo được mã hóa truyền tải được đóng khối.

Cú pháp:

`Trailer: field-name`

Các trường Header thông báo được liệt kê trong trường Trailer **phải không** bao gồm các trường Header sau:

* Transfer-Encoding
* Content-Length
* Trailer

###Trường Transfer-Encoding (Mã hóa truyền tải)

Trường Transfer-Encoding chỉ ra kiểu truyền tải nào được áp dụng tới phần thân thông báo để cho việc truyền tải một cách an toàn giữa người gửi và người nhận.
Điều này không giống như **Content-Encoding** bời vì các mã hóa truyền tải là một thuộc tính của thông báo, không phải là của phần thân thống báo.

Cú pháp:

`Transfer-Encoding: chunked(đóng gói)`

Tất cả các giá trị Transfer-Encoding là không nhạy cảm ( không phân biệt hoa-thường )

####Trường Upgrade

Trường Upgrade này cho phép Client xác định những giao thức giao tiếp thêm vào mà nó hỗ trợ và sẽ được sử dụng nếu Server tìm thấy rằng nó thích hợp để chuyển đồi giao thức

Ví dụ:

`Upgrade: HTTP/2.0, SHTTP/1.3, IRC/6.9, RTA/x11`

Trường Upgrade được chờ đợi để cung cấp một ký thuật đơn giản cho truyền tải từ HTTP/1.1 tới giao thức không tương hợp

####Trường Via
Trường Via phải được sử dụng bởi các gateway và các trạm ủy nhiệm (proxy) để chỉ ra các giao thức **trung gian** và người nhận

Ví dụ, một thông báo yêu cầu có thể được gửi từ một HTTP/1.0 User agent tới một trạm ủy nhiệm nội bộ được đặt tên mã là "fred", mà sử dụng HTTP/1.1 để chuyển tiếp yêu cầu tới trạm ủy nhiệm công cộng tại nowhere.com, mà hoàn thành yêu cầu bởi việc chuyển tiếp nó tới Server ban đầu tại www.ics.uci.edu. Yêu cầu được nhân bởi www.ics.uci.edu sẽ có trường Via như sau:

`Via: 1.0 fred, 1.1 nowhere.com (Apache/1.1)`

####Trường Warning (Cảnh báo)

Trường Waring được sử dụng để mang thông tin thêm về trạng thái hoặc sự truyền tải của một thông báo mà có thể không được phản ánh trong thông báo đó.
Một sự phản hồi có thể mang nhiều hơn một trường Waring

`Warning: warn-code SP warn-agent SP warn-text SP warn-date `

###Các trường Header Request trên Client

####Trường Accept

Trường Accept này có thể được sử dụng để xác định các kiểu phươn tiện cụ thể mà là có thể chấp nhận cho sự phản hồi

Cú pháp:

`Accept: type/subtype [q=qvalue]`

Các kiểu phương tiện có thể được liệt kê phân biệt nhau bởi các dấu phảy và giá trị q tùy ý biểu diễn một mức độ chất lượng có thể chấp nhận để chấp nhận các kiểu trên một phạm vi từ 0 tới 1. Dưới đây là ví dụ:
Nếu không có q thì coi như q=1

Ví dụ:

`Accept: text/plain; q=0.5, text/html, text/x-dvi; q=0.8, text/x-c`

Đoạn này có thể được biên dịch như **text/html** và **text/x-c** và là các kiểu phương tiện được ưa thích hơn nhưng nếu chúng không tồn tại, thì sau đó gửi đối tượng **text/x-dvi** , và nếu nó không tồn tại, gửi đối tượng **text/plain**.

####Trường Accept-Charset

Trường này có thể sử dụng để chỉ các bộ thiết lập ký tự nào được chấp nhận cho sự phản hồi

Cú pháp:

`Accept-Charset: character_set [q=qvalue]`

Nhiều bộ ký tự có thể được liệt kê riêng rẽ nhau bởi các dấu phảy và giá trị q tùy ý biểu diễn một mức độ chất lượng có thể chấp nhận cho các bộ ký tự không được ưa thích hơn trên một miền từ 0 đến 1.
Nếu không có q coi như q=1

Ví dụ:
`Accept-Charset: iso-8859-5, unicode-1-1; q=0.8`

Giá trị đặc biệt "*", nếu có trong trường **Accept-Charset**, kết nối mọi bộ ký tự và nếu không có giá trị trường **Accept-Charset** nào, thì mặc định là bất kỳ bộ ký tự nào cũng có thể được chấp nhận.

####Trường Accept-Encoding

Trường này tương tự như Accept, nhưng hạn chế mã hóa nội dung là có thê chấp nhận trong phản hồi

Cú pháp:

`Accept-Encoding: encoding types`

Ví dụ:

```sh
Accept-Encoding: compress, gzip
Accept-Encoding:
Accept-Encoding: *
Accept-Encoding: compress;q=0.5, gzip;q=1.0
Accept-Encoding: gzip;q=1.0, identity; q=0.5, *;q=0
```

Gía trị bị để trống xem như không có gì hết

####Trường Accept-Language

Trường này tương tự như Accept, nhưng hạn chế thiết lập các ngôn ngữ tự nhiên là được ưu thích hơn khi một phản hồi yêu cầu 

Cú pháp:

`Accept-Language: language [q=qvalue]`

Nhiều ngôn ngữ có thể được liệt kê phân biệt nhau bởi dấu phảy và giá trị q tùy ý biểu diễn một mức độ chất lượng có thể chấp nhận cho các ngôn ngữ không được ưa thích hơn trên miền từ 0 tới 1. 

Ví dụ:

`Accept-Language: da, en-gb;q=0.8, en;q=0.7`

####Trường Authorization (Sự ủy quyền)

Gía trị trường Authorization bao gồm các sự ủy nhiệm mà chứa thông tn ủy quyền của một user agent cho phạm vi nguồn đang được yêu cầu

Cú pháp:

`Authorization : credentials`

Định cấu hình HTTP/1.0 định nghĩa giản đồ ủy quyền BASIC, nơi mà tham số ủy quyền là một chuỗi của **tên sử dụng:mật khẩu** được mã hóa trong cơ sở 64 bit.

Ví dụ:

`Authorization: BASIC Z3Vlc3Q6Z3Vlc3QxMjM=`

Giá trị đã giải mã là **guest:guest123**, trong đó **guest** là tài khoản người dùng và **guest123** là mật khẩu.

####Trường Cookie

Gía trị trường Cookie chứa một cặp name/value của thông tin được lưu trữ cho URL đó.

Cú pháp:

`Cookie: name=value`

Nhiều cookie có thể được xác định phân biệt nhau bởi các dấy chấm phẩy ";"

Ví dụ:

`Cookie: name1=value1;name2=value2;name3=value3`

####Trường Expect

Trường Expect được sử dụng để chỉ ra rằng một bộ thiết lập cụ thể của hành v Server được yêu câu bởi Client

Cú pháp:

`Expect : 100-continue | expectation-extension`

Nếu một Server nhận một yêu cầu chứa một trường Expect mà bao gồm một độ dãn mong đợi mà nó không hỗ trợ, nó phải phản hồi với trạng thái 417 (sự mong đợi thất bại)

####Trường From

Trường From chứa một địa chỉ email cho người sử dụng mà kiểm soát User agent
Cú pháp:

`From: webmaster@w3.org`

Trường này có thể được sử dụng cho các mục đích và như là một phương tiện cho việc xác nhận nguồn của các yêu cầu không khả thi hoặc không muốn

####Trường Host

Trường Host được sử dụng để xác đinh Internet host và số hiệu cổng cảu nguồn được yêu cầu.

Cú pháp:

`Host : "Host" ":" host [ ":" port ] ;`

Một Host mà không có bất kỳ thông tin port nào ngụy ý là port mặc địch, mà là 80.

Ví dụ: Một yêu cầu trên Server ban đầu cho http://w3.org/pub/WWW/ sẽ là:

```sh
GET /pub/WWW/ HTTP/1.1
Host: www.w3.org
```

####Trường If-Match

Trường If-Match được sử dụng trong một method để làm cho nó có điều kiện. Header này yêu cầu Server đề biểu diễn method được yêu cầu chỉ khi giá trị được cung cấp trong thẻ này kết nố với các thể đối tượng được cung cấp được biểu diễn bởi **Etag**

Cú pháp:

`If-Match : entity-tag`

Một dấu (*) kết nố tới bất kì đối tượng nào, và sự truyền tả tiếp tục chỉ khi đối tượng tồn tại.

Ví dụ:

```sh
If-Match: "xyzzy"
If-Match: "xyzzy", "r2d2xxxx", "c3piozzzz"
If-Match: *
```

Nếu không có thể đối tượng nào kết nối, hoặc (*) được cung cấp và không đối tượng hiện tạ nào tồn tại, Server không được trình bày method được yêu cầu, và phải trả lại một phản hồi là 412 (điều kiện trước thất bại)

####Trường If-Modified-Since

Trường này được sử dụng với một method để  làm cho nó có điều kiện, hoặc nếu "*" được cung cấp và không đối tượng hiện tại nào tồn tại, Server không được trình bày method được yêu cầu, và phải trả lại phản hồi 412 ( điều kiện trước thất bại)

####Trường If-None-Match

Trường này được sử dụng với với method để làm cho nó có điều kiện. Trường này yêu cầu Server trình bày method được yêu cầu chỉ thị khi một trong số giá trị đã cho của thẻ này kết nối với các thẻ đối tượng đã được cung cấp biểu diễn bởi **Etag**

Cú pháp:

`If-None-Match : entity-tag`

Một dấu 8 kết nối bất kỳ đối tượng nào, và sự truyền tải tiếp tục chỉ khi đối tượng không tồn tại.

Vi dụ:

```sh
If-None-Match: "xyzzy"
If-None-Match: "xyzzy", "r2d2xxxx", "c3piozzzz"
If-None-Match: *
```

####Trường If-Range

Trường If-Range có thể được sử dụng với một GET có điều kiện để yêu cầu chỉ một phần của đối tượng mà đang bị thất lạc, nếu nó không được thay đổi, và toàn bộ đối tượng nếu nó được thay đổi.

Cú pháp:

`If-Range : entity-tag | HTTP-date`

Hoặc một thẻ đối tượng hoặc một dữ liệu có thể được sử dụng để xác minh đối tượng nội bộ đã nhận. 

Ví dụ:

`If-Range: Sat, 29 Oct 1994 19:43:31 GMT`

Tại đậy, nếu tài liệu không được chỉnh sửa từ ngày đã cho, Server trả lại dãy byte được cung cấp bởi trường Range, nếu không thì nó trả lại tất cả các tài liệu mới.

####If-Unmodified-Since

Trường này được sử dụng với một method để làm cho nó có điều kiện.

Cú pháp:

`If-Unmodified-Since : HTTP-date`

Nếu nguồn được yêu cầu không được chỉnh sửa từ khi thời gian đã được xác định trong trường này, Server sẽ thực hiện hoạt động được yêu cầu như If-Unmodified-Since không biểu diễn. 

Ví dụ:

`If-Unmodified-Since: Sat, 29 Oct 1994 19:43:31 GMT`

Nếu yêu cầu có kết quả là bất cứ gì khác ngoài một trạng thái là 2xx hoặc 4xx, thì trường If-Unmodified-Since nên được bỏ qua.

####Trường Max-Forwards

Trường này cung cấp một kỹ thuật với các phương thức TRACE và OPTIONS để giới hạn số các proxy(trạm ủy quyền) hoặc gateway mà có thể chuyển tiếp yêu cầu tới Server kế tiếp.

Cú pháp:

`Max-Forwards : n`

Gía trị Max-Forwards là một số nguyên hệ thập phân chỉ rằng số lần còn lại của thông báo yêu cầu này có thể được chuyển tiếp. Điều này là hữu ích cho debug với phương thức TRACE, tránh được các vòng lặp vô hạn.

Ví dụ:

`Max-Forwards : 5`

Trường này có thể bị bỏ qua với tất cả các phương thức được định nghĩa trong định cấu hình HTTP.

####Proxy-Authorization

Trường này cho phép Client xác định chính nó (hoặc người sử dụng của nó) tới một trạm ủy quyền mà yêu cầu ủy nhiệm.

Cú pháp:

`Proxy-Authorization : credentials`

Giá trị trường Proxy-Authorization bao gồm các sự ủy nhiệm chứa thông tin ủy nhiệm của user agent cho trạm ủy nhiệm và/hoặc phạm vi của nguồn được yêu cầu.

####Trường Range

Trường Range xác định dãy nội bộ của nội dung được yêu cầu từ tài liệu.

Cú pháp:

`Range: bytes-unit=first-byte-pos "-" [last-byte-pos]`

Giá trị First-byte-pos trong một byte-range-spec chung cấp byte-offset của byte đầu tiên trong một dãy. Giá trị last-byte-pos cung cấp byte-offset của byte cuối cùng trong dãy; đó là, các vị trí byte được xác định. Bạn có thể xác định một đơn vị byte như các byte. Byte offset bắt đầu tại 0. Một số ví dụ đơn giản như sau:

```sh
- The first 500 bytes 
Range: bytes=0-499

- The second 500 bytes
Range: bytes=500-999

- The final 500 bytes
Range: bytes=-500

- The first and last bytes only
Range: bytes=0-0,-1
```

Nhiều dãy có thể được liệt kê, phân biệt nhau bởi dấu phảy. Nếu chữ số đầu tiên trong dãy byte phân biệt nhau bởi dấu phảy bị bỏ quên, dãy được giả sử là tính toán từ phần cuối của tài liệu. Nếu chữ số thứ hai bị bỏ quên, dãy là byte thứ n tới phần cuối tài liệu.

####Trường Referer

Trường này chó phép Client xác định địa chỉ URL của nguồn mà từ đó URL đã được yêu cầu.

Cú pháp:

`Referer : absoluteURI | relativeURI`

Ví dụ:

`Referer: http://www.tutorialspoint.org../http/index.jsp`

Nếu giá trị trường là một URI quan hệ, nó nên được phiên dịch liên quan tới Request-URI.

####Trường TE

Trường này chỉ sự mở rộng nào mà transfer-coding đang muốn chấp nhận trong phản hồi và có hoặc không nó đang muốn chấp nhận các trường trailer trong một transfer-conding được đóng khối.

Cú pháp:

`TE   : t-codings`

Sự hiện diện của từ khóa "trailers" chỉ rằng Client đang muốn chấp nhận các trường trailer trong một transfer-conding được đóng khối và nó được xác định theo một trong 2 cách:

```sh
TE: deflate
TE:
TE: trailers, deflate;q=0.5
```

Nếu giá trị trường TE là trống hoặc không trường TE nào hiện diện, thì khi đó chỉ có transfer-coding được đóng khối (chunked). Một thông báo với không transfer-coding là luôn luôn có thể chấp nhận.

####Trường User-Agent

Trường User-Agent chứa thông tin về tác nhân người sử dụng tạo yêu cầu.

Cú pháp:

`User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)`

###Trường Response từ Server

####Trường Accept-Ranges

Trường này cho phép Server chỉ sự chấp nhận của nó về các dãy yêu cầu cho một nguồn

Cú pháp:

`Accept-Ranges  : range-unit | none`

Ví dụ: Một server mà chấp nhận các yêu  cầu về dãy byte có thể gửi:

`Accept-Ranges: bytes`

Server mà không chấp nhận bất kỳ loại dãy yêu cầu cho một nguồn có thể gửi:

`Accept-Ranges: none`

Điều này sẽ khuyên Client không cố gắng để chiếm được một dãy yêu cầu.

####Trường Age

Trường Age chuyển tính toán về số lượng thời gian từ kh phản hồi được tạo ra tại Server ban đầu của người gửi.

Cú pháp:

`Age : delta-seconds`

Gía trị Age là các số nguyên thập phân không phủ định, biểu diễn thời gian bằng giây.

Ví dụ:

`Age: 1030`

Một HTTP/1.1 Server mà bao gồm một bộ nhớ ẩn phải bao gồm một trường Age trong mỗi phản hồi được tạo ra từ bộ nhớ ẩn riêng đó.

####Trường Etag

Trường Etag cung cấp giá trị hiện tại của thẻ đối tượng cho biến thể được yêu cầu.

Cú pháp:

`ETag :  entity-tag`

Ví dụ:

```sh
ETag: "xyzzy"
ETag: W/"xyzzy"
ETag: ""
```

####Trường Location

Trường Location được sử dụng để điều hướng lại người nhận tới một vị trí khác ngoài Request-URL

Cú pháp:

`Location : absoluteURI`

Ví dụ:

`Location: http://www.tutorialspoint.org../http/index.jsp`

Trường Content-Location khác Locaton ở trong đó mà Content-Location xác nhận vị trí ban đầu của đối tượng được bao gồm trong yêu cầu.

####Trường Proxy-Authenticate

Trường này phải được bao gồm như là một phần của phản hồi 407.

Cú pháp:

`Proxy-Authenticate  : challenge`

####Trường Retry-After

Trường này có thể được sử dụng với một phản hồ 503(Service Unavailable) để chỉ rằng dịch vụ được mong đợi để là không có sẵn trong vòng bao lâu tới Client đang yêu cầu.

Cú pháp: 

`Retry-After : HTTP-date | delta-seconds`

Ví dụ:

```sh
Retry-After: Fri, 31 Dec 1999 23:59:59 GMT
Retry-After: 120
```

####Trường Server

Trường này chứa thông tin về phần mềm được sử dụng bởi Server ban đầu để kiếm soát yêu cầu.

Cú pháp:

`Server : product | comment`

Ví dụ:

`Server: Apache/2.2.14 (Win32)`
Nếu phản hồi đang được chuyển tiếp qua một trạm ủy quyền, ứng dụng ủy quyền không được chỉnh sửa trường Server

####Trường Set-Cookie

Trường này chứa một cặp name/value của thông tin để giữ lại cho URL.

Cú pháp:

`Set-Cookie: NAME=VALUE; OPTIONS`

Trường phản hồi Set-Cookie bao gồm Set-Cookie dấu hiệu, được theo sau bởi một danh sách được phân biệt bằng dấu phẩy của một hoặc nhiều cookie.

Bảng các giá trị mà bạn có thể xác định

![](http://i.imgur.com/IDswalc.png)

Ví dụ:

`Set-Cookie: name1=value1,name2=value2; Expires=Wed, 09 Jun 2021 10:18:14 GMT`

####Trường Vary

Trường Vary xác định rằng đối tượng có nhiều nguồn và vì thế có thể theo nhiều cách để tới một danh sách yêu cầu đã được xác minh.

Cú pháp:

`Vary : field-name`

Bạn có thể xác định nhiều Header phân biệt nhau bởi dấu phẩy và một giá trj là dấu * mà không xác định các tham số (không giới hạn tới các Header yêu cầu).

Ví dụ:

`Vary: Accept-Language, Accept-Encoding`

Các trường này không nhạy cảm

####Trường WWW-Authenticate

Trường này phải được bao gồm trong các thông báo phản hồi 401(không đươc ủy quyền). Gía trị trường bao gồm ít nhất một challenge(hiệu lệnh) mà chỉ dẫn giản đồ ủy quyền và các tham số có thể áp dụng tới URI yêu cầu.

Cú pháp:

`WWW-Authenticate : challenge`

Gía trị trường có thể chứa nhiều hơn một challenge hoặc nếu nhiều hơn một trường WWW-Authenticate được cung cấp, các nội dung của chính challenge đó có thể chứa một danh sách được phân biệt bởi dáy phẩy của các tham số ủy quyền

Ví dụ:

`WWW-Authenticate: BASIC realm="Admin"`

###Entity Headers

####Trường Allow

Trường này liệt kê bộ thiết lập của các method được hỗ trợ bởi nguồn được xác nhận bởi Request-URI.

Cú pháp:

`Allow : Method`

Bạn có thể xác định nhiều phương thức được phân biệt bởi dấu phảy. 

Ví dụ:

`Allow: GET, HEAD, PUT`

Trường này không ngăn cản một Client từ việc cố gắng thử các method khác.

####Trường Content-Encoding

Trường này được sử dụng như một bộ chỉnh sửa tới kiểu phương tiện.

Cú pháp:

`Content-Encoding : content-coding`

Mã hóa nội dung là một thuộc tính của một đối tượng được xác định bởi 
Request-URI.

Ví dụ:

`Content-Encoding: gzip`

Nếu mã hóa nội dung của một đối tượng là một thông báo yêu cầu là không được chấp nhận bởi Server nguồn, Server sẽ phản hồi với một mã trạng thái 415 (kiểu phương tiện không được hỗ trợ).

####Trường Content-Language

Trường này miêu tả các ngôn ngữ tự nhiên của người đọc đã dự định cho đối tượng đã bao gồm. 

Cú pháp:

`Content-Language : language-tag`

Nhiều ngôn ngữ có thể được liệt kê cho nội dung mà được dự định cho nhiều người đọc.

Ví dụ:

`Content-Language: mi, en`

Mục đích đầu tiên của Content-Language là để cho phép một người sử dụng để xác nhận và tạo sự khác biệt các đối tượng theo ngôn ngữ được ưa thích hơn của riêng người dùng.

####Trường Content-Length

Trường này chỉ dẫn kích cỡ của phần thân đối tượng, trong số thập phân của hệ 8, được gửi tới người nhận hoặc, trong trường hợp của phương thức HEAD, kích cỡ của phần thân đối tượng mà sẽ được gửi, có yêu cầu là một GET.

Cú pháp:

`Content-Length : DIGITS`

Ví dụ:

`Content-Length: 3495`

Bất kỳ Conten-Length nào lớn hơn hoặc bằng là một giá trị có hiệu lực.

####Trường Content-Location

Trường này có thể được sử dụng để cung cấp vị trí nguồn cho đối tượng được bao gồm trong thông báo khi đối tượng đó là có thể truy cập từ một vị trí riêng biệt từ một URI của nguồn được yêu cầu.

Cú pháp:

`Content-Location:  absoluteURI | relativeURI `

Ví dụ:

`Content-Location: http://www.tutorialspoint.org../http/index.jsp`

Giá trị của Content-Location cũng định nghĩa URI cơ sở cho đối tượng.

####Trường Content-MD5

Trường này có thể được sử dụng để cung cấp một hệ thống phân loại MD5 của đối tượng cho việc kiểm tra tính nguyên vẹn của thông tin tới người nhận.

Cú pháp:

`Content-MD5  : md5-digest using base64 of 128 bit MD5 digest as per RFC 1864`

Ví dụ:

`Content-MD5  : 8c2d46911f3f5a326455f0ed7a8ed3b3`

Hệ thống phân loại MD5 được tính toán hóa dựa trên cơ sở nội dung của phần thân thực thể, bao gồm bất cứ mã hóa nội dung nào mà đã được áp dụng, nhưng không bao gồm bất cứ mã hóa truyền tải được áp dụng tới phần thân thông báo.

####Trường Content-Range

Trường này được gửi với một phần thân thực thể nội bộ để xác định nơi trong toàn bộ phần thân đối tượng mà phần thân nội bộ nên được áp dụng.

Cú pháp:

`Content-Range : bytes-unit SP first-byte-pos "-" last-byte-pos`

Ví dụ của các giá trị byte-content-range-spec, giả sử rằng đối tượng chứa một tổng của 1234 byte:

```sh
- The first 500 bytes:
Content-Range : bytes 0-499/1234

- The second 500 bytes:
Content-Range : bytes 500-999/1234

- All except For the first 500 bytes:
Content-Range : bytes 500-1233/1234

- The last 500 bytes:
Content-Range : bytes 734-1233/1234
```

Khi một thông báo HTTP bao gồm nội dung của một dãy đơn, nội dung này được truyền tải với một Content-Range, và một Content-Length chỉ số byte được truyền tải thực sự. 

Ví dụ:

```sh
HTTP/1.1 206 Partial content
Date: Wed, 15 Nov 1995 06:25:24 GMT
Last-Modified: Wed, 15 Nov 1995 04:58:08 GMT
Content-Range: bytes 21010-47021/47022
Content-Length: 26012
Content-Type: image/gif
```

####Trường Content-Type

Trường này chỉ dẫn kiểu phương tiện của phần thân đối tượng được gửi tới người nhận hoặc, trong trường hợp phương thức HEAD, kiểu phương tiện mà sẽ được gửi, có yêu cầu là GET.

Cú pháp:

`Content-Type : media-type`

Ví dụ:

`Content-Type: text/html; charset=ISO-8859-4`

####Trường Expires

Trường này cung cấp Ngày/Thời gian sau đó phản hồi được cho là hết hạn.

Cú pháp:

`Expires : HTTP-date`

Ví du:

`Expires: Thu, 01 Dec 1994 16:00:00 GMT`

####Trường Last-Modified

Trường này chỉ ngày và thời gian tại đó Server ban đầu tin rằng sự biến đổi được chỉnh sửa lần cuối.

Cú pháp:

`Last-Modified: HTTP-date`

Ví dụ:

`Last-Modified: Tue, 15 Nov 1994 12:45:26 GMT`
<a name="9"></a>
##9.Mã hóa URL trong HTTP

|**ASCII**|**Biểu tượng**|**Sự thay thế**|
|---------|--------------|---------------|
|< 32| |Mã hóa với %xx, với xx là sự đại diện trong hệ thập lục phân của ký tự.|
|32| space|   + or %20|
|33|  !   |%21|
|34  |"   |%22|
|35  |#   |%23|
|36  |$   |%24|
|37  |%   |%25|
|38  |&   |%26|
|39  |'   |%27|
|40  |(   |%28|
|41  |)   |%29|
|42  |*   |*|
|43  |+   |%2B|
|44  |,   |%2C|
|45  |-   |-|
|46  |.   |.|
|47  |/   |%2F|
|48  |0   |0|
|49  |1   |1|
|50  |2   |2|
|51  |3   |3|
|52  |4   |4|
|53  |5   |5|
|54  |6   |6|
|55  |7   |7|
|56  |8   |8|
|57  |9   |9|
|58  |:   |%3A|
|59  |;   |%3B|
|60  |<   |%3C|
|61  |=   |%3D|
|62  |>   |%3E|
|63  |?   |%3F|
|64  |@   |%40|
|65  |A   |A|
|66  |B   |B|
|67  |C   |C|
|68  |D   |D|
|69  |E   |E|
|70  |F   |F|
|71  |G   |G|
|72  |H   |H|
|73  |I   |I|
|74  |J   |J|
|75  |K   |K|
|76  |L   |L|
|77  |M   |M|
|78  |N   |N|
|79  |O   |O|
|80  |P   |P|
|81  |Q   |Q|
|82  |R   |R|
|83  |S   |S|
|84  |T   |T|
|85  |U   |U|
|86  |V   |V|
|87  |W   |W|
88|  X   |X
89 | Y   |Y
90 | Z   |Z
91  |[   |%5B
92  |\   |%5C
93  |]   |%5D
94|  ^   |%5E
95 | _   |_
96 | `   |%60
97 | a   |a
98 | b   |b
99 | c   |c
100| d   |d
101 |e   |e
102 |f   |f
103 |g   |g
104 |h   |h
105 |i   |i
106 |j   |j
107 |k   |k
108 |l   |l
109 |m   |m
110 |n   |n
111 |o   |o
112 |p   |p
113 |q   |q
114 |r   |r
115 |s   |s
116 |t   |t
117 |u   |u
118 |v   |v
119 |w  | w
120 |x   x
121 |y  | y
122 |z  | z
123 |{  | %7B
|124 | Dấu gạch đứng  |  %7C|
125 |}  | %7D
126 |~ |  %7E
127  | |   %7F
|>127| |Mã hóa với %xx, với xx là sự đại diện trong hệ thập lục phân của ký tự.|
