# BÁO CÁO TASK 12 - Dịch sách HTTP Essentials

>-----------------------------------------
>Nguồn tham khảo: TFLAT
>
>Người thực hiện: Lã Ngọc Sơn
>
>Cập nhật ngày: 6/4/2017
>
>-------------------------

### Mục lục
# HTTP Essentials
## Protocols for Secure, Scaleable Websites
## Stephen A.Thomas
![](http://i.imgur.com/3MwpkhP.png)
#### [1.Chapter 01 Introduction - HTTP, the Internet, and the Web](#1)
* [1.3 Uniform Resource Indentifers (URI)](#1.3)

#### [2.Chapter 02- Vận hành HTTP - Clients $ Server sử dụng HTTP như thế nào](#2)
* [2.1 Clients và Server](#2.1)
* [2.2 Các phương thức User](#2.2)
* [2.3 Bí mật](#2.3)
* [2.4 Việc hợp tác giữa các server](#2.4)
* [2.5 Cockies và Việc duy trì trạng thái](#2.5)

#### [3.Chapter 03 HTTP Messages - Cú pháp của giao tiếp HTTP](#3)
* [3.1 Cấu trúc của thông báo HTTP](#3.1)
* [3.2 Các Trường Header](#3.2)

>---------------------------------------------

## 1.2 Protocol Layers
Để hiểu về HTTP, nó giúp ta biết một chút về hạ tầng Internet. Chúng ta có thể nhìn vào hạ tầng Internet qua hai khía cạnh. Từ một góc nhìn, Internet là một tập hợp các mạng kết nối lỏng lẻo về cả sizes và types mà hợp tác để trao đổi thông tin. Thay vì việc xem xét các hệ thống vật lý,tuy nhiên, chúng ta sẽ tập trung vào phần mềm mà điều khiển toàn bộ hệ thống. Từ khía cạnh đó, Internet là một tập hợp nhiều giao thức giao tiếp khác nhau; những giao thức đó hợp tác để cung cấp các dịch vụ. 

Cung cấp các dịch vụ qua Internet thì thực sự là một công việc phức tạp. Để tạo ra các thách thức dễ quản lý hơn, những người thiết kế mạng Internet chia đông việc thành các thành phần khác nhau và gán các thành phần đó cho một vài giao thức giao tiếp khác nhau. Những người thiết kế đẩy mạnh tổ chức những giao thức thành các layers

Ảnh minh họa 1.1 cho ta thấy 4 protocol layers trong một hệ thống máy tính. Layer protocol thấp nhất điều khiển công nghệ mạng đặc trưng, liệu nó có phải là mạng Ethernet lan, một dial-up modem, một FO link, hay một công nghệ nào khác. Một trong những sức mạnh lớn nhất của Internet là khả năng thích nghi với hầu hết các công nghệ mạng. Việc cô lập cho công nghệ đó trong layer mà nó chứa đựng là một trong những lý do cho sự khéo léo; hỗ trợ một công nghệ mạng mới chỉ là một vấn đề của việc bổ sung một low layer protocol phù hợp.

![Ảnh minh họa 1.1](http://i.imgur.com/d05p2xU.png)

**Hình 1.1: Hệ thống giao tiếp qua Internet sử dụng một vài giao thức. Mỗi giao thức vận hành tại layer của nó trong một protocol stack, hoàn thành các trách nhiệm đặc biệt. Ảnh cho ta thấy 4 protocol layers được sử dụng trong một lần trao đổi HTTP. HTTP cũng là một ứng dụng.**

Protocol layer phía trên Network protocol là Internet protocol (IP). Và mặc dù IP có thể không được nổi tiếng bằng các protocol khác trong Internet, nó có thể dễ dàng nhận ra với cái tên Internet Protocol. Không phải mỗi hệ thống trên Internet đều sử dụng cùng một công nghệ mạng, các hệ thống khác nhau dựa vào các truyền tải và ứng dụng protocol khác nhau. Mỗi hệ thống trên Internet, mặc dù, sử dụng IP. Trách nhiệm chính của IP là mang những các packet thông tin cá nhân tới điểm đến. Hầu hết các giao tiếp giữa các hệ thống yêu cầu sự trao đổi của nhiều packet này, và IP có trách nhiệm cho mỗi packet đó.

Protocol tiếp theo là Transport protocol. Nhìn chung Internet sử dụng 3 transport protocol khác nhau, nhưng giao tiếp Web chỉ sử dụng một cái giao thức chính: Transmission Control Protocol (TCP) . Trong khi IP có trách nhiệm trong việc di chuyển các packet từ hệ thống này sang hệ thống khác, TCP chuyển các thông tin đáng tin cậy. Nó đảm bảo rằng các packet đến một cách có thứ tự, và không bị thất lạc trong việc di chuyển, và không xảy ra lỗi.

Protocol layer cuối cùng là Application. Giao thức này thực sự làm cái gì đó có ý nghĩa với những thông tin được trao đôi, bao bồm biệc tổ chức sự trao đổi gữa các cuộc trao đối. Application protocol hấp dẫn chúng tôi nhất ở đây, tất nhiên đó là HTTP, nhưng vẫn còn nhiều Application protocol khác trên Internet.
Có nhiều Applicaition protocol cho việc trao đổi thư điện tử, thiết lập các cuộc điện thoại, cấp quyền cho các session tức thời, và còn nữa. Tất nhiên, như chúng ta đã nêu trước đó, lưu lượng HTTP là một khối lớn của lưu lượng Internet ngày nay.

Sự tổ chức protocol nội bộ của một hệ thống đơn độc không phải là những thứ quan trọng cho việc truyền thông. Sau tất cả, nó sử dụng nhiều hơn một hệ thống để có một sự truyền thông ý nghĩa.Ảnh minh họa 1.2 mở rộng hình ảnh trước bằng cách đưa hệ thống thứ 2 vào đồ thị. Giờ chúng ta có thể bắt đầu thấy cách truyền thông thực sự xảy ra như thế nào. Ảnh cho thấy những mũi tên màu đen giữa các protocol layer khác nhau trong một hệ thống. Những mũi tên đó miêu tả sự tương tác trực tiếp. Application protocol trong một hệ thống tương tác một cách trực tiếp với Transport Protocol (TCP). Giao thức đó, lần lượt, tương tác trực tiếp với IP, và IP tương tác với giao thức để điều khiển Network Technology. Các hệ thống khác nhau có thể tương tác trực tiếp với nhau chỉ qua Network Technology.

![Ảnh minh họa 1.2](http://i.imgur.com/cl20Z4I.png)

**Hình 1.2: Khi mà hai hệ thống truyền tin, các protocol của nó ghép nối trực tiếp với các protocol khác trong mỗi hệ thống riêng biệt. Một cách có hiệu quả, tuy vậy, protocol ở mỗi layer truyền tin với các protocol đồng cấp trong một hệ thống khác.**

Ảnh 1.2 cũng cho ta thấy một biểu mẫu tương tác y như vậy, tuy nhiên. Mũi tên màu xám miêu tả sự tương tác logic, và như là ảnh minh họa chỉ ra, mỗi protocol layer tương tác một cách logic với các đồng cấp của nó trong một hệ thống cách xa. Mặc dù Application trong một hệ thống chỉ tương tác trực tiếp với TCP, kết quả của sự tương tác đó là sự truyền thông logic với Application trong hệ thống khác. Trong trường hợp HTTP, sự thiết lập HTTP trong một hệ thống ( ví dụ như là Web browser ) đang giao tiếp một cách có hiệu quả với sự thiết lập HTTP trong một hệ thống khác (web Server).

Để xem việc xử lý đó một cách chi tiết, chúng ta cùng nhìn xem HTTP mesage truyền từ Web browser của bạn tới Web server như thế nào trên Internet.

![Ảnh minh họa 1.3](http://i.imgur.com/5IfCAXH.png)


**Hình 1.3: Khi mà HTTP application có một message cần gửi, nó truyền message đó tới layer protocol thấp hơn. Message đó tiếp tục đi xuông dưới qua các protocol layer cho đến khi nào nó rời hệ thống. Như ảnh đã cho thấy, mỗi protocol sở hữu một tên riêng cho đơn vị dữ liệu nó gửi và nhận. TCP gọi nó là segment; IP gọi nó là datagram; và Network Technology gửi và nhận packet of frame.**

Ảnh minh họa 1.3 cho ta thấy 1 trong 4 bước đầu tiên trong qui trình xử lý. Đầu tiên, tiến trình HTTP xây dựng  message nó muốn gửi; sau đó, trong bước 1, nó truyền message tới một TCP process. TCP process bổ sung thêm tcp-specific information vào message, tcp segment. Sự bổ sung này giống như thêm phong bì cho các lá thư thông thường. Các lá thứ mang trong mình thông tin thực, nhưng chúng ta đính kèm chúng trên những phong bì vì lợi ích của bưu điện. Bưu điện sử dụng thông tin địa chỉ trên phong bì để chuyển mail, không cần quan tâm đến nội dung lá thứ. Trong bước 2, TCP process chuyển segment qua IP process. IP process build trên segment đấy bằng cách thêm nhiều thông tin, thực chất là thêm phong bì khác. Kết quả là một IP datagram, đạt được protocol implementation điều khiển network tachnology hệ thống. Chỉ trong bước 4, sau nhiều thông tin được bổ sung vào mesage gốc, lúc này thông tin thực sự rời khỏi hệ thống máy tính. Nó rời ra ngoài và nằm trong một form của paket of frame.

Ảnh minh họa 1.4 hoàn tất ví dụ qua việc show ra những diễn biến khi mà packet tới Web server. Nó có thể đi qua nhiều hệ thống khác nhau và và qua nhiều network technology để tới được đó, nhưng các bước trung gian không qan trọng với Web browser hay Server. Tiến trình trong ảnh 1.4 cho thấy đó là sự đảo ngược của bốn bước đầu tiền. Mỗi protocol layer chấp nhập một message, xử lý nó khi cần, và truyền các thống tin được trích ra lên trên protocol cao hơn. Cuối cùng, trong bước 8, HTTP message gốc chuyển tới Web server application.
Trong cuốn sach này, chúng ta chủ yếu quan tâm đến Applcation layer protocol-chủ yếu là HTTP, qua chương 5 sẽ giới thiệu một vài application protocols liên quan. Bởi vì HTTP tin tưởng TCP để chuyển các message, mặc dù, đôi khi chúng ta sẽ bàn luần về  sự tương tác giữa HTTP và TCP; những sự tương tác đó có sự ảnh hưởng đáng kể tới hiệu năng HTTP, và chúng sẽ đưa ta tới sự phát triển của nhiều đặc điểm qua trọng trong HTTP

![Ảnh minh họa 1.4](http://i.imgur.com/SDCSdSK.png)

**Ảnh 1.4: HTTP messages di chuyển trong hệ thống qua các protocol stack cho tới khi nó đến được Apllication layer. Mỗi protocol layer loại bỏ di các thông tin xác định của nó, các Network packet trở thành IP datagram và sau tiếp là TCP segments. Cuối cùng, HTTP messages chuyển tới HTTP application process.**
<a name="1.3"></a>
## 1.3 Uniform Resource Indentifers (URI)

Rất có khả năng, bạn đã quen biết URI, hoặc `urls`. Nó là những địa chỉ chúng ta sử dụng để đặt tên cho Website; `http://langocson.com` là một ví dụ. Mặc dù, bạn có thể hơi bị bất ngờ, khi bạn thấy `http` có liên quan tới URI, hoặc `uris`. Thật vậy, không có sự khác nhau nhiều giữa hai khái niệm đó. Về mặt kỹ thuật, một `url` chỉ là một dạng của `uri`. Sau tất cả, chỉ có 1 cách để nhận dạng đối tượng để mô tả địa chỉ của nó. Hai thuật ngữ này tương đương nhau. Cuốn sách này thường sử dụng `uri` bởi vì đó là thuật ngữ trong qui cách HTTP. Nếu mỗi khi bạn thấy `uri`, bạn có thể dịch nó như là `url`, điều đó không ảnh hưởng gì.

Trong nhiều trường hợp, `uri` có thể chứa nhiều thông tin, và hiểu biết kĩ về cấu trúc `uri` thì hữu ích trong việc hiểu về các khía cạnh của HTTP. Ảnh minh họa 1.5 đưa ra một `uri` đơn giản với hầu hết các yếu tố khả thi.

![Ảnh minh họa 1.5](http://i.imgur.com/E75cNn2.png)

|Thành phần|Dùng để|
|----------|-------|
|protocol| Xác định application protocol cần thiết cho việc truy cập tài nguyên, trong trường hợp này là HTTP|
|username|Nếu giao thức hỗ trợ usernames, nó cung cấp một username để truy cập tới tài nguyên; ví dụ ở đây có một username:"guest"|
|password|Password kết hợp với username,"secret" là một ví dụ|
|host|Hệ thống chứa tài nguyên; theo HTTP thì đây là Web server; ví dụ `www.ietf.org`|
|port|TCP port- application protocol dùng để truy cập tài nguyên; mỗi giao thức có một TCP port mặc định (với HTTP là port 80); nhưng nó có thể được ghi đè lên nếu khả thi|
|path|Tạm dịch là địa chỉ chưa file muốn truy suất|
|file|Là tài nguyền muốn truy suất|
|query| Thông tin bổ sung về tài nguyên hoặc client|
|fragment|Địa chỉ đặc biệt trong một tài nguyên|

# Chapter 02- Vận hành HTTP - Clients $ Server sử dụng HTTP như thế nào
<a name="2.1"></a>
## 2.1 Clients và Server

Như nhiều giao thức truyền tin khác, `http` tạo ra hai từ khóa phân biệt giữa hai thành phần truyền tin. Trong một vài sự trao đổi dữ liệu `http`, một hệ thống thừa nhận vai trò của clients trong khi một cái khác là server. Sự khác nhau này rất là quan trọng, bởi vì `http` yêu cầu client và server phải tuân theo quy tắc và quy trình khác nhau. Trong một Web session đơn giản, Web browser là một `http` client, trong khi hệ thống hosting đóng vai trò như một `http` server. Mặc dù hai hệ thống này cùng sử dụng giao thức `http`, chúng hiển nhiên có vai trò lớn và khác nhau trong sự giao tiếp đó. Chúng ta sẽ thấy trong mục này, client - người mà luôn luôn khởi đầu giao tiếp `http`, điều khiển một vài đặc trưng quan trọng của mục này, bao gồm sự kết nối `tcp` cơ bản, sự luôn phiên và đường truyền.

### 2.1.1 Khởi đầu một giao tiếp

Sự khác nhau rõ rệt nhất giữa http client và server là vai trò trong việc khởi đầu một giao tiếp. Chỉ có client mới có thể làm việc đó. Một server có thể chứa nhiều thông tin nó có thể cung cấp và nhiều hàm nó có thể thực hiện, nhưng nó làm những việc đó chỉ khi được yêu cầu để làm bởi một client. Một `http` client request, `http` server sẽ response.

Ảnh 2.1 đưa ra một sự trao đổi điển hình. Web browser, trong vai trò là một client, gửi một request tới Web server. Server sau đó gửi lại một response tới client đó. Một client có thể thực hiện nhiều hành động hơn dựa trên sự phản hồi của server, nhưng `http` xem xét hành động đó là một sự trao đổi dữ liệu hoàn toàn mới. Sự trao đổi dữ liệu mới đó, như các sự trao đổi dữ liệu `http`, bắt đầu với một request của client.

![Ảnh 2.1](http://i.imgur.com/H1PDC8i.png)

**Hình 2.1: Client bắt đầu một giao tiếp trao đổi dữ liệu bằng việc gửi một yêu cầu tới một server. Server phản hồi yêu cầu của client. Nó không tự tạo ra giao tiếp**

### 2.1.2 Connection

Giống như các application protocacol mà sử dụng `tcp`, `http` yêu cầu một kết nối `tcp`. Bởi vì `http` client có vai trò  mở đầu cho một giao tiếp `http`  , client cũng có trách nhiệm khởi tạo 1 quá trình tạo ra kết nối `tcp`. Như ảnh minh họa 2.2 cho thấy, quy trình này yêu cầu sự trao đổi dữ liệu của 3 thông báo `tcp`. Thông báo `tcp` được trình bày trong dòng chữ màu xám.
Sau sự trao đổi dữ liệu `tcp` ban đầu, client có thể gửi các yêu cầu `http` của nó. Những yêu cầu này được server phản hồi bằng các dòng chữ màu đén. Ảnh minh họa cũng cho thấy thông báo yêu cầu đóng một kết nối `tcp`. Server khởi tạo sự trao đổi dữ liệu này bởi vì nó biết khi nào nó có đủ các yêu cầu của client.

**Kết nối TCP** 
**Hình 2.2 tô đậm các từ khóa đặc trưng của TCP message. Thông báo đầu tiên, client gửi một SYN, "synchronize" flag. SYN chỉ ra rằng client muốn tạo ra một kết nối. Server phản hồi bằng việc thiết lập SYN và ACK ("acknowledge") flag và nó đã chấp nhận kết nối. Client hoàn thành việc tạo kết nối bằng việc gửi một TCP message chỉ với ACK flag. Ba message này thường được gọi là "three-way handshake". Việc đóng kết nối chỉ yêu cầu hai message. Cái đầu tiên chứa FIN ("finished") flag và cái thứ hai chứa cả bộ FIN và ACK flag.**

![Hình 2.2](http://i.imgur.com/oO2pgcC.png)

**Ảnh 2.2: Trước khi hệ thống có thể trao đổi thông báo HTTP, chúng phải thiết lập một kết nối HTTP. Các bước 1,2 và 3 trong ví dụ cho thấy sự thiết lập một kết nối. Một khi kết nối TCP  sẵn sàng, client gửi tới server một yêu cầu HTTP. Hai bước cuối, 6 và 7, cho thấy việc đóng kết nối TCP.**

### 2.1.3 Sự liên tục - Persistence ( Sự kiên trì :D )

Phiên bản đầu tiên của HTTP yêu cầu client thiết lập một kết nối `tcp` riêng lẻ với mỗi yêu cầu. Ví dụ trang Web, sự yêu cầu không đưa ra nhiều lỗi. Mặc dù vì các trang web ngày càng phát triển phức tạp và đồ họa hơn, việc tạo ra kết nối `tcp` bắt đầu có sự ảnh hưởng đáng chú ý đối với đặc tính Web. Bởi vì Web page có chứa nhiều project tách rời, và client phải tạo ra một yêu cầu `http` tách rời để lấy lại mỗi object đó. Ví dụ trang web trong hình 2.3, nó chứa hơn 20 object. Với phiên bản `http` trước, trình duyệt Web phả thiết lập hơn 20 kết nối riêng lẻ trước khi chúng có thể hiển thị lên trang.

Phiên bản 1.1 của  giao thức `http`  triệt tiêu vấn đê đa kết nối `tcp` với một được điểm được biết đến đó là `persistence`.( Mặc dù persistence được giới thiệu trong phiên bản 1.0, không phải hầu hết các hệ thống có thể hỗ trộ nó; với phiên bản 1.1 nó được coi như là mặc định). Persistence cho phép một client tiếp tục sử dụng kết nối `tcp` sau khi các yêu cầu ban đầu của nó được lấp đầy. Client hoàn toàn tạo ra nhiều request mới trên cùng một kết nối. Ví dụ trong hình 2.4 .

![Ảnh 2.3](http://i.imgur.com/QTwt5sW.png) 

**Hình 2.3: Trang web phức tạp như thế này chứa nhiều object, mỗi object request một HTTP message trao đổi dữ liệu để nhận được. Trong ví dụ này, trang chính là một object, và mỗi yếu tố đồ họa là một object tách rời. Nhìn chung, một client phải tạo ra 20 yêu cầu HTTP tách rời trước khi nó có thể hiển thị lên trang web**
![Ảnh 2.4](http://i.imgur.com/qaq3fZp.png)

**Hình 2.4: Với kết nối tiếp tục, một client có thể tạo ra nhiều request HTTP qua một kết đối TCP đơn giản. Request đầu tiên trong step 4 - được server phản hồi trong step 5. Trong step 6, client tiếp tục việc đó bằng cách gửi tới server một request khác trên cùng một kết nối TCP. Máy chủ phản hồi tới request này trong step 7 và sau đó đóng kết nối TCP.**

Sự tiếp tục đó đòi hỏi sự hợp tác từ cả client và server. Client phải đưa ra quyết định để sử dụng kết nối một cách liên tục. Tuy nhiên, nó có thể làm được với điều kiện là server cho phép nó. Server không phải đóng kết nối TCP sau khi đầy đủ request từ client.

### 2.1.4 Đường truyền

Persistence giúp cải thiện hiệu năng đường truyền HTTP. Với đường truyền, một client không phải đợi một response cho một request trước khi tạo ra một request mới trên kết nối. Nó có thể theo sau yêu cầu đầu tiên ngày lập tức với yêu cầu thứ hai. Hình 2.5 cho thấy một client có thể sử dụng đường truyền để gửi nhiều yêu cầu mà không phải đợi phản hồi.

![Hình 2.5](http://i.imgur.com/yHrusy2.png)

**Hình 2.5: Đường truyền cho phép một HTTP client tạo ra nhiều request mới mà không phải đợi các response từ message trước của nó. Trong ảnh minh họa, client gửi yêu cầu đầu tiên của nó trong bước 4. Nó hoàn thoàn theo sau bởi một yêu cầu trong bước 5. Client không phải đợi phản hồi của server, cái mà được chuyển trong bước 6.**

Đồ thị trong hình 2.6 so sánh hiệu năng của đường truyền, persistence và chuỗi các kết nối đơn độc. Con số này cho thấy thời gian tiêu hao để hiện thị trang Web có chứa nhiều object. Đồ thị thừa nhận rằng nó có nhiều object. Đồ thị cũng cho thấy cứ mỗi 50 mili giây giữa server và client thì việc kết nối trình duyệt sử dụng 56 Kbit/b. Như ảnh minh họa 2.6 chứng minh, Phiên bản HTTP 1.1 sẽ tạo ra hiệu năng đáng kể. 

![Ảnh minh họa 2.6](http://i.imgur.com/aag43Ig.png)

**Cả đường truyền và sự tiếp tục có thể đề nghị một sự cải thiện đáng kể trong hiệu năng của HTTP, đặc biệt là cho các Web có nhiều project. Như đồ thị cho ta thấy, một web có 20 object có thể tốn 4 giây khi client sử dụng cuỗi các kết nối. Đường truyền và sự liên tục có thể cùng giảm thời gian này xuống hơn 1 giây.**
<a name="2.2"></a>
## 2.2 Các phương thức User

Giao thức `http` xác định 4 phương thức cơ bản -- `GET,POST,PUT & DELETE`. Ta xem xét chúng như là các phương thức user bởi vì, ít nhất trong văn cảnh của một trình duyệt Web, chúng là các kết quả trực tiếp của user action.

### 2.2.1 Web Page Rerieval - GET

Phương thức đơn giản nhất của `http`  là `GET`. Nó là việc client lấy một object từ server như thế nào. Trên một Web, trình duyệt request một trang từ web server với một `GET`. Ví dụ, ấn vào đường dẫn ở giữa hình 2.7 sẽ buộc trình duyệt phải tạo ra một yêu cầu `GET` tới server để yêu cầu một trang web mới để hiện thị.

![Ảnh 2.7](http://i.imgur.com/3Q98RqZ.png)

**Ảnh 2.7: Đường dẫn đơn giản trên một web bên dưới buộc trình duyệt phải gửi một yêu cầu GET cho một trang mới tới server. Trong ví dụ này, ấn vào đường dẫn"... Computers" sẽ buộc trình duyệt phả tạo ra một yêu cầu GET cho một trang mới.**

Như hình 2.8 cho thấy, `GET` là là một sự trao đổi hai message đơn giản. Client khởi đầu bằng việc gửi một thông báo `GET` tới máy chủ. Thông báo nhận dạng object mà client đang yêu cầu với một Uniform Resource Identifier (URI).
Nếu server có thể trả về object được yêu cầu đó, nó sẽ làm việc đó qua một response. Như ảnh đó cho thấy, server biểu thị sự thành công đó bằng một appropriate status; `200 OK` là một status code cho một phản hồi thành công. Cùng với status code, server chứa những object trong response của nó. Nếu server không thể trả về object được yêu cầu, sau đó nó có thể trả về nhiều loại status code khác nhau. Mục 3.3 sẽ chi tiết về các status code của HTTP.

![Ảnh 2.8](http://i.imgur.com/u4ThxMb.png)

**Ảnh 2.8: Một phản hồi tới một yêu cầu GET bằng việc trả về tài nguyên yêu cầu, thường là một trang mới. Trang mới là dữ liệu của response.**


### 2.2.2 Web form -POST

Trong khi `GET` buộc server gửi thông tin tới một client, phương thức `POST` cung cấp một cách cho client để gửi thông tin tới server. Trình duyệt Web thường sử dụng phương thức `POST` để gửi form tới web server. Hình 2.9 cho thấy một ví dụ phổ biến của một form. Nó mà một trang Web mà cho phép người dùng tìm kiếm. Khi mà người dùng ấn vào nút "Search", trình duyệt gửi một yêu cầu `POST` tới máy chủ; yêu cầu bao gồm thông tin mà người dùng cung cấp trong form đó.

![Ảnh 2.9](http://i.imgur.com/5DEgIgw.png)

**Ảnh 2.9: Gửi một web form thường được trình duyệt gửi một POST request tới server. POST message chứa một form dữ liệu. Trong ví dụ này, dữ liệu POST sẽ bao gồm search term("HTTP"), phạm vi (All file), phần trăm kết quả của trang(25), và phương thức liên kết (FTP).**

Như hình 2.10 cho thấy, phương thức `POST` gần giống `GET`. Client gửi một `POST` message chứa thông tin nó mong muốn gửi tới server. Như `GET` message, một phần của `POST` message là một URI. Trong trường hợp này, `uri` nhận dạng object trên server mà có thể xử lý thông tin chứa trong đó. Trên web server, uri này thường là một chương hình hoặc một đoạn script.

![Ảnh 2.10](http://i.imgur.com/83Jh1ds.png)

**Hình 2.10: Một response của server từ POST request bằng việc trả về thông tin mới như là kết quả tìm kiếm. Thông tin này được gửi kèm dữ liệu trong phản hồi**
Cũng gống như phương thức `GET`, một server có thể trả về thông tin của nó như một phần của response. Thông tin này điển hình là một trang web để hiển thị, thường là một trang báo nhận ngững gì mà người dùng đã thêm vào; trong trường hợp này là một form tìm kiếm, trang web mới thường đưa ra kết quả tìm kiếm.

### 2.2.3 File Upload - PUT

Phương thức `POST` cũng cung cấp một cách cho client để gửi thông tin tới server. Nó hoàn toàn khác so với phương thức `POST`, mặc dù nhìn hình 2.11 thì cả hai trông có vẻ giống nhau. Với phương thức `POST`, client gửi một method, uri, và data. Server trả về một status code và dữ liệu một cách tùy chọn.

![Hình 2.11](http://i.imgur.com/CopaPua.png)

**Hình 2.11: Client có thể sử dụng yêu cầu PUT để gửi một object mới tới một server. URI là một phần của yêu cầu báo cho server biết nơi để put object.**

Sự khác nhau giữa `POST` và `PUT` là trong việc server thông dịch URI như thế nào. Với một `POST`, URI xác định một object trên server mà có thể xử lý dữ liệu chứa trong đó. Với một `PUT`, trái lại, URI xác định một object nơi mà server nên đặt dữ liệu vào. Trong khi một `POST URI` thường biểu hiện dưới dạng một chương trình hay một script, còn `PUT URI` thì thường là các path và tên cho một file. Hình 2.12 cho ta một ví dụ về hoạt động của phương thức `PUT`. Trên trang này người dùng xác định địa chỉ gốc của file. Bằng việc ấn vào nút Upload, user yêu cầu browser gửi một `PUT` request tới server.

![Hình 2.12](http://i.imgur.com/Bjz8s1O.png)

**Hình 2.12: PUT request có thể được sử dụng để tải liên một file tới server. Trong ví vụ này user muốn lưu một file được xác định rõ lên server.**

### 2.2.4 File Deletion - DELETE

Với phương thức `PUT` và `GET`, HTTP trở thành một giao thức phục vụ cho việc truyền tải file đơn thuần. Phương thức `DELETE` - chức năng của nó là đưa ra cho client một cách để xóa object từ server. Như hình 2.13 cho thấy, client gửi `DELETE` message cùng với URI của object mà server nên xóa. Server phản hồi với một status code và nhiều dữ liệu tùy chọn cho client.

![Ảnh 2.13](http://i.imgur.com/lYAYJbW.png)

**Ảnh 2.13: Phương thức DELETE cho phép một client xóa bỏ object từ server. URI xác định object để xóa**
<a name="2.3"></a>
## 2.3 Bí mật :D
Sự vận hành cơ bản của `HTTP` nhìn chung xảy ra dưới dạng một kết quả trực tiếp của các end-user action. Tuy nhiên, bốn phương thức trên không chỉ là những thứ duy nhất mà giao thức đề cập. Ba giao thức tiếp theo, `TRACE`, `HEAD` và `OPTION`, thường xuyên xảy ra trong bí mật. Client sử dụng chúng để giao tiếp với server không nhiều để thực hiện các user action nhưng để sửa chữa hay chuẩn đoán các vấn đề với các phương thức cơ bản.

Mặc dù mục này không bàn luận về chúng nhiều, HTTP còn một một phương thức khác đó là `CONNECT`. Khó mà định nghĩa `CONNECT` làm việc như thế nào, ngoại trừ việc chỉ ra rằng nó có mục đích hỗ trợ việc trao đổi.(Sẽ thấy trong mục 2.4.3). Các tiện ích trong tương lai sẽ giúp định nghĩa `CONNECT` chi tiết hơn.

### 2.3.1 Capabilities - OPTIONS

Client sử dụng `OPTION` message để tìm ra những phương thức mà server hỗ trợ. Sự trao đổi dữ liệu này giống chuẩn request và response, như hình 2.4 minh họa. Nếu client chứa URI, server phản hồi với những tùy chọn liên quan tới object. Nếu client gửi một dấu *, như là URI, server sẽ trả về các tùy chọn chung phù hợp với tất cả các object.
Client có thể sử dụng `OPTION`message để xác định phiên bản của HTTP mà server hỗ trợ, hoặc trong trường hợp là một URI rõ ràng, một phương pháp mã hóa sẽ được server cung cấp cho object đó. Thông tin như vậy sẽ được client điều chỉnh việc tương tác với server như thế nào hoặc cách nó thực sự yêu cầu một object cụ thể.

![Ảnh 2.14](http://i.imgur.com/IjFhD17.png)

**Ảnh 2.14: Client có thể sự dụng yêu cầu OPTION để tìm hiểu về một object đặc biệt hoặc về bản thân server. Server trả về các sự chọn lựa dữ liệu trên response.**

### 2.3.2 Message - HEAD

Phương thức `HEAD` gần giống phương thức `GET`, ngoại trừ là server không trả về object được yêu cầu. Như hình 2.15 cho thấy, server trả về một message nhưng không có dữ liệu. ( HEAD là viết rút gọn của "header", bởi vì server chỉ trả về thông báo header trong phản hồi). Client có thể sử dụng thông báo `HEAD` khi nó muốn xác thực các object có tồn tại, nhưng nó thực sự không cần truy xuất đến object. Ví dụ,  các chương trình xác thực link trong web page, có thể sử dụng thông báo `HEAD` để đảm bảo một liên kết dẫn đến object phù hợp mà không cần phải tốn băng thông mạng và tài nguyên server rằng một sự truy xuất đầy đủ sẽ yêu cầu. Cache server cũng có thể sử dụng phương thức `HEAD`; nó chỉ cho chúng cách để thấy nếu một object thay đổi mà không nhất thiết phải truy xuất toàn bộ object.

![Ảnh 2.15](http://i.imgur.com/tAMwQdp.png)

**Ảnh 2.15: Yêu cầu HEAD tương tự phương thức GET, ngoại trừ là server không thực sự trả về object được yêu cầu, chỉ trả về HTTP headers.**

### 2.3.3 Path - TRACE
`TRACE` message giúp user cách để kiểm tra đường dẫn mạng tới server. Khi một server nhận một `TRACE`, nó phản hồi bằng cách copy `TRACE` message vào trong data cho response đó. Ví dụ trong hình 2.16.

![Hình 2.16](http://i.imgur.com/zqyvc8T.png)

Thông báo `TRACE` hữu ích hơn khi nhiều server cùng liên quan tới việc phản hồi tới một yêu cầu. Một máy chủ trung gian, ví dụ, có thể chấp nhận yêu cầu từ client nhưng nó quay lại và gửi yêu cầu đó tới server bổ sung. ( Proxy and cache server được đề cập đến trong mục mục tiếp theo, là ví dụ của các máy chủ trung gian). Khi một máy chủ trung gian được bao gồm, `TRACE` làm việc như hình 2.17. Server trung gian chỉnh sửa yêu cầu bằng việc thêm vào via-option trong thông báo. Via-option là một phần của thông báo chuyển đến đích đến là server., nó được sao chép vào dữ liệu phản hồi của server. Khi client nhận được phản hồi, nó có thể thấy via-option trong dữ liệu và nhận dạng những máy chủ trung gian trên đường dẫn. Mục 3.2.34 mô tả tiến trình đó một cách chi tiết.

![Ảnh 2.17](http://i.imgur.com/bjrlUsA.png)

**Ảnh 2.17: Yêu cầu TRACE cho phép client tìm ra đường dẫn của thông báo theo sau qua một mạng của các máy chủ trung gian.**
<a name="2.4"></a>
## 2.4 Việc hợp tác giữa các server

Ngoại trừ thông báo `TRACE`, chương này không tập trung nhiều vào giao tiếp giữa một client và một server. Giao thức `HTTP` định nghĩa sự tương tác phức tạp hơn, mặc dù, nó thường xuyên liên quan tới việc nhiều server tương tác với một client. Trong mục này, chúng ta sẽ nhìn thấy những cách khác nhau mà nhiều server có thể liên quan tới một giao tiếp trao đổ dữ liệu.
 
### 2.4.1 Các host ảo

Trong tất cả các bản nâng cấp, phiên bản 1.1 thêm vào 1.0 một thứ lớn nhất đó là sự hỗ trợ trực tiếp cho các host ảo. Nhưng mặc dù giao thức thay đổi ít, đặc điểm đó là lợi ích chính cho WWW. Host ảo hỗ trợ nhắm đến yếu tố then chốt 
của cấu trúc Web  mà phiên bản 1.0 chưa làm được -  nhà cung cấp Web host.

Sự phổ biến của Internet tạo ra một yêu cầu lớn lao cho Web site, bởi vì mức độ tổ chức từ công tí đến các cá nhân tạo ra một sự hiện diện trên Web. Trong nhiều trường hợp, mặc dù, nó không thực tế hoặc không hiệu quả cho bản thân tổ chức này để sở hữu và điều hành server và cơ sở hạ tầng mạng mà một Website đòi hỏi. Để đáp ứng các yêu cầu đó, nhà cung cấp dịch vụ mạng truyền thống, truyền thông và các nhà cung cấp dịch vụ chuyên dụng có thể làm chủ Website thay mặt cho các tổ chức khác. Đa số các trang web trên Internet thì đơn giản và yêu cầu ít tài nguyên từ hệ thống mà nó đang chạy trên. Bởi vì chúng không yêu cầu một máy chủ tinh vi nhạy bé, ví dụ, hầu hết các nhà cung cấp dịch vụ web hosting thậm chí chạy nhiều web tách tời trên cùng một máy chủ, như hình 2.18 minh họa.

![Ảnh 2.18](http://i.imgur.com/B3OyN9D.png)

**Hình 2.18: Virtual hositing cho phép nhiều địa chỉ trang web chia sẻ web server. Cấu hình này điển hình trong ISPs mà cung cấp web hosting cho doanh nghiệp nhỏ và các cá nhân.**

Vấn đề đối mặt một hosting chứa nhiều website là: khi một máy chủ yêu cầu một webpage, làm sao để server biết cái site mà client dự tính yêu truy cập như thế nào? Xem xét một yêu cầu của client cho việc phản hồi web page tới "http://www.company1.com/news.html", tới một địa chỉ IP. Sau đó, như hình 2.19 cho thấy, nó tạo ta một kết nối TCP và gửi lệnh `GET` `news.html` tới địa chỉ đó. Chú ý, mặc dù, web server đó không tham gia vào giải quyết DNS, nên nó không biết host nào mà client dự tính liên hệ. Web server không có cách nào để biết  cái "news.html" liên quan tới company1.com company2.com.

![Ảnh 2.19](http://i.imgur.com/QambNv3.png)

**Hình 2.19: Virtual host có thể gây khó cho web serer trong việc quyết định trang nào mà client muốn truy cập tới. Trong trường hợp này, web server vật lý không biết địa chỉ web nào mà client yêu cầu bởi vì nó đã không tham gia vào việc trao đổi dữ liệu DNS mà đã vạch ra hostname tới địa chỉ IP của nó.**

Nhà cung cấp web hosting chỉ có 2 cách để giải quyết vấn đề. Họ có thể yêu cầu trang web phả sử dụng duy nhất URI for tất cả các trang của web. Nên nếu company1.com nó một trang tên là "news1.html" trên trang quả nó, company2.com không thể sử dụng cái tên đó trên trang của nó. Về cơ bản, nhà cung cấp web hosting giả quyết vấn đề bằng biệc yêu cầu một site identifier trong tất cả tên đường dẫn. Ví dụ, thay vì chuyển đến trực tiếp URI "http://www.company1.com/news.html", trang company1.com có thể sử dụng phức tạp hơn "http://www.company1.com/news.html". Như giải pháp thay thế, nhà cung cấp web hosting có thể gán địa chỉ ip riệng biệt đó cho mỗi site trên server của họ. Server kết thúc với rất nhiều địa chỉ IP, và các địa chỉ IP là các tài nguyên hiếm.

Với phiên bản 1.1 nhắm đến vấn đề của virtual host với sự bổ sung đơn giản vào yêu cầu của client. Sự bổ sung này là host header, nơi mà client phải thay thế host name của trang nó đang yêu cầu. Như hình 2.20 cho thấy, server có thể dễ dàng xác định đúng site được yêu cầu và trả về tài nguyên phù hợp.

![Ảnh 2.20](http://i.imgur.com/riFZAlm.png)

**Ảnh 2.20: Đặc điểm của host trong phiên bản 1.1 cho phép client hoàn toàn nhận dạng được web site mà họ đang truy cập, nên virtual host web server có thể trả về đúng nội dung.**

### 2.4.2 Redirection - Sự chuyển hướng

Trong khi virtual host hỗ trợ cho phép một server đơn hộ trợ đa web site một cách dễ dàng, sự chuyển hướng đưa ra một cách để hỗ trợ một trang web đơn để sử dụng đa server. Sự chuyển hướng cho phép server  chuyển hướng nột client tới một uri khác cho một object. Hỉnh 2.21 cho thấy tiến trình đó. Đầu tiên client yêu cầu một object từ web server đầu tiên. Thay vì trả về object được yêu cầu, tuy nhiên, server trả lời với một status code `301 Moved`. Phản hồi cũng chỉ ra một URI mới cho object. Client nhận ra URI này và trong bước 3, tái tạo lại một yêu cầu. Lần này yêu cầu `GET` thành công, và server thứ hai trả về object thực sự.

![Ảnh 2.21](http://i.imgur.com/r0mqt7G.png)

**Một server chuyển hướng một client để báo cho client là object nó yêu cầu được đặt ở một nơi nào đó. Trong bước 2, khi mà client nhận một phản hồi 301 Moved, nó tìm kiếm một URI mới trong thông báo phản hồi và tạo ra một yêu cầu GET mới cho URI đó.**

Sự chuyển hướng là cần thiết cho một môi trường Web động. Nó cung cấp một cách thuận lợi để hỗ trợ việc xét duyệt trong một Web site, sự chuyển vị trí của object và thậm chí là sự thay đổi của một corporate identify.
Chú ý rằng sự chuyển hướng không phải là xác định một host khác. Thật vậy, sự chuyển hướng được sử dụng để thông báo cho client biết về đường dẫn mới tới tài nguyên trên cùng một host. Cũng chú ý rằng có nhiều kỹ thuật tương tự. Ví dụ, server có thể trả lời yêu cầu gốc bằng việc cung cấp một JavaScript object mà nó tự động chuyển hướng client tới một nơi đặt mới.

### 2.4.3 Proxies, Gateways,và Tunnels
Một cách khác mà HTTP server có thể tương tác với nhau qua việc hành động như là proxies, gateways và tunnel. Trong mỗi quy luật đó, server mà client liên kết đầu tiên chuyển yêu cầu tới server mới và sau đó chuyển trả lại client. Hình 2.22 cho thấy một proxy server trong hoạt động.

![Ảnh 2.22](http://i.imgur.com/E0hhbx3.png)
**Hình 2.22: Vị trí của một proxy server ở giữa client và server. Nó gửi yêu cầu thay cho client và chuyển tiếp phản hồi từ máy chủ.**

Trong hình đó, đầu tiên client gửi yêu cầu HTTP một cách trực tiếp tới proxy server. Tuy nhiên, server đó không thể phản hồi tới client ngay lập tức. Thay vào đó, nó tái tạo một yêu cầu tới server thứ hai, cái được dán nhãn là "origin server"(nó được gọi như vậy bởi vì nó là nguồn gốc của object được yêu cầu). Trong hầu hết các trường hợp cơ bản, yêu cầu GET thứ hai có một URI giống hệt cái ban đầu; nó đơn thuần là được gửi tới một server mới. Server đó xử lý yêu cầu GET thứ hai như thể nó đến từ một client và phản hồi nó với object được yêu cầu. Proxy server sau đó có thông tin client gốc yêu cầu, và nó trả lại object đó tới client trong bước 4.

Mặc dù hình 2.22 cho thấy một proxy server đơn, HTTP cho phép nhiều proxy tham gia đáp ứng yêu cầu. Các proxy từ một dây chuyền như hình 2.23, bàn giao yêu cầu từ cái này tới cái kia cho tới khi object được yêu cầu có thế tìm thấy. Sau đó các proxy truyền object đó trở lại client trong đường dẫn nghịch đảo. Khi mỗi server xử lý một yêu cầu, nó thêm các đặc trưng riêng vào Via header trong yêu cầu. Vào lúc yêu cầu đến server cuối cùng, Via header sẽ giữ lại path mang theo bởi yêu cầu qua chuỗi server. Phản hồi theo sau cùng tiến trình, với mỗi hệ thống trung gian việc thêm vào đặc trưng riêng của nó trong Via header. (Chú ý hình 2.23 chỉ cho thấy một phần của Va header; để chi tiết hơn, xem mục 3.2.50)

![Ảnh 2.23](http://i.imgur.com/bUv06Vg.png)

**Hình 2.23: Proxy server tạo hoặc cập nhật Via option khi chuyển tiếp yêu cầu hoặc phản hồi.**

Proxy server thực hiện vài hoạt động quan trọng cho việc giao tiếp HTTP. Phổ biến nhất là việc hỗ trợ caching, mục 2.4.4 miêu tả chi tiết hết. Các việc sử dụng khác bao gồm thực thi chính sách cho một tổ chức. Một sự hợp tác có thể chỉ dẫn cho tất cả các client nội bộ để truy cập internet công cộng, cho phép proxy server lọc các truy cập đó một cách phù hợp. Kiểu phương thức này thường là một phần của firewall. Proxy server cũng được sử dụng để cung cấp sự ẩn danh tới Web server, ngăn cản server từ việc khai thác thông tin client.

Nếu một proxy phục vụ cho nhiều origin server, sau đó client phải bao gồm URI tuyệt đối trong yêu cầu của nó. Nếu URI không đầy đủ, proxy sẽ không thể báo rằng server nào mà client muốn kết nối. Bởi vì trạng thái này rất hiếm với nhiều client, và bởi vì client phải biết gửi yêu cầu đó tới proxy server hơn là đích cuối cùng, chúng phải thường được định rõ để được sử dụng proxy server. Chương 5 mô tả các cơ cấu mà hệ thống quản trị có thể sử dụng để tự động cấu hình proxy server cho user của họ.
Gateway và tunnel hoạt động gần giống proxy server; tuy nhiên, chúng có sự khác biệt riêng. Gateway hoạt động như là một điểm cuối của chuỗi server, nhưng chúng vẫn dựa vào các server khác để cung cấp tất cả hoặc một phần của object được yêu cầu. Trong nhiều trường hợp, gateway sử dụng một giao thức thay vì HTTP để truy cập project. Ví dụ trong hình 2.24, gateway sử dụng Structured Query Language để lấy thông tin từ một hệ thống quản lý dữ liệu.

![Ảnh 2.24](http://i.imgur.com/97NdO7m.png)

**Một gateway chấp nhận yêu cầu HTTP và dịch chúng thành một định dạng khác điển hình như là SQL. Gateway cũng đảm bảo rằng các câu trả lời là một phản hồi HTTP phù hợp.**

Trong khi gateway hoạt động như một điểm cuối của một chuỗi server. tunnle thì hoàn toàn đối nghịch. Như hình 2.25 minh họa, chúng liên qua rõ rệt với client gốc; client thậm chí không thể nhận thức được rằng một sự tồn tại của tunnel. Tunnel cung cấp các dịch vụ. Tuy nhiên, trong ví dụ của hình 2.25, tunnel tạo ra một kết nối an toàn để server thực, bổ sung sự an toàn giao tiếp giữa client và server. Chú ý rằng mặc dù HTTP 1.1 định nghĩa hoạt động của tunnel trong các thuật ngữ chung.

![Ảnh 2.25](http://i.imgur.com/a2Cd1Vg.png)

**Một tunnel cho phép một client giao tiếp trực tiếp với server. Trong ví dụ này, tunnel tạo ra một đường dẫn an toàn cho yêu cầu của client và phản hồi của server.**

### 2.4.4 Cache Servers

Cache server là một dạng đặc biệt của server proxy mà mục đích chính của nó là cải thiện hiệu năng của Web. Nó làm việc đó thông qua lưu trữ object được yêu cầu bởi client và nếu object đó được yêu cầu lại (có thể là cùng client hoặc là khác client), trả về object mà chúng lưu lại thay vì yêu cầu lại object đó từ máy chủ gốc. Hình 2.26 và 2.27 cho thấy tiến trình đó.

![Ảnh 2.26](http://i.imgur.com/CJ8rpNp.png)

**Hình 2.26: Cache server là các proxy server mà chuyển các yêu cầu và phản hồi. Ngoài ra, chúng giữ một bản sao gốc của mỗi phản hồi chúng nhận được.**

Hình đầu tiên cho thấy một chuẩn vận hành proxy. Chìa khóa để một cache server vận hành là nó ghi nhớ lại object được yêu cầu, thường thì bằng việc lưu lại một bản sao trên local disk hoặc trong bộ nhớ của nó.

![Ảnh 2.27](http://i.imgur.com/O2Cksog.png)

**Hình 2.27: Khi một client mới yêu cầu một object giống v, cache serverr trả về bản sao của nó thay vì gửi yêu cầu khác tương tự tới server gốc. Việc này làm tăng tốc độ phản hồi, và nó tiết kiệm băng thông cho kết nối Internet.**

Hình 2.27 hiển thị kết quả cho cache server. Trong hình này, một yêu cầu của client mới giống object trong hình 2.26. Tuy nhiên lần này, cache server không cần kết nối tớ serger gốc. Nó đơn giản trả về object đã được lưu từ  local disk hoặc memory của nó.

Cache server cải thiện hiệu năng của Web về cả 2 bộ phận là client và server. Đối với client, chúng làm ngắn khoảng cách từ object cần thiết đến client. Như hình 2.26 và 2.27 minh họa, một cache server có thể được định điểm trên cùng mạng nội bộ như là client của nó. Mạng nội bộ thường có băng thông cao hơn so với mạng rộng Internet, và thời gian trao đổi tốn ít hơn.

Cache server cũng cải thiện hiệu năng bằng việc giảm việc tải trên server gốc. Khi một cache server trả về một object tới một client, sẽ có ít yêu cầu đề làm phìn server gốc. Ít yêu cầu hơn động nghĩa với việc đơ phải xử lý và ít tốn tài nguyên bộ nhớ hơn đó là điều server gốc đòi hỏi, đồng thời đỡ tốn băng thông hơn cho việc kết nối một Internet.

Một trong những vấn đề phức tạp phải đối mặt là cache server biết được object đó được lưu bao lâu rồi. Căn cứ vào bản năng tự nhiên của Web, một object mà server gốc trả lại tại lúc đó có thể nhượng lại bằng một object mới lúc sau. Khi điều đó xảy ra, cache server không phải trả về object từ cache, nhưng nó phải re-query server gốc để lấy lại object mới.

Như chúng ta sẽ được thấy trong mục 3.2, HTTP 1.1 bao gồm vài header chỉ để hỗ trợ cache server. Các header đó báo cache server rằng object đó có được lưu tạm hay không, nếu được, nó có thể lưu lại an toàn trong bao lâu. Mục 5.2 nghiên cứu sự vận hành của cache server chi tiết hơn, tập trung vào các mặt bên ngoài phạm vị của qui cách HTTP.

### 2.4.5 Đếm và giới hạn lượt truy cập

Mỗi khi một cache sercer trung gian xử lý yêu cầu của client, server gốc có thể mất kiểm soát sự tương tác của nó với client. Về nhiều mặt đó là một lợi ích, điển hình như là cache server giảm tải cho server gốc  và có thể cải thiện đáng kể hiệu năng của nó. Tuy nhiên cũng có nhiều bất tiện. Với nhiều Web site, có một cache deliver page tới client là một vấn đề đáng kể bởi vì nó đồng nghĩa với việc server gốc không biết user truy cập những nội dung thường xuyên như thế nào. Khi mà doang thu của trang web từ việc quảng cáo, việc đếm số lượt truy cập của user là rất quan trọng để tối ưu hóa doanh thu. Các nhà phát triển HTTP nhận ra vấn đề này và đưa vào  một kỹ thuật mà cho phép caching và tuy nhiên vẫn cho server gốc cách để đếm và giới hạn truy cập trang bằng cache server client. Kỹ thuật này là một tiện ích của đặc tính cở bản HTTP; nó được dẫn chứng từ lại liệu `rfc 2777`.

Tiến trình bắt đầu khi một proxy chèn một `Meter` header vào thông báo yêu cầu và gửi nó lên proxy tiếp theo. (Xem mục 3.2.25 để biết chi tiết hơn về header này). Bước 2 và 3 của hình 2.28 cho thất tiến trình. Bằng việc chèn header vào đây, proxy chỉ ra mong muốn của nó để phản hồi và giới hạn số lần nó trả về kết quả phản hồi từ cache.

![Ảnh 2.28]()
**Hình 2.28: Các proxy mà hỗ trợ việc đo lương thêm vào Meter header trong các yêu cầu mà đi ngang qua chúng. Server yêu cầu việc đo lường đó trên object đặc biệt bằng việc thêm Meter header vào trong phần phản hồi.**

Server gốc phản hồi sự yêu cầu này bằng việc thêm vào `Meter` header vào trong phản hồi. Header này báo cho proxy biết để xử lý object với khía cạnh để phản hồi và giới hạn sử dụng.

Sau đó, khi một client khác yêu cầu cùng một object, các proxy mà lưu bản sao đó sẽ cần thông qua bản sao đó với server gốc. Khi chúng làm việc, như hình 2.29 cho thấy, chúng cập nhật `Meter` header trong các yêu cầu của chúng. Thông tin đo lương này là một bản báo cáo của số lần mực lưu trữ được cung cấp tới client.

![Ảnh 2.29](http://i.imgur.com/wauwARn.png)

**Hình 2.29: Các proxy đang đo lường một object báo cáo kết quả khi chúng gửi một yêu cầu mới tới server gốc liên quan đến object. Trong ví dụ, proxy B tạo ra một yêu cầu HEAD để đảm bảo rằng bản sao lữu trữ vẫn còn phù hợp. Nó bao gồm một Meter header trong yêu cầu.**
<a name="2.5"></a>
## 2.5 Cockies và Việc duy trì trạng thái
Giao thức HTTP thường hoạt đông như thể là mỗi yêu cầu của client độc lập với nhau. Server phản hồi tới các yêu cầu một cách chặt chẽ theo đúng yêu cầu, mà không cần tham chiếu tới các yêu cầu khác từ phía client. Phương thức hoạt động này được biết đến như là `stateless` bởi vì server không phải giữ các rãnh ghi trạng thái của client.

Bởi việc duy trì trạng thái yêu cầu tài nguyên server, phương thức stateless thì hay đáng sử dụng. Tuy nhiên trong một vài ứng dụng, server cần giữ lại thông tin trạng thái về mỗi client. Ví dụ các user đăng nhâp thành công vào web, nên không cần phải đăng nhập lại nữa cho mỗi lần truy cập trạng khác nhau trên 1 site. Một server có thể tránh các sự bất tiện bằng cách ghi lại các trạng thái của client. Đầu tiền clien yêu cầu một page từ site, server yêu cầu user phải đăng nhập. Tuy nhiên, khi người dùng tiếp tục duyệt site và bô sung thêm yêu cầu HTTP, server nhớ lần đăng nhập thành công trước và không yêu cầu đăng nhập tiếp nữa.

### 2.5.1 Cockies

Việc duy trì trạng thái đòi hỏi một khả năng quan trọng: Server phải có khả năng kết hợp một yêu cầu HTTP với những yêu cầu khác. Ví dụ, server phải có thể thông báo rằng user mà đang yêu cầu một trang mới thức tế học đã đăng nhập rồi, không phải một user khác nên không cần phải xác thực. Cơ chế này được HTTP định nghĩa trong việc duy thì trạng thái là `cockie`. Một server tạo ra cockie khi nó muốn ghi lại các trạng thái của client và nó trả về những cockie đó tới client bên trong các phản hồi. Khi client nhận được cockie, nó có thể chứa đựng cockie trong yêu cầu tiếp theo từ cùng một server, như hình 2.30 minh họa. Client có thể tiếp tục chứa đựng cockie trong yêu cầu của nó cho tới khi cockie hết hạn hoặc  server không cho client sử dụng tiếp cockie nữa.

![Ảnh 2.30](http://i.imgur.com/asqET7r.png)
**Hình 2.30: Server có thể trả về quản lý cockie trong các phản hồi của nó. Yêu cầu sau của client sẽ đính kèm thêm cockie.**

Không phải người sử dụng Web nào cũng thích việc HTTP hỗ trợ cockie.
Nhiều user truy cập state maintenance như là một sự xâm lược quyền riêng tư của họ. State maintenance cho phép Web site ghi lại các hành vi trinh duyệt của người dùng. Tuy nhiên, để sử dụng một cách thích hợp, state maintenance sẽ không nâng cao sự riêng tư liên quan đến hầu hết người dùng. Ví dụ, user ấn vào nút checkout của một trang bán hàng online, tất nhiên là Web site sẽ ghi lại việc thanh toán đó; một động thái giúp cockie hoạt động dễ hơn. Các vấn đề nảy sinh khi Website sử dụng cockie để ghi lại các user mà không loại trừ một ai. Ví dụ, một nhà quảng cáo trực tuyền có thể theo dõi co ta đi từ một online stock broker tới một sporting goods site, và sau đó tới một cộng đồng online, chắc chắn việc tạo ra một profile của cô ta để giới thiệu cho có ấy những quảng cáo phù hợp với cô ta. Nếu không có cockie, việc ghi lại này thì không hiệu nghiệm.

Đầu tiên, các chính sách của http quản lý việc sử dụng cockie sẽ bảo về người dùng từ việc ghi lại này. Sau tất cả, một HTTP client có thể chỉ trả về một cockie tới server ban đầu tạo ra nó. Nếu nhà môi giới trực tuyến gửi cho trình duyệt một cockie, làm sao để trang sporiting goods site có thể nhận được cockie từ user đó. Mẹo trong trường hợp này, cockie không thuộc về một trong hai server. Đúng hơn là nó được sở hữu bởi server ad bên thứ ba, được bố trí với cả hai trang đó. Hình 2.31 cho thấy bước đầu tiên trong tiến trình, khi mà user truy cập trang broker online. Web page từ site đầu tiên chứa nhiều object. Một trong những object đó là một banner quảng cáo mà tồn tại ở một ad server điểu hành bởi nhà cung cấp ad. User yêu cầu tất cả object bao gồm cả banner. Sự thật thì ad tồn tạ trong các server http khác nhau không thành vấn đề. Client đơn thuần chỉ gửi yêu cầu tới server được chỉ định trong web page. Cockie nằm trong phản hồi của yêu cầu GET mà server thêm vào.

![Ảnh 2.31](http://i.imgur.com/lDyAFwH.png)

**Hình 2.31: Một web page có thể chưa đựng object từ nhiều server, và mỗi server có thể cung cấp các cockie của nó. Trong ví dụ này, trang chính bắt nguồn từ Website 1, nhưng page chứa đựng object từ ad server. Client sẽ yêu cầu object này và ad server có thể chứa đựng các cocke trong phản hồi.**

Cuối cùng, user duyệt trang sporting goods. Như hình 2.32 minh họa, web page cho site này cũng bao gồm một banner quảng cáo, và quảng cáo đó cũng tồn tại trên server của nhà cung cấp ad.

![Ảnh 2.32](http://i.imgur.com/GP9R1FA.png)

**Hình 2.32: Một Website cũng có thể chứa đựng objec từ server ngoại; server ngoại có thể lấy các cockie của nó khi client yêu cầu những object đó. Theo hình đó thì Website 2 cũng chứa đựng một object từ ad server. Client sẽ yêu cầu object này, và bởi vì nó đang giao tiếp với cùng một server trước đó, nên nó có thể trả về cockie trong yêu cầu đó.**

Web browser gửi một yêu cầu `GET` tới server đó, và bởi vì  nó là cùng một server nên được cung cấp cokie, có chứa đựng cockie trong yêu cầu đó. Nhà cung cấp ad hiện tại biết được site nào mà use đã truy cập. Tuy nhiên, chú ý rằng nhà cung cấp ad có thể ghi lại thông tin cho các site mà nó có quan hệ. Nếu user truy cập một site khác mà không có sự chấp nhận của ad server, Website đó sẽ không có banner quảng cáo. Không có banner quảng cáo và việc trao đổi cockie kết hợp, nhà cung cấp sẽ vẫn không biết user đã truy cập trang.

### 2.5.3 Các Thuộc Tính Cockie 

Cockie chứa đựng một chuỗi các thuộc tính được liệt kê trong bảng 2.1 . Server chọn các giá trị cho các thuộc tính được yêu cầu.

>**Bảng 2.1 Các thuộc tính Cockie**

|Thuộc tính|Status|Chú ý|
|----------|------|-----|
|**NAME**|Bắt buộc| Một cái tên tùy ý cho cockie, được gán bởi server|
|**Comment**|Tùy chọn|Một bình luận mà server thêm vào cockie; Client có thể kiểm tra commment của cockie mà họ nhận được, trong các trường hợp comment có thể được sử dụng để  giải thích việc server sử dụng cockie như thế nào, có thể làm yên lòng user khi có vấn đền riêng tư.|
|**CommentURL**|Tùy chọn|Một URL mà server cung cấp với một cockie; URL có thể giải thích thêm về việc server sử dụng cockie.|
|**Discard**|Tùy chọn|Chỉ dẫn cho client để loại bỏ cockie, user chỉ được sử dụng một lần. Thực ra là nó báo cho Web brwoser biết là không được lưu cockie trong ổ đĩa của user.|
|**Domain**|Tùy chọn|Domain (form DNS) cho mỗi cockie phù hợp; một server không thể chỉ định một domain khác với tên miền mà nó sở hữu.|
|**Max-Age**|Tùy chọn|Thời gian tồn tại của cockie, tính bằng giây|
|**Path**|Tùy chọn|URL trên server áp dụng cho mỗi cockie.|
|**Port**|Tùy chọn|Một danh sách các TCP port áp dụng cho mỗi cockie|
|**Secure**|Tùy chọn|Chỉ dẫn cho client chỉ trả về cockie cho yêu cầu tiếp theo nếu các yêu cầu đó đảm bảo an toàn; nó có thể được dùng cho các cockie mà không nên tiếp xúc với kẻ trộm. Chú ý, HTTP không chỉ rõ nghĩa của từ "secure" trong bối cảnh này|
|**Version**|Bắt buộc|Phiên bản của HTTP state maintenance mà phù hợp với các cockie; phiên bản hiện tại là ver1.1|

### 2.5.3 Accepting Cockie

Khi một client nhận được một cockie, nó lưu các thuộc tính cấu tạo nên cockie. Mặt khác, nếu server bỏ qua vài thuộc tính tùy chọn, client sẽ cung cấp các giá trị mặc định. Bảng 2.2 liệt kê các giá trị mặc định mà client thêm vào cho các thuộc tính bị thiếu

>**Bảng 2.2 Các giá trị mặc định cho các thuộc tính của cockie**

|Thuộc tính|Gía trị mặc định nếu không có|
|----------|-----------------------------|
|**Discard**|Đưa giá trị thuộc tính `Max-Age` về mặc định|
|**Domain**|Tên miền của server mà cung cấp cockie gốc|
|**Max-Age**|Giữ cockie chỉ đến khi nào user session hiện tại được kích hoạt (không được lưu cockie vào ổ đĩa của user)|
|**Path**|URL cho mỗi cockie được trả về giá trị gốc, file được chỉ định bở URL đó|
|**Port**|Cockie chấp nhận các port(Chú ý nếu thuộc tính `Port` được đề cập trong cockie nhưng không có giá trị, sau đó client sẽ đặt giá trị của thuộc tính là port của yêu cầu ban đầu)|
|**Secure**|Cockie có thể được trả về với một yêu cầu không an toàn|

Chú ý rằng một client không bao giờ được yêu cầu để chấp nhận cockie. Ví dụ, các user có thể cấu hình Web browser để chấp nhận cockie hoặc không theo như hình 2.33. Một HTTP server không thể trông chờ vào cockie được chấp nhận, cho dù nó được định dạng một cách phù hợp.

![Ảnh 2.33](http://i.imgur.com/7da13OE.png)

**Hình 2.33: Hầu hết các Web browser cho người dùng điều khiển cockie và việc duy trì trạng thái. Bảng đó cho thây một vài tùy chọn quyết định trình duyệt có được chấp nhận môt cockie hay không. Các trình duyệt khác phân biệt giữa cockie có định(cái mà được lưu trong ổ đĩa PC) và cockie tạm thời mà browser xóa đi khi tắt ứng dụng.**

Dù là nột user mong muốn chấp nhận cockie, đặc tính kỹ thuật HTTP bắt buộc client từ chối cockie với mọi trường hợp. Cockie bị từ chối bởi client và bởi vậy sẽ không được bao gồm trong yêu cầu tiếp theo. Bảng 2.3 liệt kê các điều kiện mà client phải từ chối cockie server. Chú ý là client xem xét các điều kiện đó sau khi nó chấp nhận các thuộc tính mặc định được nêu ra ở bảng 2.2 .

>**Bảng 2.3: Các qui tắc từ chối cockie**

|Các điều kiện để Client từ chối một cockie|
|------------------------------------------|
|Gía trị của thuộc tính `Path` không phải là một tiền tố của URL trong yêu cầu của client.|
|Gía trị của thuộc tính `Domain` không có dấu chấm trong đó, nếu không giá trị sẽ là ".local".|
|Server mà trả về cockie không thuộc tên miền được xác định bởi thuộc tính `Domain`.|
|Máy chủ lưu trữ một thuộc tính `Domain`, nó có một dấu chấm trong đó.|
Port trong yêu cầu của client không được khai báo trong thuộc tính `Port` (nếu không thuộc tính `Port` sẽ bị thiếu).|

Cuối cùng, khi một client chấp nhận cockie, một cockie mới lấy những cockie được chấp nhận lúc trước có cùng các giá trị thuộc tính `NAME,Domain,Path`.


### 2.5.4 Việc trả về Cockie

Mỗi khi client chấp nhận một cockie và chung cấp các giá trị mặc định phù hợp, nó quyên định khi nào để trả về cockie tới một server trong yêu cầu tiếp theo. Bảng 2.4 phác họa các qui tắt mà client chứa đựng cockie trong yêu cầu. Chú ý là có nhiều có thể đáp ứng tiêu chuẩn của bảng đó, trong mỗi trường hợp client nên bao gồm nhiều cockie trong yêu cầu của nó.

>**Bảng 2.4 Các qui tắc để trả về Cockie**

|Các điều kiện|
|-------------|
|Một domain cho yêu cầu mới phải thuộc về domain được định rõ bởi thuộc tính Domain trong cockie|
|Port cho yêu cầu mới phải nằm trong danh sách các port của thuộc tính Port trong cockie, nếu không thuộc tính Port sẽ bị thiếu ở Cockie|
|Path cho yêu cầu mới phải trùng với thuộc tính Path trong cockie|
|Cockie không được hết hạn|

Khi client trả một cockie về server, nó chứa đựng các thuộc tính Domain, Path và Port nếu các thuộc tính đó được trình bày trong cockie gốc. Nó không chứa đựng các thuộc tính đó nếu chúng bị thiếu từ cockie gốc.
<a name="3"></a>
# Chapter 03
#HTTP Messages - Cú pháp của giao tiếp HTTP

Bây giờ chúng ta sẽ xem HTTP vận hành như thế nào, đã đến lúc xem các thông báo một cách chi tiết. Không giống như nhiều giao thức giao tiếp khác, thông báo HTTP chứa đựng hầu như là văn bản Tiếng anh. Thay vì lo lắng về bit hay byte trong chương này, có ta xem xét các từ mà HTTP định nghĩa và các qui tắc các từ đó vào.

Chương này đầu tiên sẽ có cái nhìn toàn thể về cấu trúc thông báo HTTP. Như chúng ta đã thấy, một thông báo HTTP bắt đầu với một dòng yêu cầu hoặc một dong status, nó có thể theo sau vởi nhiều các header và thân thông báo. Sau khi mô tả toàn thể cấu trúc chi tiết, chương này nghiên cứu các HEADER HTTP và các status code từ tất cả các đặc tính kỹ thuật của HTTP.
<a name="3.1"></a>
## 3.1 Cấu trúc của thông báo HTTP

Như chúng ta đã thấy trong chương trước, HTTP là một giao thức giữa client/server; client tạo ra yêu cầu và server phản hồi các yêu cầu đó. Cấu trúc thông báo HTTP phản ánh sự phân chia đó. Hai tiểu mục sau xem xét mỗi lần lượt từng cái.

### 3.1.1 Yêu cầu HTTP

Hình 3.1 cho thấy cấu trúc cơ bản của yêu cầu HTTP. Mỗi yêu cầu bắt đầu với một Request-line. Dòng này chỉ ra phương pháp mà client đang yêu cầu, tài nguyên mà phương pháp đó chấp nhận, và phiên bản của HTTP mà client hỗ trợ. Request-line có thể được theo sau bởi một hoặc nhiều message header và mesage body. Một dòng trống theo sau Request-line và vài mesage header được giới thiệu.
Để cụ thể hóa bức hình, text bên dưới cho thấy HTTP message thực thế mà MIE gửi khi một user truy cập vào trang chủ của Financal Times(www.ft.com). Dòng đầu tiên là Request-Line, và mesage header tạo nên phần còn lại của text.

![Hình 3.1](http://i.imgur.com/VCI183h.png)

**Hình 3.1: Một yêu cầu HTTP bắt đầu với một Request-line và có thể bao gồm header và body message. Header có thể mô thả giao tiếp chung, yêu cầu cụ thể, hoặc chứa đụng message body**

![V1](http://i.imgur.com/D0u66AP.png)

Như hình 3.2 cho thấy, HTTP Request-line chứa đựng ba mục riêng biệt. Đó là một method, một URI và một HTTP version, mỗi cái được cách nhau bởi một hoặc nhiều khoảng trống.

![Hình 3.2](http://i.imgur.com/h1koy0w.png)

**Hình 3.2: Một HTTP Request-line có một method, một URi, và một HTTP version**

Method cụ thể xuất hiện đầu tiên trong Request-line. Trong ví dụ trước method là một GET, nhưng như bảng 3.1 chi ra rằng, HTTP định nghĩa tổng cộng 8 method khác nhau. Như bảng đó cũng chỉ ra là, HTTP server được yêu cầu chỉ hỗ trợ GET và HEAD method; nếu chúng hỗ trợ method http khác, tuy nhiên,  hỗ trợ đó phải bổ sung vào. Các method khác sẽ được bổ sung trong tương lai.

>**Bảng 3.1 HTTP methods**

|Method|Server Support|Use|
|------|--------------|---|
|CONNECT|Tùy chọn|Yêu cầu server(thường sử dụng proxy) để tạo ra một tunnel|
|DELETE|Tùy chọn|Yêu cầu server để xóa một tài nguyên rõ ràng|
|GET|Yêu cầu|Yêu cầu server trả về tài nguyên được yêu cầu|
|HEAD|Yêu cầu|Yêu cầu server trả lời phản hồi mà không trả về tài nguyên|
|OPTIONS|Tùy chọn|Yêu cầu server chỉ ra các tùy chọn mà nó hỗ trợ|
|POST|Tùy chọn|Yêu cầu server truyền message body tới tài nguyên được chỉ rõ|
|PUT|Tùy chọn|Yêu cầu server chấp nhận message body như là một tài nguyên có sẵn|
|TRACE|Tùy chọn|Yêu cầu server đơn giản chỉ phản hồi yêu cầu|

Phần tiếp theo trong Request-line là Request-Uri. Phần này cung cấp URI cho tài nguyên bị tác động. Trong ví dụ, Request-Uri là /, chỉ ra một yêu cầu cho tài nguyên gốc. Với các yêu cầu mà không yêu cầu các tài nguyên cụ thể, client có thể sử dụng một dấu * cho Request-uri.

Phần cuối cùng của Request-line là HTTP version. Như ví dụ cho thấy, HTTP version 1.1 chứa đựng dòng chữ `HTTP/1.1` cho mục này. Số 1 đầu tiên mà số phiên bản chính, số 1 tiếp theo là số phiên bản phụ. Phiên bản phụ thay đổi khi các đặc điể m kỹ thuật của HTTP thay đổi đáng kể để tác động đến hoạt động giao tiếp, nhưng không quá nhiều rằng một hệ thống cũ không thể phân tích các message được. Số phiên bản chính thay đổi mỗi khi đặc điểm kỹ thuật  thay đổi mạnh mẽ mà một hệ thống cũ không thể phân tích các message mới được. Mặt khác, server v1.1 có thể thông dịch được message v1.2, trái lại, nó không thể thông dịch message v2.2. Chú ý rằng client chứa HTTP version trong yêu cầu của nó để chỉ ra phiên bản nó có thể hỗ trợ. Nó không sử dụng phiên bản để chỉ ra các đặc đểm được sử dụng trong một yêu cầu được đưa ra. Ví dụ, một client hỗ trợ v1.1 sẽ sử dụng phiên bản đó cho tất cả các yêu cầu, thậm chí cho yêu cầu mà có chứa các đặc điểm HTTP v1.0.

Sau Request-line, HTTP request có thế bao gồm một hoặc nhiều dòng của message header. Như hình 3.1 minh họa, các message header có thể là general header; request header hoặc entity header. General header áp dụng cho giao tiếp HTTP chung; request header áp dụng cho các yêu cầu rõ ràng, và mộ entity header áp dụng cho message body chứa trong yêu cầu. Mục tiếp theo xem kỹ các header đó.

Một yêu cầu HTTP luôn luôn chứa đựng một dòng trống sau Reuqest-line và các header kèm theo. Nếu yêu cầu chứa một message body, phần body theo sau một dòng trống. Dòng trống rất quan trọng vì nó cho phép server nhận dạng đoạn cuối của yêu cầu, hoặc nếu một message body được hiển thị ra, đoạn cuối của header của message. Nếu không có dòng trống đó, một server nhận một message không thể chắc chắn messagge header vẫn không được chuyển.  Nếu message body được chỉ ra, server không thể dựa vào một dòng trống để chi ra đoạn kết của message. Tuy nhiên, thay vào đó, nó tính trên client để dứt khoát chỉ ra kích thước của message body với entity header. Bằng việc biết được kích thước của message body, server có thể tìm toàn bộ đoạn cuối của yêu cầu.
    
### 3.1.2 Phản hồi HTTP

Như hình 3.3 chỉ rõ, phản hồi HTTP nhìn khá giống yêu cầu HTTP. Điểm khác nhất là phản hồi với một status line mà request-line không có.

![Hình 3.3](http://i.imgur.com/N0kZG5T.png)

Đoạn văn dưới đây cho thấy phản hồi HTTP thực sự, bắt đầu với một Status-line. Gần giống với Request-line, một status-line chứa 3 tách rời bởi các khoảng trống mà hình 3.4 làm rõ lên.Dòng đó bắt đầu với phiên bản mới nhất của HTTP mà server hỗ trợ. Ví dụ, một HTTP 1.1 server nhận một yêu cầu từ một client 1.0,có thể vẫn chỉ ra phiên bản 1.1 trong status-line. Tuy nhiên, server đó phải cẩn thận khi chỉ chứa đựng v1.0 trong phản hồi của nó. Mặt khác, nó có thẻ gửi client thông tin mà nó không hiểu.

![Hình 3.4](http://i.imgur.com/yq7W9BE.png)


![V2](http://i.imgur.com/IaE9b73.png)

**Một status-line bắt đầu với một HTTP version và chứa đựng một số status-code và một dòng chữ mô tả phản hồi.**

Hai mục nhỏ phía sau trên Status-line là Status-code và Reason-Phrase. Status-code là một số có 3 chữ số chỉ ra kết quả của yêu cầu. Status-code phổ biến nhất là 200 trong ví dụ trên. Gía trị đó chỉ ra rằng client yêu cầu thành công. Chữ số đầu tiên của Status-code nhận biết dạng của kết quả và đứa ra một dấu hiệu của sự thành công; các kí tự sau được bổ sung để cung cấp chi tiết hơn. 

>**Bảng 3.2: HTTP Status code**

|Status code|Ý nghĩa|
|-----------|-------|
|100-199|Thông tin; server nhận yêu cầu nhưng một kết quả cuối cùng thì chưa phù hợp|
|200-299|Thành công; server có áp dụng với các yêu cầu thành công|
|300-399|Chuyển hướng;Client nên chuyển hưởng yêu cầu tới một server hoặc một resource khác|
|400-499|Lỗi client; yêu cầu chứa 1 lỗi mà bị ngăn cản bởi server|
|500-599|Lỗi server; server thất bại trong việc thao tác với yêu cầu mặc dù yêu cầu đó phù hợp|

Reason-Phrase theo sau Status code đơn thuần giúp ta thông dịch được giá trị Status-code. Nhưng client không chú ý nội dung của của nó.
<a name="3.2"></a>
## 3.2 Các Trường Header

Như chúng ta đã thấy ở phần trước, yêu cầu và phản hồi HTTP có thể cùng chứa một hoặc nhiều message header. Message header bắt đầu với một trường tên và một dấu hai chấm (":"). Mặc dù hầu hết mọi khi header chứa thông tin bổ sung. Thông tin này theo sau một dấu hai chấm.
Một message header kết thúc khi dòng đó kết thúc. Nếu muồn bổ sung thêm thông tin thì chỉ cần xuống dòng và điền. Một ví dụ yêu cầu từ mục trước có chứa một dòng tiếp tục cho `User-Agent` header.

![V3](http://i.imgur.com/2v5IFgP.png)

Nếu một message header có thể chứa đựng một chuối các trường giá trị, mỗi cái ngăn cách nhau bởi dấu phẩy. Như là một message được xử lý giống một message mà chỉ chứa một trường nhưng với tất cả các giá trị của trường. Dưới đây là một ví dụ tương đương ví dụ trên, chú ý ở đây `Accept-Encoding` xuất hiện hai lần. 

![V4](http://i.imgur.com/ImHCI5X.png)

Trước khi xoáy vào từng trường header, bảng 3.3 cung cấp một danh sách tổng hợp của của message header mà HTTP định nghĩa. Nhìn chung cái bảng này nhấn mạnh rằng các header có thể áp dụng cho HTTP, cho một yêu cầu hoặc phản hồi rõ ràng hoặc phần message body chứa yêu cầu hoặc phản hồi. Mặc dù các đặc kiểm kỹ thuật không thật sự yêu cầu nó, nhưng HTTP khuyên là sự cài đặt đó nên chứa đựng trường message trong yêu cầu đó: general header, sau đó là yêu cầu và phản hồi header và cuối cùng là entity header.

>Bảng 3.3 Các trường HTTP Header

![Bảng 3.3](http://i.imgur.com/xTIIjGW.png)

### 3.2.1 Accept

`Accept` header là một header yêu cầu, cho phép một client chỉ ra rằng cái dạng nội dung mà nó có thể chấp nhận trong message body của phản hồi server, cũng như sự ưu tiên của nó cho mỗi nội dung. Đây là một ví dụng cho `Accept` header mà client có thể chứa đựng trong yêu cầu của nó.

```sh
Accept: text/plain; q=0.5, text/html,
text/x-dvi; q=0.8, text/x-c
```

Như bạn có thể thấy từ ví dụ đó, `Accept` header có thể chứa một danh sách nhiều dạng nội dung. Các dấu phẩy tách rời từng nội dung, và mỗi loại có thể chứa một option equality factor. Equality factor là một tham số của một dạng, và một dấu chấm phẩy chia nó ra. Ví dụ trước chỉ ra rằng client có thể chấp nhận bất cứ dạng nội dung dưới dấy.

* `text/plain; q=0.5`
* `text/html`
* `text/x-dvi; q=0.8`
* `text/x-c`

Mỗi dạng chứa một kiểu phụ và một kiểu chính, với một dấu gạch chéo ("/") chia đôi hai kiểu đó ra. Tất cả nội dung phải có một kiểu chính là `text`, nhưng khác nhau ở kiểu phụ. Client có thể sử dụng dấu * như là một đại diện cho một kiểu phụ hoặc cả hai kiểu. Ví dụ, dạng nổi dung `text/*` sẽ chỉ ra rằng client có thể chấp nhận bất cứ text content nào, và dạng nội dung `*/*` chỉ ra rằng client có thể chấp nhận bất cứ nội dung nào.

Equality factor là một số giữa 0 và 1. Nếu một dạng nội dung không có một Equality factor rõ ràng, nó ngầm hiểu là 1. `text/html` và `text/x-c` là một ví dụ, nó có Equality factor là 1. Nếu một server có thể trả về nhiều dạng nội dung cho một yêu cầu, nó nên đặt số một cho equality factor cao nhất. Mức đó ưu tiên giảm dần từ 1 đến 0.

### 3.2.2 Accept-Charset

Client có thể chứa một `Accept-Charset` header trong các yêu cầu để báo cho server biết các kiểu kí tự mã hóa mà nó thích hợp cho message body được trả về trong phản hồi. `Accept-Charset` header hoạt động gần giống `Accept` header (cùng chung một `Accept` family). Client có thể chứa đựng một danh sách các bộ kí tự khác nhau, và chúng có thể chỉ ra một sự ưu tiên cho mỗi bộ ký tự bằng việc khai báo một equality factor. Nếu equality factor đó để trống thì server sẽ tự động ngầm hiểu giá trị là 1.

Giao thức HTTP xử lý `iso 8859-1` khác với các bộ ký tự khác. Nếu client không dứt khoát liệt kê các bộ ký tự đó và không dứt khoát gán nó cho một equality factor khác 1, server sẽ thừa nhận đó là client chấp nhận `iso 8859-1`.Chế độ này đảm bảo rằng `iso 8850-1` là bộ ký tự mặc định cho phản hồi.

Các phần của message sau đây cho thấy một client có thể chọn một chấp nhận một bộ ký tự đặc biệt như thế nào. Với một header, client chỉ ra rằng nó thích hợp với bộ ký tự Unicode nhưng nó sẽ nhấp nhận những cái khác (bao bồm cả iso 8859-1) với một với sự ưu tiên là 0.8

`Accept-Charser:unicode. *; q=0.8`

Internet Assigned Numbers Authority vẫn duy trì danh sách các bộ ký tự được định dạng. Tại thời điểm viết cuốn sách này, nó bao gồm 235 bộ ký tự khác nhau.

### 3.2.3 Accept-Encoding

`Accept-Encoding` header đưa ra cho client nhiều cách khác nhau để biểu thị những ưu tiên cho message body của phản hồi server. Ngoài content type và bộ ký tự, header này cho phép client yêu cầu nội dung mã hóa cho phản hồi. Dạng header này giống các `Accept` header khác, một danh sách các kiễu mã hóa phù hợp, mỗi cái ứng với một equality factor.

```sh
Accept-Encoding: compress, gzip; q=0.9,
identity; q=0.8
```

### 3.2.4 Accept-Language

`Acceot-Language` header là `Accept` cuối cùng trong chuối các `Accept` mà đưa ra cho client các cách để biểu thị sự ưu tiên cho phản hồi. (`Accept-Range` thì khác hoàn toàn.)

Header này cho phép client chỉ ra sự ưu tiên cho ngôn ngữ của message được trả về.

Để xác định các ngôn ngữ đặc biệt, client có thẻ sử dụng một đa cấp bậc, với mỗi level được phân ly bở dấu gách nganh ("-"). Trong cái form phổ biến nhất của nó, level đầu tiên là 2 chữ viết tắt của chuẩn ngôn ngữ `iso 639`, và level thứ hai nếu được hiển thị thì nó là hai kỹ tự viết tắt của mã vùng `iso 3166`. Ví dụ, cái code `en`  biểu thị cho English và cái code `en-us` biểu thị ho American English. `Accept-Language` header hỗ trợ equality factor giống các `Accept` header khác, nên một client có thể chỉ ra sự ưu tiên giữa nhiều ngôn ngữ. Đoạn text dưới đây yêu cầu `en` English đầu tiền và các dạng ngôn ngữ English khác nếu lựa chọn đầu tiên không có sẵn.

`Accept-Language: en-gb, en; q=0.8`

Chú ý rằng HTTP server không tự động tự đồng lùi về ngôn ngữ có bậc cao hơn. Ví dụ bên dưới, chỉ chấp nhận mỗi `en` English trong phản hồi và server sẽ không trả về một phiên bản trong `uk` English cho dù nó có sẵn.

`Accept-Language: en-us, *; q=0.0`

### 3.2.5 Accept-Ranges

Không giống như các `Accept` header khác, `Accept-Range` header là một header phản hồi; nó xuất hiện trong phản hồi của server thay vì yêu cầu của client. Các đặc điểm kỹ thuật của HTTP hiện tại giới hạn header này với 2 form. Form đầu tiên nằm ở ví dụ bên dưới cho phép một server chỉ ra rằng nó có thể chấp nhận phạm vị các yêu cầu cho tài nguyên.

`Accept-Ranges: bytes`

Nhứ chúng ta sẽ được thấy trong mục 3.2.29, client có thể tạo ra các yêu cầu cho một giới hạn byte nhất định thay vì toàn bộ tài nguyên. Đặc điểm này rất có ích cho việc tải file. Nếu tải thấy bại trước khi hoàn thành, client có thể sử dụng một phạm vi yêu cầu để lấy các file chưa tải xong; nó không phải nhận lại toàn bộ file.

Nếu server không thể chấp nhận phạm vi yêu cầu cho một tài nguyên, nó có thể chỉ ra với header dưới đây.

`Accept-Ranges: none`

Chú ý rằng server không bị yêu cầu để chứa một `Accept-Ranges` header, bất kể dù họ có chấp nhận phạm vi yêu cầu. Client cũng tự do tạo ra ranges request dù nó không nhận một `Accept-Ranges` header. Nếu client gặp vấn đề là gửi tới server không hỗ trợ, server đơn giản là sẽ gửi lại toàn bộ tài nguyên.

### 3.2.6 Age

`Age` header là một response header mà ước tính thời gian tồn tại của các tài nguyên liên quan. Cache server sử dụng giá trị này để đoán tài nguyên có còn hạn hay không và phải được làm mới từ server. Gía trị của `Age` header là số giây mà người gửi ước tính thời gian đã qua kể từ khi server gốc tạo ra hoặc tái tạo response đó.

Các tốt nhất để hiểu `Age` header hoạt động như thế nào ta có ví dụ sau đây. Hình 3.5. Hình này cho thấy request ban đầu với một tài nguyên, và đi qua hai cache server trung gian trước khi đến server gốc.

Như hình đó cho thấy, server gốc chứa hai header quan trọng trong phản hồi của nó. Các header đó là `Date` - thời gian nó tạo ra phản hồi, và một `Cache-Control` header - chỉ ra maximum age. Trong ví dụ, server chỉ ra rằng phản hồi có thể được xem xét làm mới lên tới 600s.

![Hình 3.5](http://i.imgur.com/XW7y2RZ.png)

**Hình 3.5: Một server gốc có thể nhận ra maximum age cho bản sao cache mà nó trả về. Trong ví dụ này, server giới hạn việc caching 10 phút (600s).**

Tình huống xảy ra trong hình 3.6, nó xảy tra trong 10 phút., một client tạo một yêu cầu cho cùng một tài nguyên. Cache server đầu tiên không có một bản sao của cache, nên nó truyền request tới cache thứ hai. Server đó trả về object vớ message header ở bước 9 trong hình.

![Hình 3.6](http://i.imgur.com/3BMaJI3.png)

**Cache server có thể chỉ ra nó tin tưởng object có Age header trong bao lâu. Cache server ước tính object đó khoảng 599s.**

Vào lúc này cacher server đầu tiên đưa ra một quyết định quan trọng: Cái object mà server thứ hai trả về có phù hợp hay không? Để trả lời cho cho câu hỏi đó, cache server đầu tiền tính toán một vài giá trị dựa trên các tham số trong bảng 3.4.

>**Bảng 3.4: Các tham số cho Cache Freshness Calculations

|Tham số| Giải thích|
|-------|-----------|
|`age_value`|Gía trị trong Age header của phản hồi(step 9); ví dụ như :599|
|`data_value`|Dữ liệu được gán cho tài nguyên bởi server gốc(step 4): ví dụ như 11 October 2000|
|`now`|Thời gian hiện tại của cache sercer đầu tiên|
|`request_time`|Thời gian mà cache tạo ra yêu cầu(step8)|
|`response_time`|Thời gian mà response đến nơi|

Bảng 3.5 cho thấy các bước trong việc tính toán. Chú ý rằng server thật sự dựa vào age của tài nguyên trên hai nguồn độc lập.Các bước trong bảng 3.5  đảm bảo rằng cache server chọn hai giá trị được bảo toàn nhất trong ước tính của nó, như vậy sẽ giảm khả năng trả về các tài nguyên cũ.

>**Bảng 3.5: Việc tính toán Freshness của một Cached Object**

|Step|Quy trình|
|----|---------|
|1|Tính toán age rõ ràng với sự khác nhau giữa response_time và date_value|
|2|Ưóc tính age của tài nguyên với age cực đại từ bước 1 và Age header trong phản hồi|
|3|Bổ sung sự khác nhau giữa response_time và request_time vào age được ước tính trong bước 2|
|4|Bổ sung sự khác nhau giữa now và response time|

Cache server sử dụng kết quả này như là age của tài nguyên. Nếu age thực tế vượt quá giá trị max-age của server gốc, server sẽ không sử dụng caches object cho phản hồi đó. Thay vào đó, nó tái tạo yêu cầu tới server gốc.
Để tiếm tục ví dụ, giả sử rằng một giây trôi qua giữa thời gian mà cacher tạo ra yêu cầu ở step 8 và nhận phản hổi ở step 9. Tiếp tục giả sử rằng một giây bổ sung cho thời gian delay sau khi phản hồi đi và trước khi phản hồi xử lý nó. Trong trường hợp này, server tính toán age của object là 601 giây, nên server từ chối phản hồi. Như kết quả cho thấy, nó có thể bắt đầu tiền trình của hình 3.7, nơi nó tái tạo request.( Trong hình dưới, cache server đầu tiên bổ sung Cache-Control header của nó vào yêu cầu ở step 10; bằng việc đặt max-age là 0 trong một phản hồi, cache server đầu tiên buộc cache server thứ hai tái tạo giá trị cache riêng của nó với server gốc.)

![Hình 3.7](http://i.imgur.com/ehW5Tv3.png)

**Hình 3.7: Khi age của cached object vượt quá giới hạn, cache server phải hỏi ý kiến server gốc cho một bản sao mới của hoặc tái thẩm định bản sao đang tồn tại. Ví dụ này, là một sự nối tiếp của hình 3.6, cache serer yêu cầu một bản sao mới.**

Các đặc điểm kỹ thuật HTTP giới hạn giá trị Age header là 2 147 483 648 giây. Mỗi khi một giá trị age vượt quá giới hạn đó trong một sự tính toán của server, server sử dụng giá trị cực đại để thay thế.

### 3.2.7 Allow

`Allow` header nhận dạng các phương thức HTTP mà nó hỗ trợ. Header này liệt kê các phương thức đó. Ví dụ, đoạn text dưới đây chỉ ra rằng một tài nguyên hỗ trợ phương thức `GET,HEAD và PUT`.

Header này rất hữu ích khi server phải trả về một ` 405 Method Not Allowed` status. Client cũng có thể sử dụng header này khi nó gửi tài nguyên tới serer với phương thúc `PUT`.

### 3.2.8 Authentication-Info

`Authentication-Info` header là một response header  mà các server có thể chứa trong phản hồi thành công, và nó đưa ra cho client thông tin kèm theo về việc xác thực trao đổi. Để chi tiết hơn, xem mục 4.1 .

### 3.2.9 Authorization

Client sử dụng `Authorization` header để nhận dạng và xác thực client - hoặc các user - tới một server. Qúa trình đảm bảo an toàn cho HTTP session đủ quan trọng để nói về nó trong một chương. Nên chúng ta sẽ thấy một sự mô tả chi tiết của authorization chong chương tới. Mục 4.1 chứng minh header này một cách rõ ràng.

### 3.2.10 Cache-Control

`Cache-Control` header là một header chính cho một vài chỉ thị khác nhau mà chỉ ra caching behaviour. Các chỉ thị này, trong đó có các tham số kết hợp với nó hoặc không, được phân chia bởi các dấu phẩy. Sau đây là ví dụ:

```sh
Cache-Control: max-age=3600, no-transform,
no-cache="Accept-Ranges"
```

Như các header khác, mỗi chỉ thị riêng lẻ  có thể được sử dụng trong các request hoặc response. Bảng 3.6 liệt kê các chỉ thị HTTP cache-control.

>**Bảng 3.6: Chỉ thị Cache-Control 

![Bảng 3.6](http://i.imgur.com/HjP4wE0.png)

Phần còn lại của mục nhỏ này xem xét lần lượt từng chỉ thị.

`Cache-Control: max-age=3600`
Chỉ thị `Max-Age` xử lý hai mục đích chính. Đầu tiên, khi được sử dụng bởi một server, nó chỉ ra thời gian lớn nhất mà cache nên giữ lại tài nguyên trong cache của nó mà không cần revalidate. Trong quy tắc này `max-age` giống `Expires` header. Nếu cả hai được đưa ra trong cùng một response, cache server nên bỏ qua `Expires` header, thậm chí nó còn bị hạn chế hơn giá trị của `max-age`. Quy tác này cho phép server gốc  nhận ra các hành vi khác nhau cho cache HTTPv1.0 so với cache HTTPv1.1, bởi vì cache server 1.0 sẽ không hiểu các chỉ thị `max-age`.

Chỉ thị `max-age` xử lý mục đính chính thứ hai khi client sử dụng nó. Khi client chứa chỉ thị này trong request của nó, client chỉ ra rằng nó muốn chấp nhận cached object không lớn hơn giá trị đề ra. Nếu một cache server có một entry mà "già" hơn age request của client, nó sẽ không trả về cached entry, dù là phản hồi gốc của server gốc chỉ ra entry vẫn phù hợp. Trong một trường hợp đặc biệt, client có thể chỉ ra `max-age`= 0, server luôn luôn trả truyền request tới server gốc cho cho việc tái thẩm định của locally cached entry.

`Cache-Control: max-stale`

Với chỉ thị `max-stale`, một client có thể chỉ ra rằng nó muốn chấp nhận response mà chứa một cached object, dù là object đó đường như hết hạn. Client có thể tùy chọn giới hạn thời gian hết hạn nó chuẩn bị để chấp nhận phản hồi trong bao lâu. Ví dụ một chỉ thị `max-stale=600,`, chỉ ra rằng client muốn chấp nhận responce lên tới 10 phút.

`Cache-Control: min-fresh=60`

Khi một client chứa chỉ thị `min-fresh` trong request của nó. Ví dụ, nếu một cache chứa một object mà không hết hiệu lực trong 45s, cache server có thể sẽ không trả về bản sao gốc trong response tới request như ví dụ ở trên. Ví dụ ở trên yêu cầu bất cứ bản sao gốc nào cũng phải duy trì ít nhất trong vòng 60s và 45s thì sẽ không phù hợp.

`Cache-Control: must-revalidate`

Chỉ thị `must-revalidate` cho phép server triệt tiêu đi việc sử dụng `max-stale` của các client. Khi một server chứa `max-revalidate` trong phản hồi, cache server nên bỏ qua chỉ thị `max-stale` trong các request của clien sau này.

`Cache-Control: no-cache`

Chỉ thị `no-cache` có thể xuất hiện trong responce hoặc request. Trong một request, chỉ thị này chỉ ra rằng client không muốn accept cached response, các cache server trung gian phải truyền request tới server gốc. Chú ý rằng yêu cầu này thì khác so với yêu cầu chứa chỉ thị `max-age=0`. Trong trường hợp của mà request chứa `no-cache`, cacher server luôn luôn tìm và lấy ra response từ server gốc. Còn với `max-age=0`, cache server chỉ cần tái thẩm định các local cache với server gốc. Nếu server gốc chỉ ra rằng cached entry vẫn còn phù hợp, cache server có thê sử dụng nó như một response.

Khi server gốc chứa một chỉ thị `no-cache` trong phản hồi, nó báo cho cache server biết rằng không được sử dụng phản hồi cho phản hồi sau nếu không tái thẩm định nó. Qui định này không hoàn toàn cấm cache server từ việc caching response; nó chỉ đơn thuần là buộc chúng phải tái thẩm định một local cached copy với mỗi yêu cầu.

Nếu một server gốc muốn hạn chế việc caching đối với các trường header hiện tại thay vì toàn bộ phản hồi, nó có thể làm việc đó bằn cách gọi tên các header đó trong chỉ thị này. Ví dụ, bằng việc chứa `no-cache="Accept-Ranges"` trong phản hồi của nó, server gốc báo cho cache server rằng chúng có thể cache response, nhưng chúng không chứa header `Accept-Ranges` trong phản hồi khi chúng trả lời các request sau với cached copy.

`Cache-Control: no-cache`

Chỉ thị `no-store` nhận dạng thông tin nhạy cảm, trong một request hoặc một repsonse. Chỉ thị này báo cho cache server biết là không được lưu message trong local storage, đặc biệt nếu nội dung có thể được lưu lại sau khi truyền dữ liệu.

`Cache-Control: no-transform`

Chỉ thị `no-transform`, xuất hiện trong response hoặc request, báo cho cache server biết là không được chỉnh sửa định dạng của message body của response. Ví dụ, các cacher không thể làm như vậy, để save cache space bằng cách chuyển đổi một hình độ phân giải cao thành động phân giải thấp.

`Cache-Control: only-if-cached`

Với chỉ thị `only-if-cached`, một client yêu cầu cache server phàn hồi thành công chỉ khi chúng có object trong local cache của chúng. Đặc biệt, client yêu cầu cache không tải lại response hoặc tái thẩm định nó với server gốc. Hành động này có thể hữu ích trong môi trường mạng yếu nới mà client cảm thấy sự trì hoãn trong việc kết nối tới server gốc thì không chấp nhận được. Nếu một cache server không thể trả lời request từ local cache của nó, nó sẽ trả về một `504 Gateway Timeout`.

`Cache-Control: private`

Chỉ thị `private` trong response chỉ ra rằng response được dành cho một user rõ ràng. Cache server có thể lưu lại một bản sao cho response cho request sau này từ cùng một user, nhưng chúng không được trả về bản sao cached đó tới các user khác, dù là các user đó tạo ta các request giống nhau.

`Cache-Control:  proxy-revalidate`

Chỉ thị `proxy-revalidate` báo là các cache server trung gian là chúng không trả về response cho các request sau này mà không tái thẩm định nó. Không giống như `must-revalidate`, tuy nhiên chỉ thị này cho phép client cache response và tái sử dụng cahed entry mà không cần thẩm định.

`Cache-Control: public`

Chỉ thị `public` là một sự đối lập của `private`. Một server chỉ ra rằng response của nó có thể được lưu tạm và trả về tới các user khác, dù là response sẽ bị hạn chế tới các server gốc hoặc thậm chí là non-cachable at all. Nếu một client cung cấp thông tin xác thực user, cache server thường xem xét response đó như là sự riêng tư đối vớ user đó. Nhưng nếu server phản hồi với một status là `301 Moved Permanently`, nó có thể sử dụng `public` cache control directive đề báo cho cache server biết để ghi đè các hành vi đó hoặc cache response.

`Cache-Control: s-maxage=1800`

Chỉ thị `s-maxage` hoạt động giống `max-age` trong response, ngoài trừ là nó chỉ áp dụng cho cache surving nhiều user. Với các cache server, `s-maxage` ghi đè lên cả `max-age` và `Expires` header. Cache server phản hồi tới cùng user nhiều lần, tuy nhiên có thể từ bỏ chỉ thị này.

### 3.2.11 Connection

Theo các đặc điểm kỹ thuật của HTTP, header `Connection` cho phép người gửi message chỉ ra việc ủy quyền các header khác trong message không được gửi thêm. Xem xét ví dụ hình 3.8. Trong hình đó, client tạo ra một request hứa hai message header: `Upgrade` và `Connection`. Proxy server, khi nó thấy header `Connection`, nó di chuyển indicated `Upgrade` header từ request trước khi gửi nó. Bởi vậy, `Connection` header chỉ ra các HTTP header được chuyển trong bước nhảy tiếp theo.

![Hình 3.8](http://i.imgur.com/yWPGMJB.png)

**Hình 3.8: Connection header chỉ ra các header HTTP khác nhau mà proxy server chuyển từ các message chúng relay. Trong ví dụ này , proxy không chứa pgrade header khi nó gửi casci GET request.**

Ví dụ, `Upgrade` header trong hình, được xác định để chứa ý nghĩa cho bước nhảy tiếp theo. Vì thế, thằng thắn mà nói , `Connection` header không cần thiết. Khi nào mà tất cả các hệ thống theo một chuẩn HTTP, chúng sẽ tự biết các header hop-by-hop. Tuy nhiên, `Connection` header thì thực sự có lợi, chỉ để chơi nếu các chuẩn HTTP được mở không. Nó cho phép HTTP xác định các hop-by-hop header mới, sự an toàn trong kiến thức mà các hệ thống đang tồn tại sẽ xử lý chúng theo từng bước nhảy như là các `Connection` header nhận dạng chúng.

Như mục 2.1.3 chú ý, với HTTP V1.1, kết nối liên tục là một hành động mặc định. Khi một client mở một kết nối cho request, thì kết nối vẫn được duy trì tới server. Nhưng điều gì xảy ra nếu server không muốn duy trì kết nối?  Tất nhiên là nó có thể ngắt kết nối sau khi gửi lại response. Hành động này thì hợp lệ, và cuối cùng client sẽ nhận ra là chuyện gì đã xảy ra và hành động một cách phù hợp. Tuy nhiên vấn đề ở đây là client không nhận bất cứ cảnh báo nào. Những server có ý thức sẽ chứa đựng các header dưới đây trong response ban đầu của nó.

`Connection: close`

Header này báo cho client là server đang dự tính đóng kết nối sau khi hoàn thành response của nó. Client nên chuẩn chị trước. Client cũng có thể chứa `Connection: close` trong request của nó. Trong trường hợp này, client đang cho phép server biết rằng nó không dự tính sử dụng một kết nối duy trì, đóng kết nối càng sớm càng tốt khi mà nó nhận được response. Chú ý rằng `Connection: close` không bị hạn chế cho request hoặc response đầu tiên trong một kết nối.  

Mục đích sử dụng chính thứ hai của `Connection` header là hỗ trợ các hệ thống cũ. Bởi vi sự duy trì không phải là hành động mặc định trước phiên bản 1.1, các sự bộ sung sớm sử dụng các header rõ ràng để yêu cầu một kết nối duy trì. Các header đó chứa một `Connection: keep-alive`.

```sh
GET / HTTP/1.1
Keep-Alive: timeout=5
Connection: Keep-Alive

```

Server chấp nhận sử dụng kết nối duy trì bằng việc phản hồi với một `Connection: keep-alive` header.

```sh
HTTP/1.1 200 OK
Keep-Alive: timeout=5, max=120
Connection: Keep-Alive
Content-Type: text/html

<html>...
```

Như là một vấn đề thực tiễn, sự duy trì của `Connection: keep-alive` header chỉ sự duy trì HTTP không phải duy trì chính nó.

### 3.2.12 Content-Encoding

`Content-Encoding` header nhận dạng các ký tự đặc biệt là một phần có sẵn trong tài nguyên được chứa trong message body. Đi cùng với nó là `Content-Type` header, header này biết được định dạng của tài nguyên. Ví dụ, nếu một client yêu cầu file manual.ps.gz, nó có thể nhận được một file trong response với message header sau. `Content-type` header nhận dạng object cuối là file PostScript, nhưng `Content-Encoding` header nhận mạnh là file này được nén với phần mềm gzip.

```sh
HTTP/1.1 200 OK
Content-Type: application/postscript
Content-Encoding: gzip

```

Đặc điểm kỹ thuật HTTP nhận dạng 4 kiểu nội dung mã hóa khác nhau, tất cả được liệt kê trong bảng 3.7

>**Bảng 3.7: HTTP Content-Encoding**

|Identifier|Ý nghĩa|
|----------|-------|
|compress|Định dạng mã hóa được được tạo ra bởi chương trình UNIX|
|deflate|Định dạng mã hóa zlib xác định bởi RF 1950|
|gzip|Định dạng mã hóa tạo ra bởi chương trình gzip, giống như môt tả trong RFC 1952.|

Chú ý rằng `Conntent-Encoding` giống `Transfer-Encoding` nhưng cũng có vài cái khác. `Content-Encoding` là các ký tự thuần của tài nguyên, trong khi `Transfer-Encoding` áp dụng cho việc truyền tải tài nguyên. Thủ thuật đảm bảo rằng việc đảo ngược chuyển đổi phải xáy ra theo đúng thứ tự. Ví dụ, trong fragment sau đây, tài nguyên được mã hóa lần thứ nhất bởi gzip; kết quả sau đó được mã hóa bở compress, và cuối cùng `chunked`  transfer encoding được áp dụng. Chuyển ngược lại theo thứ tự: đầu tiên là `chunked` sau đó là `compress` và cuối cùng là `gzip`.
```sh
Content-Encoding: gzip, compress
Transfer-Encoding: chunked
```

### 3.2.13 Content-Language

`Content-Language` header nhận dạng ngôn ngữ tự nhiên của tài nguyên kèm theo. Định dạng này giống `Accept-Language` header  mỗ tả trong mục 3.2.4. Chú ý rằng tính năng của HTTP với mục đích của lĩnh vực này cho ngôn ngữ của con người như là English. Nó không được sử dụng để chỉ ra ngôn ngữ máy như là C hhay Java.

### 3.2.14 Content-Length

`Content-Length` header đưa ra kích thước của mesage body tính bằng byte. `Content-Length` header thực sự là một trong vài cách khác nhau mà người nhận có thể xác định kích thước message từ định dạng transfer encoding hoặc content type, và nó có thể suy ra phần cuối của một message khi một kết nối `tcp` ngắt kết nối.

Bảng 3.8 liệt kê các quy tắc mà một người nhận sử dụng để xác định đoạn cuối của HTTP message theo thứ tự ưu tiên. Như các quy tắc chỉ ra rằng người gửi không chứa một `Content-Length` header nếu message là một response mà không chứa message body, hoặc nếu message body được mã hóa bằng cách sử dụng chucked format.

>**Bảng 3.8: Qui tắc xác định đoạn cuối của một HTTP message**

|Thứ tự|Quy tắc|
|------|-------|
|1|Nếu response có chứa một status code mà không chứa message body sau đó message kết thúc tại dòng trống đầu tiên sau các trường header. Những nội dung message sau sẽ bị từ chối|
|2|Nếu `Transfer-Encoding` cho message bị chunked, sau đó message langth được xác định bởi chunked format|
|3|Nếu `Content-Length` header được hiện ra, nó cung cấp kích thước của message|
|4|Nếu message có chứa một `Content-Type: multipart/byteranges`, định dạng kiểu truyền thông xác định đoạn cuối của message|
|5|Nếu server đóng kết nối, byte cuối cung được gửi là đoạn cuối của message|

### 3.2.15 Content-Location

`Content-Location` header cung cấp URI tương ứng với message body. Một server có thể chọn để sử dụng header này nếu tài nguyên nó trả về dựa trên nhiều URI. Vi dụ, nột server có nhiều ngôn ngữ dịch khác nhau, và nó có thể quyết định để trả về một phiên dịch đặc biệt dựa trên `Accept-Language` header trong request. Trong trường hợp này, `Content-Location` header có thể xác định object được dịch thay vì object gốc được yêu cầu.

`Content-Location` hiếm khi được sử dụng. Nó bị từ chối bởi `Location` header - cái mà xuất hiện thường xuyên trong các trao đổi Web. Trong khi `Content-Location` header xác định URI của tài nguyên được trả về trong message body, `Location` header nhận dạng một URI luân phiên cho tài nguyên được yêu cầu; ti nguyên không phải là một phần của message body khi `Location` header xuất hiện.

### 3.2.16 Content-MD5
`Content-MD5` header cung cấp sự đảm bảo rằng một message body đến đích mà không bị chỉnh sửa. Gía trị của header này là kết quả của thuật toán md5. Thuật toán md5, chương bốn sẽ mô tả sâu hơn, giống một sự tổng kiểm tra, nhưng nó sử dụng cơ chế mã hóa để đưa ra kết quả tương đối bỏ qua các lỗi không thể xác định được.
Sau đây là việc một hệ thống tính toán kết quả cho header này bắt đầu với một trang `html` là một message body.

```sh
<HTML>
    <BODY>
        <P>Hello World!</P>
    </BODY>
</HTML>
```

Chạy thuật toán `md5` trên trang `html` dẫn đến một giá trị chuỗi nhị phân 128-bit. Ví dụ dưới đây cho thấy kết quả là 16 byte, mỗi cái là một ký hiệu hệ thập lục phân.

`B2 B3 59 59 1E 96 1C 6B 0F 46 8F E5 36 BC D9 20`

Bởi vì thuật toán md5 tạo ra một giá trị nhị phân, và các http header là text, và `Content-MD5` header sử dụng thuật toán base64 để chuyển mã nhị phân sang mã ASCII. Ví dụ kết quả của việc mã hóa base64.

`Content-MD5: srNZWR6WHGsPRo/lNrzZIA==`

Để thấy toàn bộ ngữ cảnh của `Content-MD5` header, sau đây một response đầy đủ từ server, chứa cả các HTTP header và message body.

```sh
HTTP/1.1 200 OK
Date: Sun, 08 Oct 2000 18:46:12 GMT
Server: Apache/1.3.6 (Unix)
Content-Type: text/html
Content-Length: 66
Content-MD5: srNZWR6WHGsPRo/lNrzZIA==

<HTML>
    <BODY>
        <P>Hello World!</P>
    </BODY>
</HTML>
```

`Content-MD5` header cung cấp một sự bảo vệ "nối đuôi nhau" của nội dung vì thế người nhận có thể loại bỏ các lỗi được đưa ra bởi network hoặc bằng việc can thiệp vào proxy server. Để đảm bảo hành động này, đặc điểm kỹ thuật HTTP cấm tuyệt đối các server trun gian từ việc tạo hoặc chỉnh sửa `Content-MD5` header. Chỉ có server hoặc client có thể tạo header này.

Chú ý cuối cùng , Content-MD5 header có thể nhận dạng các thay đổi ngẫu nhiên tới nội dung message, nhưng nó không thể các tấn công nguy hiểm. Một kẻ tấn công thay đổi nội dung HTTP chỉ đề điều chỉnh lại Content-MD5 header cho hợp. Chương 4 thảo luận về nhiều cách để bảo vệ nội dung HTTP.

### 3.2.17 Content-Range
Khi một server chỉ chứa một phần của tài nguyên trong message body của nó, `Content-Ranges` header xác định đó là phần nào. Đặc điểm này rất hữu ích cho việc tải file sau khi download bị hỏng. Để thấy tiến trình đó hoạt động như thế nào, xem xét hình 3.9. Trong hình đó, viễn cảnh bắt đầu với việc client request một object. Như hình đó cho thấy, server bắt đầu trả về tài nguyên chứa 1234 byte thông tin. Tuy nhiên việc chuyển đó bị thất bị vì client chỉ nhận được 500 byte.

![Hình 3.9](http://i.imgur.com/U92iC1h.png)

**Hình 3.9: Khi vấn đề xảy ra, một client có thể không nhận được tất cả  object được yêu cầu. Trong ví dụ này, client request một object chứa 1234 byte nhưng việc chuyển bị hỏng vì chỉ có 500 byte được chuyển tới client.**

Tuy nhiên, trong response gốc, server chỉ ra rằng nó có thể chấp nhận các range request cho object. `Accept-Ranges` header chuyển thông tin đó. Do đó, khi client nhận ra rằng việc chuyển đó bị thất bại, nó không phải request tất cả các object lại nữa. Thay vào đó, như hình 3.10 cho thấy, nó chứa một `Ranges` header trong reuqest được tái tạo của nó.

![Hình 3.10](http://i.imgur.com/mnPRabT.png)

**Hình 3.10: Với Range header, một client có thể yêu cầu chỉ một phần của object. Ví dụ này cho thấy client request phần còn lại của object.**

Với request ở bước 3, client có một `Range` header cho phép từ 500 byte trở lên. Nhưng khi server response thì nó xuất hện một `Content-Ranges` để giới hạn lại còn từ 500 đến 1233/1234 byte. Object trong hình có dung lượng 734 byte nên nó được chuyển tới client một cách thành công. Số 1234 là tổng kích thước của object. 734 là một phần của object.

### 3.2.18 Content-Type

`Content-Type` header nhận dạng kiểu object mà message body chứa đựng. Các giá trị cho `Content-Type` header theo sau với cùng định type/subtype mà chúng ta thấy ở `Accept` header. Ngoài ra, ví dụ dưới đây cho thấy tài nguyên là một text file và nó sử dụng bộ kí tự `iso-8859-4`.

`Content-Type: text/plain; Charset=ISO-8859-4` 

### 3.2.19 Cockie

Nếu client muốn hỗ trợ http state management, nó cung cấp cockie mà nó nhận được từ server ở trong request sau này gửi tới server đó. Các cockie đó được vận chuyển trong một `Cockie` header, như ví dụ ở dưới đây. Ví dụ dưới đây cho thấy một cockie đơn, nhưng một client có thể chứa nhều cockie từ các server,  trong những trường hợp nó có thể kết hợp tất cả trong một header hoặc sử dụng các header riêng lẻ.

```sh
Cookie: $Version="1"; NAME="VALUE";
$Path="/shopping"; $Domain="www.shop.com";
$Port="80"
```

Mỗi cockie bắt đầu bằng việc nhận dạng phiên bản HTTP state management mà client đang sử dụng; trong ví dụ này phiên bản hiện tại là 1. Phiên bản luôn luôn theo sau bởi tên của cockie và giá trị của nó. Chúng được set bởi server trong `Set-Cockie` hoặc `Set-Cockie1` header của nó, nhưng chú ý rằng server không thể  sử dụng cockie name của `$Version`. Mặt khác, nó không thể nhận ra cockie trong một header. HTTP không cho sử dụng cockie name mà bắt đầu với ký tự $.

Các trường bổ sung mà theo sau cockie name và giá trị của nó là tùy chọn. Nếu được hiện thị, chúng nhận ra path, domain, và port của cockie.

### 3.2.20 Cockie2

Mặc dù nó cùng tên, nhưng mỗi quan hệ giữa `Cockie` và `Cockie2` header không giống như mỗi quan hệ giữa `Set-Cockie` và `Set-Cockie2` header. Trong khi `Set-Cockie2` được chỉ sửa nhẹ từ phiên bản `Set-Cockie`, còn `Cockie2` với `Cockie` thì khác nhau hoàn toàn.

`Cockie2` header đơn thuần chỉ ra phiên bản của HTTP state management mà client hỗ trợ. Trong ví dụ sau, phiên bản hiện tại là 1.

`Cockie2: 1`

Client có thể chứa header này mỗi khi nó gửi một `Cockie` header. Điều đó báo cho server biết rằng nó có thể sử dụng `Set-Cockie2` header như là `Set-Cockie` header trong các phản hồi sa này. Client mà không hoàn toàn hỗ trợ `Set-Cockie2` thì sẽ bỏ qua `Cockie2` header, cho dù chúng có thể chứa `Cockie` header. Serverr sẽ biết là không gửi client `Set-Cockie2` response.

### 3.2.21 Date

`Date` header chỉ ra rằng thời gian mà hệ thống gửi message được gửi đó. Chú ý rằng các giá trị của `Date` áp dụng cho message, không cần thiết để tài nguyên nhận dạng hay chứa đựng nó trong message. `Last-Modified` haeder cung cấp thời gian của tài nguyên.

Với phiên bản HTTP v1.1, hệ thống được yêu cầu để sử dụng định sạng sau đây của giá trị thời gian mà chúng tạo ra. Định dạng này được định nghĩa bởi `rfc 1123`.

`Date: Sun, 06 Nov 1994 08:49:37 GMT`

Để phù hợp với các cài đặt trước đây, HTTP v1.1 chấp nhận các ngày trong hai định dạng khác nhau. Định dạng đầu tiên trong ví dụ dưới đây, định nghĩa trong `rfc 850`. Chú ý rằng nó chỉ cung cấp số năm với hai chứ số, và ngày trong tuần là chuỗi đầy đủ.

`Date: Sunday, 06-Nov-94 08:49:37 GMT`

Một định dạng phổ biến khác. Đây là uotput của hàm asctime(), một phần của chuẩn thư viện ngôn ngữ C.

`Date: Sun Nov 6 08:49:47 1994`

Các đặc điểm ký thuật HTTP yêu cầu server gốc phải chứa một `Date` header trong các response của nó, ngoại trừ 3 trường hợp sau đây. Nếu response status là một `100 Continue` hoặc `101 Switching Protocols`, server có thể bỏ qua `Date` header. Nếu response status chỉ ra một lỗi server và server không thể tạo ra ngày phù hợp, nó có thể bỏ qua `Date` header. Và cuối cùng, server mà không có đồng hồ chính xác sẽ không chứa một `Date` header.

### 3.2.22 ETag

`ETag` header đưa ra cho server các cách phù hợp để nhận dạng tài nguyên, đặc biệt là cải thiện hiệu năng caching. Nếu không có `ETag` header, nó khó cho các cache để nhận ra các tài nguyên được yêu cầu. Xem xét ví dụ sau, `url` http://www.yahooo.com/. Tài nguyên thực sự được trả về có thể đa dạng không dựa vào thời gian, nhưng theo vị trí địa lý thì user ở UK có thể thấy home page khác với user ở Pháp. Như hình 3.11 và 3.12 chúng minh.

Vấn đề này có thể làm phức tạp sự tồn tại của Web cache, đặc biệt nếu chúng phải nhận dạng tài nguyên trong `url`. `ETag` header giải quyết vấn đề này bằng việc cung cấp một cách đơn giản để nhận dạng tài nguyên. Server gốc có thể gán cho tài nguyên một `ETag` - viết tắt của Entity Tag.

![Hình 3.11](http://i.imgur.com/DoucTXv.png)

**Hình 3.11: Web server có thể điều chỉnh nội dung của Web page để phù hợp với các user. Trong ví dụ này user được định vị là ở UK, nên server trả về nội dung cho địa phận này.**

![Hình 3.12](http://i.imgur.com/NkDgMxT.png)

**Hình 3.12: Một user ở Pháp request cùng URL có thể thấy nội dung khác, gây khó cho cache server.**

Một giá trị `ETag` có thể chứa các ký tự nhị phân bên trong bộ dấu "abc"; giá trị thực sự được tải lên server gốc. Sau đây là 1 ví dụ:

`ETag: "xyzzy"`

Weak ETag bắt đầy với w/ . Ví dụ:

`ETag: w/"xyzzy"`

### 3.2.23 Expect

Với `Expect` header, một client có thể báo cho server biết rằng nó mong đợi một hành động cụ thể. Đặc điểm kỹ thuật HTTP định nghĩa `Expect` như là một header có thể mở rộng, client mong muốn server trả về `100 Continue` status. Ví dụ:

`Expect: 100-continue`

Nếu một server nhận được một `Expect` header với cái mà nó không chấp nhận, nó phản hồi với một `417 Expectation Failed` status.

Khi client đang giao tiếp qua một chuỗi các proxy server, mỗi proxy trong chuỗi đó  được mong muốn phản hồi `Expect`. Ngoài ra, proxy truyền `Expect` tới server tiếp theo mà không có chỉnh sửa.

### 3.2.24 Expires

`Expires` header chứa một thời gian mà tài nguyên không còn phù hợp. Cho đến lúc đó, cache giữ một bản sao của response và trả về bản sao đó trong response tới request sau này. Gía trị của header này là ngày, như ví dụ bên dưới, nhưng các cài đặt cũ có thể sử dụng định dạng không phù hợp, `Expire: 0` để chỉ ra rằng một tài nguyên không được cache.

`Expires: Thu, 01 Dec 1994 16:00:00 GMT`

Nếu một server không muốn cache tài nguyên, nó thiết lập giá trị của `Expire` header giống giá trị của `Date` header. Tuy nhiên thực tế thì hầu hết các serer thiết lập `Expire` header là một thời điểm trong quá khứ. Đặc điểm kỹ thuật HTTP cũng cấp một server từ việc thiết lập giá trị của `Expire` header không vượt quá thời gian hiện tại 1 năm về tương lai.

Nhắc lại mục 3.2.10, một `Cache-Control max-age` ghi đè trực tiếp lên `Expire` header. Bởi vì HTTP đưa `Cache-Control` vào phiên bản 1.1 và các cài đặt trước đã hỗ trợ `Expire`, sự kết hợp của cả hai header này cho phép server xác định các thời hạn khác nhau với v1.1 và phiên bản trước 1.1 cache. Một server có thể làm vậy nếu các đặc điểm bổ sung phiên bản 1.1 cho phép nó mở rộng age của tài nguyên một cách an toàn.

### 3.2.25 From
 Client có thẻ sử dụng `From` header để xác định user đã request. Gía trị của header này là một địa chỉ email như ví dụ dưới đây cho thấy. Bởi vì email tự nguyện gửi đi này tiết lộ emal của các user nên bây giờ nó không còn tồn tại trong các request nữa.

### 3.2.26 Host

Với phiên bản 1.1 đưa vào `Host` header để giúp cho các nhà cung cấp Web hosting. Nếu không có `Host` header, các nhà cung cấp buộc phải sử dụng tài nguyên hosting không được hiệu quả. Như chúng ta sẽ thấy trong mục 2.4.1, vấn đề là nhà cung cấp muốn chạy nhiều web của các công ty trên cùng một hệ thống server vật lý. Nhưng ví dụ, nếu server hỗ trợ cả hai companya.com và companyb.com, thì server sẽ phản hồi tới các request như thế nào? Một client sẽ yêu cầu một trang chủ của companya hay companyb.

```sh
GET / HTTP/1.1
Accept: */*
User-Agent: Mozilla/4.0
        (compatible; MSIE 5.5; Windows NT 5.0)

```

Nếu không có `Host` header, các nhà cung cấp buộc phải dành cho mỗi client một địa chỉ IP. Server có thể xác định response dựa trên địa chỉ IP của client mà đã gửi request. Thật không may, địa chỉ IP là hàng khan hiếm, và các nhà cung cấp sẽ không sử dụng chúng một cách phung phí. `Host` header giải quyết vấn đề này bằng việc cho phép một client chỉ ra `dns` name cho mỗi tài nguyên mà nó yêu cầu. Dưới đây là ví dụ: 

```sh
GET / HTTP/1.1
Accept: */*
User-Agent: Mozilla/4.0
(compatible; MSIE 5.5; Windows NT 5.0)
Host: www.companyA.com

```

Mặc dù nó hiếm khi được sử dụng, v1.1 cho phép một client xác định một `uri` đầy đủ trong request của nó. Trong các trường hợp, server bỏ qua giá trị cảu `Host` header nếu một cái được hiện ra. Ví dụ, một server xử lý request dưới đây như là một request cho home page của CompanyB, mặc dù `Host` header chứa nội dung là `CompannyA`.

```sh
GET http://www.companyB.com/ HTTP/1.1
Accept: */*
User-Agent: Mozilla/4.0
(compatible; MSIE 5.5; Windows NT 5.0)
Host: www.companyA.com

```

### 3.2.27 If-Match

`If-Match` header thêm vào request của client điều kiện; server chấp nhận request chỉ khi điều kiện đúng. `If-Match` header liệt kê một hoặc nhiều Entit-Tag (ETag), và server xử lý request đó nếu tài nguyên khớp với một trong các Entity-Tag đó. Server không phải sử dụng giá trị weak Etag (mục 3.2.22) cho sự so sánh đó.

`If-Match` header có thể rât hữu ích khi client chỉnh sửa các tài nguyên được lưu trên server. Trong kiểu môi trường đó, `If-Match` ngăn cản sự xung đột có thể xảy ra khi nhiều user chỉ sửa cùng một tài nguyên. Ví dụ,nhìn vào hành động đầu tiên trong chuỗi các hành động ở hình 3.13. Trong hình này, hai client khác nhau request một tài nguyên. Trong cả hai trường hợp, server trả về tài nguyên với một `ETag` header là `1234`.

![Hình 3.13](http://i.imgur.com/LHZygF9.png)

**Hình 3.13: Hai client khác nhau request cùng một object. Bởi vì object cùng giống nhau trong cùng response, server gán cho nó cùng giá trị ETag là 1234.**

Ví dụ tiếp theo trong hình 3.14. Client đâu tiên chỉnh sửa tài nguyên xong và gửi lại object được chỉnh sửa đó lên server bằng phương thức PUT. `If-Match` header báo cho server biết để xử lý request chỉ khi Etag của tài nguyên vẫn còn là 1234. Nếu tài nguyên vẫn chưa bị thay đổi thì server sẽ chấp nhận request. Tuy nhiên trong trường hợp này, tài nguyên đã bị thay đổi. Gía trị mới bị thay đổi bởi client nên server đã gán tài nguyên này với một ETag mới.

Một lúc sau, client thứ hai hoàn thành việc chỉnh sửa và chuẩn bị gửi lên server object mới được chỉnh sửa. Step 8 trong hình cho thấy, có cũng chứa một `If-Match` header. Tuy nhiên trong trường hợp này, 1234 không khớp với Etag mới của tài nguyên. Server từ chối request với một `412 Precondition Failed` status. 

![Hình 3.14](http://i.imgur.com/WS5GAJb.png)

**Hình 3.14: Client A trả về một object đã được chỉnh sửa trong step 5. Bởi vì object đã bị thay đổi, server gắn cho nó 1 ETag mới. Sau đó, khi client B có gắng update object ban đầu, server nhận ra sự xung đột và từ chối request đó.**

Client cũng có thể sử dụng một `iF-Match` header với một dấu * cho ETag như ví dụ dưới đây. Trong trường hợp này, client yêu cầu server chấp nhận bất cứ request nào mặc kệ ETag. Một client có thể sử dụng tùy chọn này nếu nó muốn ngăn cản việc tạo nhãn mới cho tài nguyên.

`If-Match: *`

### 3.2.28 If-Modified-Since

`If-Modified-Since` header cho phép client và proxy server sử dụng cache hiệu quả hơn. Nó yêu cầu một server phản hồi tới một request chỉ khi tài nguyên được thay đổi từ ngày được chỉ định. Hình 3.15 cho thấy hệ thống HTTP có thể sử dụng header này như thế nào. Hình đó cho thấy một GET reuqest chuẩn mà truyền tới một proxy server. Yếu tố quan trong của response server là `Last-Modified` header, nó chỉ ra lần cuối cùng chỉnh sửa tài nguyên được yêu cầu. 

![Hình 3.15](http://i.imgur.com/behdb3m.png)

**Khi một server trả về một object, nó chỉ ra lần cuối mà object bị thay đổi bằng cách xác đinh giá trị của Last-Modifed header.**

Tiếp tục ví dụ với hình 3.16. Một lúc sau client tạo ra một request khác cho cùng một tài nguyên. Proxy có chứa một bản sao của request trước trong bộ nhớ của nó, nên nó chèn `If-Modified-Since` header vào trong request trước khi truyền tới server gốc. Gía trị của header này giống thời gian `Last-Modifed` của server gốc. 

![Hình 3.16](http://i.imgur.com/4eOOB0E.png)

**Một proxy server có thế sử dụng If-Modified header để yêu cầu một object chỉ khi nó bị thay đổi. Ví dụ, object chưa thay dổi, nên server trả về 304 status.**

Trong ví dụ này, tài nguyên chưa thay đổi. Thay vì trả về toàn bộ object, server gốc phải hồi với một `304 Not Modified` status. Status này báo cho proxy server biết bản sao của object đó vẫn còn phù hợp, nên nó trả về bản sao cho client. Nếu bản sao đó lớn, bước này có thể lưu lại bằng thông mạng lớn và trì hoãn, bởi vì object không phải đi từ server gốc tới proxy một lần nữa.

Client sử dụng `If-Modified-Since` header không những dành cho request chuẩn, mà nó còn dành cho các request cục bộ với `Range` header. Nói chung trong trường hợp này `If-Modified-Since` header áp dụng cho cả một object chứ không để yêu cầu một phần của object.

Nếu ngày trong một `If-Modified-Since` header không phù hợp , vì nps sai định dạng hoặc trễ hơn thời gian hiện tại của server, sau đó server bỏ qua header này và trả về tài nguyên.

Client sử dụng `If-Modifed-Since` header tính đến hai vấn đề với nhiều server được triển khai. Đầu tiên, các server so sánh giá trị `If-Modifed-Since` khớp hoàn toàn với giá trị `Last-Modified` của tài nguyên. Dù giá trị của `If-Modifed-Since` trễ hơn so với giá trị của `Last-Modified`, các server đó sẽ trả về đầy đủ thực thể. Client mà muốn phù hợp với hành vi này thì sẽ chỉ sử dụng giá trị của `Last-Modified` header. Vấn đề thứ hai là đồng bộ hóa thời gian. Client phải nhận thức rằng server clock không phải lúc nào cũng đúng, chúng ta phải chịu sự không chính xác về thời gian và những sai sót của con người. Cách cuối cùng cho client thích nghi với các vấn đề là chỉ sử dụng giá trị `Last-Modified` header của server.

### 3.2.29 If-None-Match

`If-Non-Match` header là sử bổ sung của `If-Match` header; nó có sử ảnh hưởng đối lập hoàn toàn. Khi một client chứa `If-None-Match`, nó yêu cầu server hoàn thành request chỉ khi tài nguyên có ETag khác với nó trong header. Server có thể xem xét giá trị strong ETag cho tất cả request và giá trị weak ETag chỉ với phương thức `GET` và `HEAD`.

Với request `GET` và `HEAD`, `If-None-Match` header hoạt động như `If-Modified-Since`. Nếu server tìm thấy ETag cho tài nguyên mà giống với một cái bất kì được liệt kê trong danh sách của `If-None-Match` header, server sẽ trả về một `304 Not Modified` status. Nếu client chứa cả `If-none-Match` và một `If-Modified-Since` header trong request, `If-Modified-Since` header sẽ được ưu tiên. Nếu server tin tưởng tài nguyên mới hơn so với thời gian của `If-Modified-Since`, nó trả về toàn bộ tài nguyên mặc kệ  `If-None-Match` header.

Trong tất cả các trường hợp, nếu request đưa ra các status khác với `2xx` và `304` mà `If-None-Match` header không hiện thị ra, server trả về status đó và bỏ qua `If-None-Match`.

Cưng như với `If-Match` header, `If-None-Match` cho phép một client sử dụng dấu * để trình bày các giá trị của ETag. Với ví dụ bên dưới, việc sử dụng đó yêu cầu server chấp nhận các request chỉ khi tài nguyên không thật sự tồn tại. Một client có thể sự dụng giá trj header này trong một `PUT` request nếu nó muốn chắc chắn và không ghi đè lên một object tồn tại.

`If-None-Match: *`

### 3.2.30 If-Range

`If-Range` header cải thiện hiệu năng cho client hoặc các proxy mà chứa một phần của object trong local cache của chúng. Nếu không có `If-Range`, client yêu cầu hai sự trao đổi để lấy được bản sao mới của object mà bản sao đó đã được thay đổi. Hình 3.17 cho thấy việc trao đổi message khi chưa có `If-Range`.

Trong bước 1, client yêu cầu từ 500-1000 byte cho một tài nguyên, nhưng ETag cho tài nguyên này vẫn là "1234". Khi server nhận ra rằng tài nguyên đã bị thay đổi, nó phản hồi với một `412 Precondition Failed` status. Client sau đó phải tạo ra một request mà để yêu cầu cho một object mới.

![Hình 3.17](http://i.imgur.com/XihBtqf.png)

**Hình 3.17: Nếu không có If-Range header, một client có thể phải tạo thêm 2 request khi nó chứa một phần của object nhưng nó không còn phù hợp nữa. Request đầu tiên báo cho client biết rằng bản sao của nó không phù hợp, và request thứ hai lấy ra toàn bộ object mới.**

`If-Range` header cho phép một client kết hợp các request đó lại thành một, như hình 3.18 minh họa. Trong request của nó, client chứa một `If-Range` header và một `Range` header. Cả hai cái đó cùng báo cho server biết chỉ trả về range được request nếu ETag của tài nguyên vẫn là "1234" nếu không thì server trả về toàn bộ object. Trong ví dụ này, object bị thay đổi nên server trả về toàn bộ object với một `200 OK` reponse.

![Hình 3.18](http://i.imgur.com/UUt7GTz.png)

**Hình 3.18: If-Range header cho phép một client yêu cầu một phần hoặc toàn bộ client, nếu phần đó không còn phù hợp, server sẽ trả về toàn bộ tài nguyên trong response.**

Với các server không sử dụng ETag, `If-Range` header là một định dạng tùy chọn. Thay vì một ETag cho giá trị của `If-Range`, client có thể sử dụng ngày. Trong các trường hợp đó, client yêu cầu server trả về range riêng nếu tài nguyên chưa bị thay đổi từ ngày được chỉ định đó. Hình 3.19 ccho thấy việc client sử dụng tùy chọn này như thế nào.Trong hình đó, không giống như hai hình trước, tài nguyên chưa bị thay đổi, nên servevr chỉ trả về range được yêu cầu.

![Hình 3.19](http://i.imgur.com/6VSGKxT.png)

**Hình 3.19: Client có thẻ chỉ ra một ngày thay cho giá trị cảu ETag của If-Range header. Trong cả hai trường hợp, server trả về một object riêng chỉ khi một phần của lient đang tồn tại vẫn phù hợp.**

`If-Range` header không sử dụng định dạng đặc biệt để phân biệt ETag với date trong If-Range. Nó là trách nhiệm của server là thông dịch header đó chinh xác. Bởi vf ETag được đính kèm trong dấu ngoặc kép còn date thì không, server có thể dễ dàng xác định.

### 3.2.31 If-Unmodified-Since

`If-Unmodified-Since` là một sự đối lập của `If-Modified-Since`. Nếu một client chứa `If-Unmodified-Since` trong request của nó, nó yêu cầu server chấp nhận request chỉ khi tài nguyên được tham chiếu không bị thay đổi từ ngày được chỉ định. Một client có thể sử dụng header này trong `PUT` request nếu nó muốn đảm bảo rằng không thành phần nào thay đổi tài nguyên trong khi client đang chỉnh sửa nó.

Giống như các `If-` header khác, server xem xét`If-Unmodified-Since` header chỉ khi request được trả về một `200 OK` status. Nếu điều kiện của `If-Unmodified-Since` không cố định, server sẽ trả về `412 Preconditon Failed` status.

### 3.2.32 Last-Modified

`Last-Modified` header cung cấp ngày mà tài nguyên lần cuối cùng được chỉnh sửa khi nào. Ví dụ dưới đây sẽ cho thấy, header này chủ yếu vì lợi ích cho proxy và client, bởi vì nó cho phép chúng định ngày cho một object được lưu trong local cache. Khi hệ thống cần lấy một bản sao mới của một object, nó có thể sự dụng date này, cùng với `If-Modified-Since` header, nó ngăn cản server gửi lại toàn bộ tài nguyên  nếu nó không bị thay đổi. Hình 3.15 và 3.15 cho thấy sự vận hành này.

`Last-Modified: Tue, 15 Nov 1994 12:45:26 GMT`

### 3.2.33 Location

Server sử dụng `Location` header để chuyển hướng client tới một uri mới cho một tài nguyên. `Location` header được sử dụng phổ biến với phản hồi có chứa `3xx` status code, nhưng serer cũng có thể sử dụng `Locaction` header trong một `201 Created` response. Trong trường hợp đó, header báo cho client nớ nó có thể lấy bản sao của tài nguyên mà nó mới gửi yêu cầu tới server bằng phương thức `PUT`.

Hình 3.20 cho thấy hoạt động phổ biến của một `Location` header. Trong bước 1, client gửi một GET request chuẩn tới server a. Server đó không có tài nguyên , nhưng nó biết chỗ mà tài nguyên có thể được tìm thấy. Trong câu trả lời của nó, nó trả về một `302 Found`, và nó chứa một `Location` header. Gía trị của header này là một uri đầy đủ cho tài nguyên. Client có thể sử dung thông tin này để tái tạo một reuqest tới server được chỉ định, server b là server được chỉ định và nó trả về tài nguyên theo yêu cầu.

![Hình 3.20](http://i.imgur.com/B8NuQvI.png)

**Hình 3.20: Location header đưa ra cho client một uri cho một object. Nếu phù hợp, client request theo location đó. Trong ví dụ này, server A báo cho client biết là phải lấy tài nguyên ở server B.**

`Loaction` header thì rất khác so với `Content-Location` header, mặc dù có sự giống nhau trong tên gọi. Khi một server chứa một `Content-Location` header, nó báo cho client nơi mà tài nguyên được lấy ra; một `Location` header báo cho client biết chỗ một tài nguyên hiện tại đang được định vị.

### 3.2.34 Max-Forward

`Max-Forward` header đi cùng với phương thức `OPTIONS` và `TRACE`, giúp client chữa các lỗi mà ngăn cản chúng nhận được các response từ server. Có hai loại vấn đề mà có thể là rất khó đề chuẩn đoán được nếu không có `Max-Forward` header.

Hình 3.21 cho thấy đình huống khi một lỗi trung gian. Trong hình, proxy server b nhận request ở step 2, nhưng nó không thể chuyển request tới server gốc. Tình huống này làm khổ client. Client giao tiếp trực tiếp với proxy server a và nó thể xác nhận là proxy server vẫn hoạt động bình thường. Client cũng có thể xác nhận server hoặc động chính xác ( bằng việc gọi cho hỗ trợ kỹ thuậ server ). Tuy nhiên, bằng cách nào đó request không được gửi tới server.

![Hình 3.21](http://i.imgur.com/eZBKVnx.png)

**Hình 3.21:  Nếu một proxy server thất bại trong việc chuyển request, client không thể nhận được bất cứ response nào.**

Vòng lặp request cũng ngăn không cho client nhận được response, nhưng nói chung nó làm hại tới mạng. Khi vòng lặp xuất hiện, các request tuần hoàn qua các proxy server vô hạn, buộc mạng và tài nguyên máy chủ lại. Hình 3.22 minh họa vấn đề này. Thay vì đến server gốc, request của client tiếp tục truyền qua 3 proxy server. Ví dụ, proxy a truyền cho proxy b, proxy b truyền cho proxy c rồi proxy c truyền cho proxy a, cứ như vậy truyền theo vòng tròn.

![Hình 3.22](http://i.imgur.com/DuKchI6.png)

**Hình 3.22: Vòng lặp có thể phát triển khi các proxy vận chuyển tuần hoàn qua nhau mà không chuyển đến server gốc. Đây là một lỗi khác ngăn cản client nhận được response.**

Trong các trường hợp của cả hai hình 3.21 và 3.22, client không bao giờ nhận được response cho request của nó, và cho đến khi nào mà nó cứ lặp lại như vậy thì client không thể nhận được một response, cho dù có gửi đi gửi lại request. Khi mà điều đó xảy ra, client có thể cầu viện phương thức `TRACE` cùng với `Max-Forward` và `Via` header.

`Max-Forward` giới hạn số hệ thống trung gian mà mỗi request truyền qua. Client ( thậm chí là proxy server ) set cho nó một giá trị ban đầu và các server sau nhận được request với giá trị của header đó giảm dần. Nếu một server trung gian nhận request với `Max-Forward` với giá trị là 0, nó không phải truyền request đi nữa. Nó phản hồi lại như thể nó là một server gốc.

Sau đây là việc mà client có thể phát hiện ra vòng lặp request như thế nào trong hình 3.22. Nó bắt đầu gửi một phương thức `TRACE` với một `Max-Forward` được set là 0. Như hình 3.23 cho thấy, proxy server đầu tiên thấy được giá trị của `Max-Forward` và phản hồi lại với một `200 OK`.

![Hình 3.23](http://i.imgur.com/XcQYoE4.png)

**Hình 3.23: Max-Forward header giới hạn số proxy server mà một request có thể truyền qua. Với giá trị là 0, nó không truyền đi xa hơn nữa. Proxy phản hồi lại như một server gốc.**

Khi client nhận một response từ proxy a, nó gửi một `TRACE` khác, lần này với một `Max-Forward` được set là 1. Hình 3.24 chứng minh việc xảy ra lần này. Proxy a chấp nhận request, giảm giá trị của `Max-Forward` header, và gửi nó tới server tiếp theo là proxy b. Như hình đó cho thấy, proxy a cũng chèn vào nó một `Via` header. Mục 3.2.50 sẽ mô tả chi tiết về header này. Mục đích chính của nó lần này là chú thích về proxy server mà nó truyền qua. Trong step 4, khi message đến server b, `Max-Forward` header ngăn cản server b gửi nó đi xa hơn nữa. Thay vào đó, proxy b trả về response cho client.

![Hình 3.24](http://i.imgur.com/VjxckoG.png)

**Hình 3.24: Khi proxy nhận được một request với Max-Forward là 0, nó phản hồi request đó cho client thay vì gửi nó tới server gốc. Trong ví dụ này, proxy B không gửi request mà phản hồi trực tiếp. Message body trong response là một bản sao của request mà proxy B nhận được.**

Hình 3.24 phá bỏ các quy tắc bình thường bằng việc hiện thị ra toàn bộ http message trong step 5 và 6. Các bước này cho thấy response từ proxy b khi nó trả về client. Khi client nhận được response ở step 6, nó đạt được thông tin quan trong về vấn đề này. Nó biết được sau proxy a là một proxy b.

Client tiếp tục tìm kiếm lỗi tiếp bằng cách tăng giá trị của `Max-Forward` lên 1 thành 3. Như thường lệ nó nhận response của step 20 trong hình 3.25. Và response này cho phép client nhận ra được vòng lặp. Từ `Via` header trong message body, client có thể thấy request đó được truyền qua proxy a hai lần, và do đó nó bị mắc kẹt trong vòng lặp.

Client có thể sử dụng tiến trình tương tự để nhận ra các lỗi của server trung gian. Nó bắt đầu mới một giá trị của `Max-Forwards` là 0 và giảm dần nó mỗi lần nó nhận một response từ `TRACE` request. Khi mà không có response nào đến,client biết là request thất bại.

![Hình 3.25](http://i.imgur.com/NfQOiRK.png)

**Hình 3.25: Max-Forward header có thể giới hạn vòng lặp cho một request. Mỗi proxy giảm dần giá trị của header khi truyền qua nó, cho đến khi giá trị bằng 0. Trong ví dụ này, Max-Forward là 0 khi request đến proxy A hai lần ( ở step 16 ). Proxy A phản hồ request thay vì gửi nó đi tiếp.**

### 3.2.35 Meter 

Giống như `Cache-Control` header chúng ta được thấy ở mục trước, `Meter` header hỗ trợ một vài tùy chọn khác nhau như là các sự chỉ thị. Caching proxy server và server gốc sử dụng các chỉ thị này để báo cáo lượt truy cập trang và để giới hạn caching của tài nguyên, mục 2.4.5 sẽ giải thích. Việc xử lý đo lường diễn ra trong 3 giai đoạn. Bảng 3.9 liệt kê các chỉ thị Meter riêng lẻ. 

>**Bảng 3.9: Các chỉ thị của Meter header**

|Chỉ thị|Short|Được sử dụng trong|Dùng để|
|-------|-----|------------------|-------|
|count=n/m|c=n/m|Request sau|Proxy server báo cáo sử dụng|
|de-report|d|Response|Server gốc yêu cầu proxy cung cấp báo cáo|
|dont-report|e|Response|Server gốc báo cho proxy không cần phải báo cáo|
|max-reuses=n|r=n|Response|Server gốc chỉ ra giới hạn cho các lượt truy cập trang bình thường|
|max-uses=n|u=n|Response|Server gốc chỉ ra giới hạn cho các lượt truy cập đặc biệt|
|timeout=n|t=n|Response|Server gốc chỉ ra thời gian cực đại giữa các báo cáo|
|will-report-and-limit|w|Reuqest trước|Proxy có thể hỡ trợ việc đo lường|
|wont-ask|n|Response|Server gốc chi ra rằng nó sẽ không yêu cầu đo lường cho một object|
|wont-limit|y|Request trước|Proxy hiểu được việc đo lường nhưng sẽ không giới hạn việc sử dụng|
|wont-report|x|Request trước|Proxy hiểu được việc đo lương như không phải báo cáo việc sử dụng|

Quy trình đo lường bắt đầu khi một request truyền qua một proxy server. Nếu proxy server muốn hỗ trợ việc đo lường, nó thêm một `Meter` header vào trong request. Trong header đó, proxy có thể xác định kiểu hỗ trợ mà nó cung cấp như là `will-report-and-limit, wont-limit,` hoặc `wont-report` chỉ thị. Nếu không có các chỉ thị đó, mặc đinh sẽ là cả report và limit. Proxy cũng phải thêm một `Connection: Meter` header vào trong request. Nếu proxy hài lòng với trường hợp mặc định ( hỗ trợ cả limit và report ), nó chỉ cần chứa `Connection: Meter` header  ngụ ý như là `Meter` header vẫn có tồn tại.

```sh

GET / HTTP/1.1
Via: proxy
Connection: Meter

```

Khi server phản hồi request này, nó cung cấp một sự điều khiển cho proxy mới một `Meter` header trong response. Header đó chứa một chuỗi các chỉ thị. Nó có thể báo cho proxy biết là server muốn nhận các báo cáo kiể `do-report` hay `dont-report`; nó có thể xác định số lần lớn nhất mà proxy trả về reponse từ cache của nó (`max-uses` và `max-reuses`). và nó ccos thể xác định một sự giới hạn thời gian trước khi proxy gửi một báo cáo mới (`timeout=n`). Chú ý rằng, không giống như các giá trị của HTTP header, giá trị của `timeout` là phút, không phải giây. Trong ví dụ bên dưới, server gốc yêu cầu proxy cung cấp báo cáo ít nhất mỗi giờ một lần. Response cũng định rõ không giới hạn. Nếu server muốn báo ch proxy biết không được gửi cho nó thêm `Meter` header nữa, nó có thẻ sử dụng chỉ thị `wont-ask` trong `Meter` header của nó. 

```sh
HTTP/1.1 200 OK
Date: Sun, 08 Oct 2000 18:46:12 GMT
Meter: do-report, timeout=60
Connection: Meter

...
```

Khi proxy server thấy response của server và các cache massage body, nó bắt đầu đém số lần nó trả về object từ cache của nó. Nó đếm số lượt truy cập cả  trang đặc biệt và trang bình thường. Các proxy xem xét response nơi mà chúng thực sự trả về các object là lượt truy cập trang đặc biệt (với một 200 OK status) và các phản hồi mà xác nhận bản sao được lưu trữ trước như là một lượt truy cập trang bình thường ( một 304 Mot Modified status ). Mỗi khi việc đếm đạt đến cực đại xác định bởi server, proxy tái tạo object với server gốc trước khi trả nó về client.

Nếu proxy server tiếp tục nhận được request cho một cached object, nó phải xác định khi nào gửi một báo cáo việc sử dụng tới server gốc. Proxy gửi báo cáo này mỗi khi nó phải gửi một `GET` hoặc `HEAD` tới server gốc, mỗi khi số lần giới hạn của server hết hạn hoặc mỗ khi proxy xóa cái object từ bộ nhớ cache của nó. Báo cáo bao gồm một `Meter` header với một chỉ thị `count`. Hai giá trị của `count` là số lần sử dụng và tái sử dụng. Ví dụ dưới đây báo cáo 934 lượt sử dụng và 201 lượt tái sử dụng.

```sh
GET / HTTP/1.1
Via: proxy
Meter: count=934/201
Connection: Meter

```

### 3.2.36 Pragma

`Pragma` header là kẻ đương nhiệm cho phiên bản trước của HTTP. Với phiên bản 1.1, chỉ có một định dạng cho header này; nó được mô tả trong ví dụ dưới đây.

`Pragma: no-cache`

Mục đích của header này là cách mà client chỉ ra rằng client không muốn các server trung giản trả về cache response. Thay vào đó , chúng yêu cầu các proxy gửi các request tới server gốc. TRong thực tế, nhiều server chứa `Pragma: no-cache` trong response của chúng như một cách để báo cho các server trung gian không được lưu response trong bộ nhớ cache của proxy. Hành động này rất đáng được vinh danh mặc dù nó chưa được chuẩn hóa. Tuy nhiên server bị cảnh báo không được thừa nhận rằng các server trung gian chấp nhận header này.  Một cách khác an toàn hơn cho server gốc mà không muốn response của nó bị cache thì hãy chứa một `Expires` header với một ngày trong quá khứ.

Ở một thời điểm nào đó trong tương lai, tất cả các hệ thống trung gian sẽ tương thích với phiên bản 1.1. Tại thời điểm này, server và client có thể cùng sử dụng `Cache-Control: no-cache` header.

### 3.2.37 Proxy-Authenicate (Xác thực proxy)

`Proxy-Authenticate` header cho phép các proxy server trung gian xác thực một client. Bằng việc chứa header này trong một response, proxy yêu cầu client tái tại request nhưng phải chứa giấy phép quyền hạn của nó. Proxy server luôn phải chứa `Proxy-Authenticate` header trong response vớ một `407 Proxy Authenticate Required` status. `Proxy-Authenticate` giống `WWW-Authenticate`, ngoại trừ rằng nó được tạo ra bởi proxy server thay vì server gốc. Các chứng chỉ công nghệ của proxy và server gốc sẽ được miêu tả chi tiết trong mục 4.1.

### 3.2.38 Proxy-Authentication

Một client phản hồi tới yêu cầu của proxy server cho sự xác thực bằng việc chứa một `Proxy-Authentication` khi nó tái tạo request. Mục 4.1 sẽ mô tả chie tiết hơn.

### 3.2.39 Range

`Range` header cho phép client request một phần của tài nguyên thay vì toàn bộ tài nguyên. Như chúng ta đã thấy trong mục 3.2.25, header này được viết với form dưới đây. Trong một request, header này yêu cầu 500 byte ( từ 500 đến 999 byte ) và hai byte cuối cùng của tài nguyên. Chú ý rằng số byte của HTTP 1.1 bắt đầu với số 0.

`Range: bytes 500-999, -2`

Với header đó, server trả về một status code là `206 Partial Content`. Server cũng chứa `Content-Range` header trong response của nó. Nếu server không thể trả về range được yêu cầu thì nó có thể phản hồi toàn bộ tài nguyên kèm với một `200 OK` status code. Bởi qui tắc này và nhiều server có thể không hiểu `Range` header, client sẽ phải nhận toàn bộ tài nguyên.

### 3.2.40 Referer

`Referer` header ( sai chính tả ) xuất hiện trong request của client nên server có thể xác định được nơi mà client nhận được uri trong request của nó. Trong ví dụ sau đây, nhìn vào Web pagee của hình 3.26. Đó là một trang chủ của the Internet Engineering Task Force, địa chỉ là http://www.ietf.org.

Chú ý rằng trang này chứa một link tới Web site cho the Internet Assigned Numbers Authorty (iana). Link xuất hiện ở góc dưới bên phải và một thẻ HTML cho link đó.
<a href="http://www.iana.org">IANA</a>

![Hình 3.26]()

**Hình 3.26: Khi một user truy cập vào một Web page link, chẳng hạn như link tới IANA, trình duyệt chứa địa chỉ web của trang đó, www.ietf.org trong request của nó.**

Nếu user click vào link, browser tạo ra một HTTP GET request tới www.eitf.org. Bởi vì link xuất hiện trên trang wwww.ietf.org, nên request sữ liệt kê các trang của ietf trong `Referer` header. Sau đây là ví dụ thực sự của một HTTP GET request.

```sh
GET / HTTP/1.1
Referer: http://www.ietf.org/
Accept-Language: en-us
Accept-Encoding: gzip, deflate
User-Agent: Mozilla/4.0 (compatible;
            MSIE 5.5; Windows NT 5.0)
Host: www.iana.org
Connection: Keep-Alive

```

### 3.2.41 Retry-After

Server sử dụng `Retry-After` header để báo cho client biết khi nào nó thử lại request của nó. Header có thể xác định ngày nên ví dụ dưới đây yêu cầu một client đợi đến 1/1/2001 để tái tạo lại request.

`Retry-After: Sun, 31 Dec 2000 23:59:59 GMT`

Header cũng có thể chỉ ra số giây. Ví dụ dưới đây báo cho client biết nó phải đợi 2 phút trước tri thử lại.

`Retry-After: 120`

Server cũng có thể sử dụng header này với một `503 Service Unavailable` hoặc bất cứ phản hồi chứa status `3xx`.

### 3.2.42 Server

Với `Server` header, một HTTP server xác định phần mềm mà nó sử dụng để hoạt động http. Header này là một phiên bản của `User-Agent` header (thấy trong mục 3.2.48). Ví dụ sau cho thấy các giá trị của `Server` header có thể tìm thấy được trên Web ngày nay.

`Server: Apache/1.3.6 (Unix) (Red Hat/Linux)`

```sh
Server: IBM-Planetwide/10.45
        Domino-Go-Webserver/4.6
```

`Server: Microsoft-IIS/5.0`

`Server: NaviServer/2.0 AOLserver/2.3.3`

`Server: Netscape-Enterprise/3.6 SP3`

`Server: Xitami`

### Set-Cockie2

`Set-Cockie2` header là một update nhẹ của `Set-Cockie` header từ phiên bản http 1.0 . Cả hai header này được sử dụng bởi server để chỉ ra HTTP state management với một client. (Xem mục 2.5) . Bằng việc chứa một `Set-Cockie2` header trong response của nó, một server cung cấp một state management cockie tới client, và nó yêu cầu client trả về cockie đó trong request sau này tới server.

Header bắt đầu bằng việc đưa ra tên và giá trị của cockie, và sau đó nó cung cấp các thuộc tính được liệt kê trong bảng 2.1 . Một ví dụ với tất cả các thuộc tính khả thi:

```sh
Set-Cookie2: NAME="VALUE";
Comment="Shopping Cart";
CommentURL="http://merchant.com/cookies.html";
Discard; Max-Age="300"; Path="/shopping";
Port="443"; Secure; Version="1"
```

Mục 2.5 mô thả tiến trình state management, bao gồm các sự diễn giải của các thuộc tính và các qui tắc mà client và server phải tuân theo khi sử dụng cockie.

### 3.2.44 TE

`TE` header báo cho một server biết kiểu tranfer encoding mà client có thể chấp nhận trong một response, và nó có thể chỉ ra các sự ưu tiên cho các kiểu tranfer encoding. Header này rất giống với `Accept-Encoding` header, ngoại trừ một điều là nó áp dụng cho tranfer encoding hơn là content encoding.

Định dạng của `TE` header rất giống với `Accept-Encoding` header. Gía trị của header là được ngăn cách nhau bởi dấu phẩy. Ví dụ sau đây chứa một header chỉ ra rằng client có thể chấp nhận kiểu tranfer encoding là gzip và deflate, nhưng nó ưu tiên gzip hơn bởi vì nó hứa tham số cao hơn. (1 > 0.9).

`TE: gzip, deflate;q=0.9`

Ngoài chuẩn tranfer encoding, `TE` header đưa ra một giá trị đặc biệt để xác định transfer encoding kiểu chunked với các trường trailer. Chú ý rằng nó không cần thiết cho client để liệt kê transfer encoding kiểu chunked trong `TE` header bởi vì tất cả  các HTTP 1.1 client phải chấp nhận tranfer encoding kiểu chunked. Tuy nhiên, việc sử dụng trường trailer chunked encoding là tùy chọn, giá trị header này cho phép một client nói lên rằng nó hiểu được định dạng đó.

`TE: trailers`

### 3.2.45 Trailer

Client và server chứa `Trailer` header khi chúng sử dụng transfer encoding kiểu chunked cho message body. Header này liệt kê các header http khác xuất hiện sau mesage body. Nó báo cho người tiếp nhận các header nó mong đợi trong chunked tranfer encoding trailer. Có 3 trường header không thể xuất hiện trong chunked trailer: `Transfer-Encoding`, `Content-Length` và `Trailer`. 

Ví dụ sau đây cho thấy một response đơn giản với `Trailer` header. Response sử dụng transfer encoding kiểu chunked và `Trailer` header liệt kê các `Expires`. `Expires` header xuất hiện sau message body.

```sh
HTTP/1.1 200 OK
Date: Fri, 31 Dec 1999 23:59:59 GMT
Content-Type: text/plain
Transfer-Encoding: chunked
Trailer: Expires

1a
ABCDEFGHIJKLMNOPQRSTUVWXYZ
0
Expires: Sat, 01 Jan 2000 23:59:50 GMT

```

### 3.2.46 Transfer-Encoding

`Transfer-Encoding` header xác định kiểu transfer encoding của một message body. Mục dù http v1.1 xác định header này trong một cách chung, các cài đặt hiện tại dùng nó chỉ để nhận dạng chunked transfer encoding.

`Transfer-Encoding: chunked`

Các nhà phát triển HTTP v1.1 tạo ra chunked transfer encoding để cải thiện hiện năng của server. Với đặc điểm này, server có thể gửi một response trong khi nó đang soạn thảo chúng; trái lại, nếu không có chunked encoding, nó buộc phải trì hoãn việc phản hồi cho đến khi toàn bộ message được hoàn thành.

Vấn đề nảy sinh vì server HTTP v1.1 phải chỉ ra kích thước của response message. Trước HTTP v1.1, server chỉ được gửi response và phải ngắt kết nối. Một client có thể  báo rằng nó nhận được toàn bộ response khi kết nối bị ngắt. Tuy nhiên với HTTP v1.1, việc duy trì kết nối là mặc định, và đóng kết nối sau mỗi response làm cho nó không còn khả thi nữa. Tuy vậy, client vẫn cần nhiều cách để biết được khi nào chúng nhận được tất cả message. `Content-Length` header là phương án đơn giản nhất đề giải quyết vấn đề này. Khi server chứa `Content-Length` header trong một response, client đơn thuần chỉ cần đếm số byte để biết được khi nào nó hoàn thành response.

Mặc dù đơn giản và dễ sử dụng, `Content-Length` header vẫn có vấn đề của nó. `Content-Length` header là một trong những phần đầu tiên của một response. Nhưng trước khi một server có thể tinh toán được giá trị của `Content-Length`, nó phải biết kích cỡ đầy đủ của message body. Sự hạn chế này đồng nghĩa với việc trước khi một server gửi một response, nó phải soạn đầy đủ message body và tính toán kích thước của nó. Khi message body lớn, và khi server tạo ra message thì làm giảm hiệu năng của server.

Với chunked transfer encoding, server chia message body ra thành một hoặc nhiều `chunk`. Trong response của nó, server gửi từng `chunk` theo thứ tự lần lượt. Mỗi `chunk` đi kèm với một dòng chỉ kích thước của chunk dưới dạng mã hexa. `chunk` cuối cùng có kích thước là 0 byte. Sau đây là một ví dụ message body với ba `chunk`. ( Cái thứ ba có kích thước là byte, nên chỉ có hai cái đầu tiên chứa nội dung. ) Tổng cộng kích thước của message body là 36 byte. ( `chunk` đầu tiên là `1a` hoặc 16 byte và `chunk` thứ hai là `0a` hoặc 10 byte. )

```sh
HTTP/1.1 200 OK
Date: Fri, 31 Dec 1999 23:59:59 GMT
Content-Type: text/plain
Transfer-Encoding: chunked

1a
ABCDEFGHIJKLMNOPQRSTUVWXYZ
0a
0123456789
0

```

Để so sánh, sau đây là một mà message body không có chunked sẽ như thế nào

```sh
HTTP/1.1 200 OK
Date: Fri, 31 Dec 1999 23:59:59 GMT
Content-Type: text/plain
Content-Length: 36

ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789

```

### Upgrade

`Upgrade` header cho phép một client và server tạo ra một nâng cấp tới một giao thức giao tiếp khác. Giao thức mới có thể là một phiên bản mới của HTTP hoặc là một giao thức khác toàn toàn như là Transport Layer Security. ( Mục 4.3.3 mô tả `tls` sử dụng `upgrade` như thế nào.) Client đề ra một upgrade giao thức bằng việc chứa một `Upgrade` header trong request của nó.
 
```sh
GET http://www.bank.com/acct.html?749394889300
HTTP/1.1
Host: www.bank.com
Upgrade: TLS/1.0
Connection: Upgrade

```

Server có thể phản hồi request này với một `101 Switching Protocols` status, và nó chứa  một `Upgrade` header trong response của nó.

```sh
HTTP/1.1 101 Switching Protocols
Upgrade: TLS/1.0, HTTP/1.1
Connection: Upgrade
```

Chú ý rằng cả request và response cũng chứa `Connection: upgrade` header. Header này phải luôn luôn xuất hiện khi `Upgrade` được sử dụng bởi vì mỗi bản nâng cấp chỉ áp dung giữa client và server đầu tiên. Nếu một server muốn nâng cấp việc giao tiếp của nó với server gốc, nó có thể sử dụng phương thức `CONNECT` để tạo ra một kết nối ảo với server đó và sau đó nâng cấp kết nối ảo đó.

Ví dụ cũng cho thấy rằng response chứa `101 Switching Protocol` liệt kệ một chuỗi các giao thức trong `Upgrade` header. Trong response đó, server chỉ ra rằng nó đang nâng cấp lên http 1.1 qua tls 1.0.

### 3.2.48 User-Agent

`User-Agent` header là một phiên bản client của `Server` header. Với `User-Agent`, một client nhận dạng được các cài đặt HTTP đang được sử dụng. Ví dụ, việc mà Netscape Navigator trên máy Macintosh của Apple nhận dạng chính nó.

`User-Agent: Mozilla/4.x (Macintosh)`

Web site http://browserwatch.internet.com đưa ra một danh sách các cài đặt của client khác nhau đang truy cập vào trang đó. Hiện tạ thì nó đưa ra 213 máy sử dụng IE, 65 máy sử dụng Netscape' Navigator và 510 http client khác.

### 3.2.49 Vary

Với `Vary` header, server gốc đưa ra cho các proxy server sự hướng dẫn thêm trong việc quản lý local cache của chúng. `Vary` header liệt kê các http header khác nhau , ngoại trừ `uri`, xác định tài nguyền mà server trả về tron response của nó. Ví dụ, các server gốc trả về các tài nguyên khác nhau dựa trên giá trị của `User-Agent` trong request của client. Ví dụ sau đây chứa một `Vary` header trong response của nó.

```sh
HTTP/1.1 200 OK
Date: Fri, 31 Dec 1999 23:59:59 GMT
Content-Type: text/html
Vary: User-Agent

...
```

Một proxy server sẽ biết được rằng nó có thể trả về một bản sao cache của response qua các request sau chỉ khi các request đó chứa cùng giá trị `User-Agent` như request tới server gốc. Một giá trị của `User-Agent` khác buộc cache phải tạo ra câu lệnh query lại với server.

### 3.2.50 Via

`Via` header đưa ra đường dẫn của một message khi nó đi qua một proxy server. HTTP yêu cầu một server trunng gian ghi tên mình vào một `Via` header trong mỗi request hoặc client trước khi chuyển nó đi. Một proxy có thể thêm hoặc tạo mới một `Via` header. Hình 3.27 cho thấy `Via` header tăng dần trong request từ client tới server.

![Hình 3.27](http://i.imgur.com/TISs06W.png)

**Hình 3.27: Via header ghi lại đường dẫn của một HTTP message kh nó đi qua một proxy server. Các server cúng chỉ ra phiên bản HTTP mà chúng chấp nhận.**

Proxy server đầu tiên tạo một `Via` header và thêm giá trị vào đó. 1.1 đứng trước tên server là phiên bản HTTP mà có hiệu lực khi server nhận được request Khi request truyền qua proxy b, proxy không thêm một `Via` header mới mà thêm tên và phiên bản của proxy b vào trong `Via` header đó.

Điều quan trọng là các proxy server tạo hoặc điều chỉnh `Via` header trước khi chúng thực hiện bất cứ tiến trình nào của message. Ví dụ, một proxy có thể nhậm một `TRACE` request với một `Max-Forward` là 0, chỉ rr rằng proxy không thể chuyển request đi xa hơn nữa. Ví dụ như proxy b trong hình 3.28. Tuy nhiên, trước khi proxy b phản hồ `TRACE` request, nó phải chèn vào `Via` header. Sau khi làm vậy, nó tạo ra một response ở step 3. Nó phản hồi `TRACE` request thay cho server gốc.

![Hình 3.28](http://i.imgur.com/57ZfO6D.png)

### 3.2.51 Warning 

`Warning` header bổ sung thông tin về một response, thường là để cảnh báo user về các vấn đề của cache. Một `Warning` header chứa các cảnh báo riêng lẻ ngăn cách nhau bởi dấu phẩy.

```sh
Warning: 110 proxy.com "Response is stale"
Fri, 31 Dec 1999 23:59:59 GMT
```

Trường đầu tiên là một dòng code cảnh báo, và trường tiếp theo là xác nhận rằng server đã tạo ra cảnh báo. Một chuỗi ký tự được trích dẫn là một ngôn ngữ tự nhiên giải thích cho cảnh báo, phù hợp với user. Trường cuối cùng ( tùy chọn ) mang theo thời gian của cảnh báo.

Bảng 3.10 liệt kê các warning code

>**Bảng 3.10: HTTP 1.1 Warning code**

|Code|Giải thích|Ý nghĩa|
|----|----------|-------|
|110|Response is stale|Proxy trả về một object đã hết hạn trong response của nó|
|111|Revalidation failed|Proxy không xác thực rằng object vẫn còn phù hợp( vì nó không thể liên kết với server )|
|112|Disconnection operation|Proxy có tình bị mất kết nối mạng|
|113|Heuristic expiration|Proxy đoán là object vẫn còn phù hợp nhưng object đã quá 24 giờ|
|199|Miscellaneous warning|Một cảnh báo bất kỳ tùy ý|
|214|Transformation failed|Proxy chỉnh sửa object theo một cách nào đó ( có thể là thay đôi định dạng để tiết kiệm không gian lưu trữ cache )|
|299|Miscellaneous persistent warning|Một cảnh báo bất kỳ để thể tiếp tục lặp lại|

Khi một proxy nhận một `Warning` header với một ngày khác với `Date` header trong response, proxy sẽ xóa cảnh báo đó từ header. Nếu `Warning` header không chứa cảnh báo thì proxy cũng xóa cảnh báo đó đi. Hành động này đảm bảo cảnh báo không bị lan truyền một cách không phù hợp qua mạng của các cache server. Nếu không có nó, một object có thể mắc kẹt với một cảnh báo không phù hợp.

### 3.2.52 WWW-Authenticate

`WWW-Authenticate` header cho phép server gốc xác thực một client. Bằng việc chứa header này trong một response ( thường đi kèm với `401 Unauthorized ` status code ), server buộc client phải tái tạo lại request kèm theo một giấy phép quyền hạn. `WWW-Authenticate` sẽ được miêu tả chi tiết trong mục 4.1 .

## 3.3 Status code

Như chúng ta đã thấy trong nhiều ví dụ, một phần quan trọng của HTTP response là status code. Code này chỉ ra rằng một request của client đã thành công và cung cấp thông tin bổ sung về kết quả của request. Mỗi giá trị của status code mà một số nguyên ba chữ số, và HTTP chia các status code dựa trên kí tự đầu tiên của các giá trị đó. Status cung cấp thông tin (100-199), chỉ sử thành công(200-299), chuyển hướng một client(300-399), chỉ ra một lỗi của client(400-499) hoặc chỉ ra một lỗi của server(500-599). Trong mỗi phần như vật, x00 status code là status chính của phần đó. Nếu client nhận được một giá trị của status code mà nó không hiểu, nó có thể xử lý một như là x00 status code. Ví dụ, một giá trị của status code là 237 (237 thì nó không hiểu là gì) sẽ được xử lý là 200. 
Bảng 3,11 cung cấp một danh sách đầy đủ của tất các status code mà HTTP định nghĩa, chúng ta sẽ hiểu chi tiết các status code qua các mục nhỏ.

>**Bảng 3.11:  HTTP Status code**

|Nhóm|Code|Miêu tả|
|----|----|-------|
|**1xx**||**Information**|
||100|Continue|
||101|Switching Protocols|
|**2xx**||**Successful**|
||200|OK|
||201|Created|
||202|Accepted|
||203|Non-Authoritative Information|
||204|No Content|
||205|Reset Content|
||206|Partical|Content|
|**3xx**||**Redirection**|
||300|Multiple Choides|
||301|Moved Permanently|
||302|Found|
||303|See Other|
||304|Not Modified|
||305|Use Proxy|
||306|không được sử dụng|
||307|Temporary Redirect|
|**4xx**||**Client Error**|
||400|Bad Request|
||401|Unauthorized|
||402|Payment Required|
||403|Forbidden|
||404|Not Found|
||405|Method Not Allowed|
||406|Not Acceptable|
||407|Proxy Authentication Required|
||408|Request Timeout|
||409|Conflict|
||410|Gone|
||411|Length Required|
||412|Precondition Failed|
||413|Request Entity Too Large|
||414|Request-URI Too Long|
||415|Unsupported Media Type|
||416|Requested Range Not Satisfiable|
||417|Exppectation  Failed|
||418|Upgead Required|
|**5xx**||**Server Error**|
||500|Internal Server Error|
||501|Not Implemented|
||502|Bad Gateway|
||503|Service Unavvailable|
||504|Gateway Timeout|
||505|Version Not Found|

### 3.3.1 Information(1xx)

Status code trong khoảng từ 100-199. Nó đưa ra cho server cách để cung cấp các phản hồi tới client, mặc dù server chưa hoàn thành xong response.

`100 Continue`

`100 Continue` status code là một phần của tiến trình mà client kiểm tra server hoàn thành xong response chưa. Cái này rất quan trọng, ví dụ, nếu client có một message body lớn và nó muốn chắc chắn rằng server chấp nhận nó trước khi nó gặp vấn đề trong việc gửi nó. Có trường hợp là nó không phù hợp để gửi message body mà không biết server có thể nhận nó hay không.

Gỉa sử một client có một file lớn mà nó muốn `PUT` lên server. Client có thể sử dụng cơ chế tiếp tục này để tránh tiêu hao tài nguyên mạng. Để làm vậy, client bắt đầu request của nó với một http message body. Để kích hoạt sự tiếp tục, nó chứa `Expect: 100-continue` header trong message. Tuy nhiên, quan trong là client không (chưa) gửi message body. Đó là step 1 trong hình 3.29.

![Hình 3.29](http://i.imgur.com/oDXxp3e.png)

**Hình 3.29: Client yêu cầu một server chấp nhận request trước khi gửi toàn bộ message body. Expect header yêu cầu server ra hiệu cho sự chấp nhận đó bằng việc trả về một 100 status code. Khi client nhận được một 100 status code, nó tiếp gửi việc gửi phần còn lại của request.**

Nếu sau khi thấy các header của request, server chấp nhận request, server phản hồi với một `100 Continue` status code giống như step 2 trong hình. Response tạm thời này báo cho client biết để xử lý request của client à gửi phần còn lại của request trong step 3. Server hoàn tất việc trao đổi bằng việc trả về `200 OK` status code trong step 4.

Trong step 2, nếu server nhận ra rằng nó không thể chấp nhận request, nó phải hồi với một status code khác. Một server có thể yêu cầu sự thẩm đinh quyền ( đòi hỏi một `401 Unauthoried` response ) hoặc sau khi thấy giá trị của `Content-Length`, server có thể nhận ra rằng nó không có đủ không gian trong bộ nhớ để lưu trữ object (`413 Request Entity Too Large`).

Để đối phó với việc server không hỗ trợ hoàn toàn cơ chế tiếp tục này, các client gửi một `Expect: 100 continue` header để không phải đợi `100 Continue` response. Nếu server không phản hồi tại một thời điểm phù hợp, client tiến hành request của nó bằng mọi cách.

`101 Switching Protocols`

Server sử dụng `101 Switching Protocols` response để chấp nhận request của client để nâng cấp giao thức. Ví dụ trong hình 3.30, client request một nâng cấp cho TLS bằng việc chứa `Upgrade: TLS/1.0` header trong request của nó. Server chấp nhận nâng cấp trong step 2 với một `101 Switching Protocols` status code tạm thời, và trong step 3, việc trao đổi tiếp tục sử dụng giao thức mới. 

![Hình 3.30](http://i.imgur.com/UDicxCH.png)

**101 status chỉ ra rằng người gửi có dự tính thay đổi giao thức. Client sử dụng giao thức mới khi nó nhận được 101 response.**

### 3.3.2 Successful (2xx)

Status code bắt đầu với số 2 chỉ sự thành công. Với các response này, server báo cho client biết là request của nó đã được nhận, hiểu và chấp nhận.

`200 OK`

`200 OK` status code là http response cơ bản nhất. Nó báo rằng request của client đã thành công. Dựa trên phương thức request, response chứa các thông tin bổ sung. Ví dụ, trong việc phản hồi thành công cho `GET` request, server chứa tài nguyên được request trong message body. Tuy nhiên, với `HEAD` request, server chỉ trả về response header, chứa các entity header mà áp dụng cho tài nguyên được request; message body bị bỏ qua.

`201 Created`

Server trả lời với một `201 Created` status code khi một request thành công cho việc tạo mới một tài nguyên. `Location` header trong response cung cấp một uri cho tài nguyên mới, nhưng server có thể chứa bản trình bày của một tài nguyên hoặc địa chỉ của nó trong message body.

`202 Accepted`

Với một `202 Accepted` status code, một server báo cho client biết rằng nó đã chấp nhận request, nhưng chưa hoàn thành nó. Một server gửi response này có thế chứa trong message body sự chỉ dẫn cho việc client có thể biết được status cuối cùng của request. Ví dụ, nếu uri mà client có thể sử dụng để kiếm trả request status, server có thể chứa uri đó trong response.

`203 Non-Authoritative Information`

`203 Non-Authoritative Information` status code chỉ ra rằng các header của response có thể không phải là cuối cùng. Thay vào đó, chúng được tạo bởi các server trung gian. Tuy nhiên, message body vẫn phù hợp.

`204 No Content`

`204 No Content` status code chỉ ra rằng server đã chấp nhận request nhưng nó không cần phải trả về thông tin cho client trong response. Dạng phản hồi này có lợi cho dynamic và interactive Web session. Xem xét hình 3.31, cho thấy browser dựa trên giao diện người dùng cho một truyền tin server.Khi ấn chuột vào checkbox thì user ngưng việc tự động cập nhật của màn hình.

Nếu user click vào checkbox, browser cần gửi một HTTP request tới server, và đó có thể là phương thức GET hoặc POST. Tuy nhiên, thường thì server phản hồi tới GET hoặc POST request bằng việc gửi tài nguyên được chỉ định, và browser chấp nhận tài nguyên và hiện thị nó ra cho user. Trong trường hợp này, user thấy một trang giống nhau sau khi ấn vào checkbox, chỉ có trạng thái checkbox bị thay nhưng lại. Nhưng điều đó có nghĩa là server phải gửi toàn bộ Web page lại, chứa cái bảng phức tạp và các hình đồ họa của nó. Điều đó không cần thiết lại không hiệu quả.

![Hình 3.31](http://i.imgur.com/wPqRIRr.png)

**Hình 3.31: Nếu một server cần biết về một request của client mà không cần phải gửi cho client thông tin mới, nó có thể trả về một 204 status. Trong ví dụ này, browser có tất cả thông tin nó cần để cập nhận cho hiện thị nếu server ấn vào nút checkbox; một 204 response tránh gửi lại toàn bộ website.**

Một cách tốt hơn là server phản hồi tới request của client một `204 No Content` status. Điều đó báo cho client biết là request của nó đã thành công nhưng không có sẵn thông tin mới. Browser có thể tiếp tục hiển thị Web page đang tồn tại, tiết kiệm thời gian, băng thông và tài nguyên server.

`205 Reset Content`

`204 Reset Content` status giống `204 No Content`. Trong cả hai trường hợp, response không chứa message body. Tuy nhiên, với một `205 Reset Content`, server chỉ client để reset lượt truy cập tài liệu mới mà tạo ra request. Tương đương với nút Reset trên Web form.

`206 Partial Content`

Server phản hồi tới một request cho một tập con của một tài nguyên ( một request với `Range` header ) sử dụng `206 Partial Content` status khi chúng chấp nhận request và chỉ trả về tập con được yêu cầu. Response cũng chứa `Content-Range` header để xác định phần nào của tài nguyên được hiện thị trong message của response.

### 3.3.3 Redirection (3xx)

Status code bắt đầu từ 300-399 báo cho client biết rằng nó cần có thêm hành động để hoàn thành request của nó. Server bắt client phải tái tạo lại request của nó, nhưng cho một uri khác. Nếu chỉ có một địa chỉ thay thế phù hợp, hoặc nếu server có một sự ưu tiên cho một địa chỉ đặc biệt trong các địa chỉ, server chứa uri cho `Location` header. Các location thay thế khác sẽ được liệt kê trong message body.

`300 Multiple Choices`

`300 Multiple Choices` status đưa ra cho client nhiều địa chỉ thay thế cho request. Server cung cấp các location thay thế đó trong message body của response, và nó chứa một `Location` header.

`301 Moved Permanently` 

Khi một uri của tài nguyên thay đổi vĩnh viễn, server phản hồi với một `301 Moved Permanently` status.Từ này trở về sau, client ( và các proxy ) sử dụng uri được chỉ định cho tất cả các tham chiếu tới tài nguyên. Tất cả các 3xx status khác hiện ra các điều kiện tạm thời.

`302 Found`

`302 Found` status chỉ ra rằng tài nguyên được di chuyển tạm thới tới một location mới, và client tái tạo request của nó tới uri mới. Thực tế, nhiều client nhận một `302 Found` status sẽ gửi một GET request tới uri mới, cho dù request ban đầu sử dụng phương thức khác. Hành động này thực sự vi phạm đặc điểm HTTP. Với phiên bản 1.1, http đưa ra `303 See Other` và `307 Temporary Redirect` status code để giải quyết vấn đề này.

`303 See Other`

`303 See Other` status giống như `302 Found` nhưng nó sử dụng phương thức POST. Sau khi client tạo POST request, response này báo cho nó biết nơi để lấy được tài nguyên. Bởi vậy, locaton được chỉ ra bởi `303 See Other` status không phải là location mới cho tài nguyên gốc. Nó chỉ tới một tài nguyên hoàn toàn mới.

`304 Not Modified` 

Nếu một requets chứa một điều kiện ( ví dụ như `If-Match` hoặc `If-Modified-Since` header) và điều kiện đó không được đáp ứng, server phản hồi với một `304 Not Modified` status. Việc này cho bắt một client ( hoặc proxy server mà chuyển request ) sử dụng một bản sao cache của tài nguyên.

`305 Use Proxy`

`305 Use Proxy` status buộ client phải tái tạo lại request cho một proxy server. Chỉ server gốc tạo ra status này, và status chỉ áp dụng cho request ban đầu.

`307 Temporary Redirect` 

`307 Temporary Redirect` status giống `302 Found` status: Tài nguyên tạm thời được chuyển đến một location mới, và client tái tạo request. Client sử dụng cùng một phương thức request. Như chú ý ở trước, http 1.1 thêm status code này bởi vì có nhiều client phản ứng không đúng với `302 Found` status.
