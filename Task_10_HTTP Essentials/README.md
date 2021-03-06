#BÁO CÁO TASK 10 - Dịch sách HTTP Essentials
>Nguồn tham khảo: TFLAT
>
>Người thực hiện: Lã Ngọc Sơn
>
>Cập nhật ngày: 11/3/2017
>
>-------------------------

###Mục lục
#HTTP Essentials
##Protocols for Secure, Scaleable Websites
##Stephen A.Thomas
![](http://i.imgur.com/3MwpkhP.png)

[1.Chapter 01 Introduction - HTTP, the Internet, and the Web](#1)
 + [1.1 HTTP và World Wide Web](#1.1)
 + [1.2 Protocol Layers](#1.2)
 + [1.3 Uniform Resource Indentifers (URI)](#1.3) 
 + [1.4 Bố cục của cuốn sách](#1.4)
 
>---------------------------------------------

<a name="1"></a>
#1.Chapter 01
#Introduction - HTTP, the Internet, and the Web
Trang báo Wall Street Journal ngày hôm nay bao gồm 197 quảng cáo, và trong đó có 159 quảng cáo- khoảng 80%-đặc điểm của một địa chỉ World Wide Web.
Thậm chí còn đáng chú ý hơn, chỉ có 121 (61%) danh sách số điện thoại.
Nếu những quảng cáo là sự phản chiếu của xã hội, song sở đây trên nước Mỹ, ít nhất, Web cũng chở thành một phần cần thiết trong cuộc sống của họ.

Cuốn sách này viết về cái mà tạo ra dấu Web. Nó giải thích giao thức mà định nghĩa rõ trình duyệt Web giao tiếp với Web Server như thế nào, cái cơ chế giữ sự giao tiếp an toàn từ các thứ giả mạo và những kẻ nghe trộm, và kỹ thuật trải nghiệm Web nhanh hơn. Trong chương đầu tiên, chúng ta có một phần giới thiệu nhanh về một ít khái niệm quan trọng, bao gồm mối quan hệ giữa giao thức HTTP và trang Web, khái niệm của protocol layers và ý tưởng của một địa chỉ Web. Phần cuối cùng chỉ ra những nét chính phần còn lạ của bài viết.

Cuối cuốn sách chúng ta sẽ bao hàm tất cả các khía cạnh của giao thức HTTP: sự vận hành của nó, định dạng message, cơ chế an toàn, và những kỹ thuật nhanh chóng. Chúng ta cũng sẽ được thấy HTTP đã và đang tiến triển như thế nào, và sự bổ sung để duy trì những thứ lạc hậu chỉ tương thích với những hệ thống cũ Và cuối cùng, chúng ta sẽ thực hiện những thứ chúng ta đã học và áp dụng nó vào việc xây dựng những kiến trúc Website có tính leo thang, tính sẵn sàng đáp ứng, và an toàn.
<a name="1.1"></a>
##1.1 HTTP và World Wide Web
Mạng Internet có chỉ ra nguồn gốc của nó để nghiên cứu các dự án bắt đầu từ những năm 1960 bởi the United States Department of Defense. Một nhà vật lý học người Anh làm việc ở Switzerland, tuy nhiên, cho rằng Internet ngày nay ảnh hưởng hơn bất kì ai khác. Tháng 3 năm 1990, Tim Berners-Lee lần đầu tiên phác thảo cái lợi ích của hypertext-based, liên kết với hệ thống thông tin. 

Và cuối năm 1990, Berners-Lee, cùng với Robert Cailiau đã tạo ra những trình duyệt web đầu tiên và các máy chủ. Những trình duyệt đó cần một giao thức để quy định các giao tiếp; vì thế Berners-Lee và Cailliau đã thiết kế ra phiên bản đầu tiên của HTTP.

Kể từ đó, traffic Web phát triển để thống trị Internet. Năm 1998, HTTP chiếm 75% thông lượng Internet với các giao thức khác nhau như email, file transfer, và  remote login. Ngày nay, ít nhất trong biệt ngữ thông thường, World Wide Web là Internet. Và Web tiếp tục phát triển. Vào mùa thu năm 2000, khi cuốn sách này sắp sửa hoàn thành, thì Censorware Project báo cáo rằng Web có xấp xỉ:

* 2 700 000 000 pages
* 50 700 000 000 000 bytes of text
* 608 000 000 images
* 10 100 000 000 000 bytes of image data

Trong 24 tiếng trước, Web đã thêm:

* 5 490 000 new pages
* 103 000 000 000 new bytes of text
* 1 240 000 new images
* 20 600 000 000 new bytes of image data

Giao thức HTTP phát triển cùng với Web. Nguồn gốc sự chỉ rõ cho HTTP vừa khít trên một trang giấy và có 656 từ, có thể được đọc và hiểu trong vài phút. Ngược lại, sự chỉ rõ cho HTTP/v1.1 chứa trong vài tài liệu. Tài liệu chính chứa đơn độc gần 60 000 từ trong 176 trang.

176 trang về những đặc điểm kỹ thuật chính của HTTP, cùng với các tài liệu khác
 để tạo ra chuẩn HTTP, định ra các quy luật bởi các trình duyệt Web, Web server, proxies, và các Web system khác tạo ra và duy trì các giao tiếp với nhau. Thật vậy, sức mạnh lớn nhất của HTTP là khả năng của nó trong việc chứa hầu hết các kiểu trao đổi thông tin. Web page, ví dụ, thường được tạo ra theo quy luật HTML. Nhưng HTTP thì cũng giỏi trong việc truyền từ xa các printing instructions, program files, và multimedia object. Với sự phổ biến của các trình duyệt Web, sự lan rộng của Internet, và sự năng động và khéo léo của HTTP, giao thức Bernerd-Lee và Caillicau đã phát triển có thể thực sự trở thành phát minh cho tất các hệ thống mạng máy tính.
<a name="1.2"></a>
##1.2 Protocol Layers
Để hiểu về HTTP, nó giúp ta biết một chút về hạ tầng Internet. Chúng ta có thể nhìn vào hạ tầng Internet qua hai khía cạnh. Từ một góc nhìn, Internet là một tập hợp các mạng kết nối lỏng lẻo về cả sizes và types mà hợp tác để trao đổi thông tin. Thay vì việc xem xét các hệ thống vật lý,tuy nhiên, chúng ta sẽ tập trung vào phần mềm mà điều khiển toàn bộ hệ thống. Từ khía cạnh đó, Internet là một tập hợp nhiều giao thức giao tiếp khác nhau; những giao thức đó hợp tác để cung cấp các dịch vụ. 

Cung cấp các dịch vụ qua Internet thì thực sự là một công việc phức tạp. Để tạo ra các thách thức dễ quản lý hơn, những người thiết kế mạng Internet chia đông việc thành các thành phần khác nhau và gán các thành phần đó cho một vài giao thức giao tiếp khác nhau. Những người thiết kế đẩy mạnh tổ chức những giao thức thành các layers

Ảnh minh họa 1.1 cho ta thấy 4 protocol layers trong một hệ thống máy tính. Layer protocol thấp nhất điều khiển công nghệ mạng đặc trưng, liệu nó có phải là mạng Ethernet lan, một dial-up modem, một FO link, hay một công nghệ nào khác. Một trong những sức mạnh lớn nhất của Internet là khả năng thích nghi với hầu hết các công nghệ mạng. Việc cô lập cho công nghệ đó trong layer mà nó chứa đựng là một trong những lý do cho sự khéo léo; hỗ trợ một công nghệ mạng mới chỉ là một vấn đề của việc bổ sung một low layer protocol phù hợp.

![Ảnh minh họa 1.1](http://i.imgur.com/d05p2xU.png)

**Ảnh minh họa 1.1:**

**Hệ thống giao tiếp qua Internet sử dụng một vài giao thức. Mỗi giao thức vận hành tại layer của nó trong một protocol stack, hoàn thành các trách nhiệm đặc biệt. Ảnh cho ta thấy 4 protocol layers được sử dụng trong một lần trao đổi HTTP. HTTP cũng là một ứng dụng.**

Protocol layer phía trên Network protocol là Internet protocol (IP). Và mặc dù P có thể không được nổi tiếng bằng các protocol khác trong Internet, nó có thể dễ dàng nhận ra với cái tên Internet Protocol. Không phải mỗi hệ thống trên Internet đều sử dụng cùng một công nghệ mạng, các hệ thống khác nhau dựa vào các truyền tải và ứng dụng protocol khác nhau. Mỗi hệ thống trên Internet, mặc dù, sử dụng IP. Trách nhiệm chính của IP là mang những các packet thông tin cá nhân tới điểm đến. Hầu hết các giao tiếp giữa các hệ thống yêu cầu sự trao đổi của nhiều packet này, và IP có trách nhiệm cho mỗi packet đó.

Protocol tiếp theo lad Transport protocol. Nhìn chung Internet sử dụng 3 transport protocol khác nhau, nhưng giao tiếp Web chỉ sử dụng một cái giao thức chính: Transmission Control Protocol (TCP) . Trong khi IP có trách nhiệm trong việc di chuyển các packet từ hệ thống này sang hệ thống khác, TCP chuyển các thông tin đáng tin cậy. Nó đảm bảo rằng các packet đến một cách có thứ tự, và không bị thất lạc trong việc di chuyển, và không xảy ra lỗi.

Protocol layer cuối cùng là Application. Giao thức này thực sự làm cái gì đó có ý nghĩa với những thông tin được trao đôi, bao bồm biệc tổ chức sự trao đổi gữa các cuộc trao đối. Application protocol hấp dẫn chúng tôi nhất ở đây, tất nhiên đó là HTTP, nhưng vẫn còn nhiều Application protocol khác trên Internet.
Có nhiều Applicaition protocol cho việc trao đổi thư điện tử, thiết lập các cuộc điện thoại, cấp quyền cho các session tức thời, và còn nữa. Tất nhiên, như chúng ta đã nêu trước đó, lưu lượng HTTP là một khối lớn của lưu lượng Internet ngày nay.

Sử tổ chức protocol nội bộ của một hệ thống đơn độc không phải là những thứ quan trọng cho việc truyền thông. Sau tất cả, nó sử dụng nhiều hơn một hệ thống để có một sự truyền thông ý nghĩa.Ảnh minh họa 1.2 mở rộng hình ảnh trước bằng cách đưa hệ thống thứ 2 vào đồ thị. Giờ chúng ta có thể bắt đầu thấy cách truyền thông thực sự xảy ra như thế nào. Ảnh cho thấy những mũi tên màu đen giữa các protocol layer khác nhau trong một hệ thống. Những mũi tên đó miêu tả sự tương tác trực tiếp. Application protocol trong một hệ thống tương tác một cách trực tiếp với Transport Protocol (TCP). Giao thức đó, lần lượt, tương tác trực tiếp với IP, và IP tương tác với giao thức để điều khiển Network Technology. Các hệ thống khác nhau có thể tương tác trực tiếp với nhau chỉ qua Network Technology.

![Ảnh minh họa 1.2](http://i.imgur.com/cl20Z4I.png)

**Ảnh minh họa 1.2:**

**Khi mà hai hệ thống truyền tin, các protocol của nó ghép nối trực tiếp với các protocol khác trong mỗi hệ thống riêng biệt. Một cách có hiệu quả, tuy vậy, protocol ở mỗi layer truyền tin với các protocol đồng cấp trong một hệ thống khác.**

Ảnh 1.2 cũng cho ta thấy một biểu mẫu tương tác y như vậy, tuy nhiên. Mũi tên màu xám miêu tả sự tương tác logic, và như là ảnh minh họa chỉ ra, mỗi protocol layer tương tác một cách logic với các đồng cấp của nó trong một hệ thống cách xa. Mặc dù Application trong một hệ thống chỉ tương tác trực tiếp với TCP, kết quả của sự tương tác đó là sự truyển thông logic với Application trong hệ thống khác. Trong trường hợp HTTP, sự thiết lập HTTP trong một hệ thống ( ví dụ như là Web browser ) đang giao tiếp một cách có hiệu quả với sự thiết lập HTTP trong một hệ thống khác (web Server).

Để xem việc xử lý đó một cách chi tiết, chúng ta cùng nhìn xem HTTP mesage truyền từ Web browser của bạn tới Web server như thế nào trên Internet.

![Ảnh minh họa 1.3](http://i.imgur.com/5IfCAXH.png)

**Ảnh minh họa 1.3:**

**Khi mà HTTP application có một message cần gửi, nó truyền message đó tới layer protocol thấp hơn. Message đó tiếp tục đi xuông dưới qua các protocol layer cho đến khi nào nó rời hệ thống. Như ảnh đã cho thấy, mỗi protocol sở hữu một tên riêng cho đơn vị dữ liệu nó gửi và nhận. TCP gọi nó là segment; IP gọi nó là datagram; và Network Technology gửi và nhận packet of frame.**

Ảnh minh họa 1.3 cho ta thấy 1 trong 4 bước đầu tiên trong qui trình xử lý. Đầu tiên, tiến trình HTTP xây dựng  message nó muốn gửi; sau đó, trong bước 1, nó truyeegn message tới một TCP process. TCP process bổ sung thêm tcp-specific information vào message, tcp segment. Sự bổ sung này giống như thêm phong bì cho các lá thư thông thường. Các lá thứ mang trong mình thông tin thực, nhưng chúng ta đính kèm chúng trên những phong bì vì lợi ích của bưu điện. Bưu điện sử dụng thông tin địa chỉ trên phong bì để chuyển mail, không cần quan tâm đến nội dung lá thứ. Trong bước 2, TCP process chuyển segment qua IP process. IP process build trên segment đấy bằng cách thêm nhiều thông tin, thực chất là thêm phong bì khác. Kết quả là một IP datagram, đạt được protocol implementation điều khiển network tachnology hệ thống. Chỉ trong bước 4, sau nhiều thông tin được bổ sung vào mesage gốc, lúc này thông tin thực sự rời khỏi hệ thống máy tính. Nó rời ra ngoài và nằm trong một form of paket or frame.

Ảnh minh họa 1.4 hoàn tất ví dụ qua việc show ra những diễn biến khi mà packet tới Web server. Nó có thể đi qua nhiều hệ thống khác nhau và và qua nhiều network technology để tới được đó, nhưng các bước trung gian không qan trọng với Web browser hay Server. Tiến trình trong ảnh 1.4 cho thấy đó là sự đảo ngược của bốn bước đầu tiền. Mỗi protocol layer chấp nhập một message, xử lý nó khi cần, và truyền các thống tin được trích ra lên trên protocol cao hơn. Cuối cùng, trong bước 8, HTTP message gốc chuyển tới Web server application.
Trong cuốn sach này, chúng ta chủ yếu quan tâm đến Applcation layer protocol-chủ yếu là HTTP, qua chương 5 sẽ giới thiệu một vài application protocols liên quan. Bởi vì HTTP tin tưởng TCP để chuyển các message, mặc dù, đôi khi chúng ta sẽ bàn luần về  sự tương tác giữa HTTP và TCP; những sự tương tác đó có sự ảnh hưởng đáng kể tới HTTP performance, và chúng sẽ đưa ta tới sự phát triển của nhiều đặc điểm qua trọng trong HTTP

![Ảnh minh họa 1.4](http://i.imgur.com/SDCSdSK.png)

**Ảnh minh họa 1.4:**

**HTTP messages di chuyển trong hệ thống qua các protocol stack cho tới khi nó đến được Apllication layer. Mỗi protocol layer loại bỏ di các thông tin xác định của nó, các Network packet trở thành IP datagram và sau tiếp là TCP segments. Cuối cùng, HTTP messages chuyển tới HTTP application process.**
<a name="1.3"></a>
##1.3 Uniform Resource Indentifers (URI)

Rất có khả năng, bạn đã quen biết URI, hoặc `urls`. Nó là những địa chỉ chúng ta sử dụng để đặt tên cho Website; `http://langocson.com` là một ví dụ. Bạn có thể hơi bị bất ngờ, mặc dù, khi bạn thấy `http` có liên quan tới URI, hoặc `uris`. Thật vậy, không có sự khác nhau nhiều giữa hai khái niệm đó. Về mặt kỹ thuật, một `url` chỉ là một dạng của `uri`. Sau tất cả, chỉ có 1 cách để nhận dạng đối tượng để mô tả địa chỉ của nó. Như một vấn đề thực tiễn, mặc dù, hai thuật ngữ này tương đương nhau. Cuốn sách này thường sử dụng `uri` bởi vì đó là thuật ngữ trong qui cách HTTP. Nếu, mỗi khi bạn thấy `uri`, bạn có thể dịch nó như là `url`, bạn sẽ không chịu ảnh hưởng gì.

Trong nhiều trường hợp, `uri` có thể chứa nhiều thông tin, và hiểu biết kĩ về cấu trúc `uri` thì hữu ích trong hiểu về các khía cạnh của HTTP. Ảnh minh họa 1.5 đưa ra một `uri` đơn giản với hầu hết các yếu tố khả thi.

![Ảnh minh họa 1.5](http://i.imgur.com/E75cNn2.png)

|Thành phần|Dùng để|
|----------|-------|
|protocol| Xác định application protocol cần thiết cho việc truy cập tài nguyên, trong trường hợp này là HTTP|
|username|Nếu giao thức hỗ trợ khái niệm usernames, nó cung cấp một username để truy cập tới tài nguyên; ví dụ ở đây có một username:"guest"|
|password|Password kết hợp với username,"secret" là một ví dụ|
|host|Hệ thống truyền tin chứa tài nguyên; theo HTTP thì đây là Web server; ví dụ `www.ietf.org`|
|port|TCP port- application protocol dùng để truy cập tài nguyên; mỗi giao thức có một cổng TCP mặc định (với HTTP là cổng 80); nhưng nó có thể được ghi đè lên nếu khả thi|
|path|Tạm dịch là địa chỉ chưa file muốn truy suất|
|file|Là tài nguyền muốn truy suất|
|query| Thông tin bổ sung về tài nguyên hoặc client|
|pragment|Địa chỉ đặc biệt trong một tài nguyên|

<a name="1.4"></a>
##1.4 Bố cục của cuốn sách

Phần còn lại của cuốn sách bao gồm 4 chương và 2 phụ lục. Chương tiếp theo, chương 2, chúng ta có cài nhìn kĩ hơn về HTTP. Chương này mô tả sự vận hành của giao thức, tập trung vào những thứ HTTP làm mà không cần quan tâm nhiều về chi tiết nội bộ bên trong. Tuy nhiên chúng ta cũng không bỏ qua phần nội chi tiết. Chúng nằm trong chương 3, chỗ đó chúng ta sẽ có cái nhìn chi tiết về cấu chúc của HTTP message. Hai chương sau đó chứa hai thành phần chính của việc sử dụng hiệu quả HTTP là security và performance. Chương 4 chúng ta sẽ đầu sâu hơn về việc an toàn truyền tin của HTTP qua việc sử dụng tất cả các phương tiện của HTTP. Chương 5 cung cấp một cái nhìn khái quát của nhiều addition protocol và technologies để giúp cải thiện HTTP performance. đặc biệt là balancing và caching. Cuốn sách này tập trung vào phiên bản cuối cùng của HTTP là HTTP/V1.1. Trong phục lục `a`, mặc dù, chúng xem xét mỗi liên hệ giữa phiên bản 1.1 và phiên bản trước; chúng ta cũng sẽ xem xét các thiết lập HTTP phổ biến trong HTTP/V1.1 tốt như thế nào. Phụ lục cuối liên kết lại các thành phần của HTTP mà đã được học qua cuốn sách. Thay vì mô tả và giải thích kỹ thuật, tuy nhiên, ta nên áp dụng chúng vào các vấn đền quan trọng và hiệu quả, xây dựng  Website "đạn không xuyên thủng được". Cuốn sách khép lại với danh sách diễn giải của các tham chiếu, glossary và index.
