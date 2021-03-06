# Báo cáo Task 17- Lab Linux

Người thực hiện: Lã Ngọc Sơn

Nguồn: Youtube

Cập nhật ngày: 01/05/2017
>--------------------

### Mục lục

* [1.Cơ bản về hệ lệnh](#1)
* [2.Quản lý file](#2)
* [3.Xử lý văn bản](#3)
* [4.Chỉnh sửa văn bản với lệnh "vi"](#4)
* [5.Cấu hình thiết bị phần cứng](#5)
* [6.Quản lý phần mềm và gói phần mềm](#6)

>------------------------------------

![](http://i.imgur.com/o1XV0et.png)

Với task này ta sẽ thực hiện trên máy ảo Ubuntu .

Về việc cài đặt và khởi động ta có thể tham khảo trên link dưới đây.

[Quản trị mạng](https://quantrimang.com/huong-dan-cai-dat-ubuntu-tren-vmware-workstation-p1-116946)

Còn trong báo cáo này sẽ tập trung chủ yếu vào các lệnh và việc sử dụng lệnh để tương tác với hệ thống trong đó có các thư mục và file văn bản.
<a name="1"></a>
## 1.Cơ bản về hệ lệnh

### Shel lệnh

Có 3 loại shell:

* C shell (CSH)
* Korn shell (KSH)
* Bourne shell

Dấu nhắc shell thường là $ cho người dùng thông thường

Ví dụ: `[hanv@viethanguyen ~]$`

Dấu nhắc shell thường là # cho người dùng root

Ví dụ: `[root@langocson ~]#`

Các shell chỉ khác nhau về giao diện nhưng các lệnh thì vẫn không thay đổi 

### Cấu trúc lệnh và cú pháp

Lệnh để thực hiện gọi một chương trình, ứng dụng, script hoặc các tiện ích.

Cú pháp một lệnh:

`command [options][expression][filename]`

Trong đó: 
* `command` là tên của lệnh hoặc tiện ích sẽ được sử dụng
* `options` là các tùy chọn, ảnh hưởng đến kết quả thực thi của  lệnh
* `expression` là các biểu thức đi kèm để thực thi
* `filename` là tên file muốn lệnh thức thi

Ví dụ: `ls -la /bin`

Linux phân biệt chữ hoa và chữ thường trong lệnh, lệnh phải viết đúng chính tả

### Các trang hỗ trợ Help và MAN page

Để xem cái thông tin về lệnh ta sử dụng 3 cách sau, mỗi lệnh sẽ phù hợp với một cách nên nếu không dùng được cách này ta dùng cách khác.

* `--help` Ví dụ: `ls --help`
* `info` Ví dụ: `info ls`
* `MAN` Ví dụ: `MAN ls`

### Các lệnh làm việc với thu mục

Các thư mục quan trọng trong hệ thống cây linux:

**/bin**

Chứa các lệnh có thể được sử dụng bởi người dùng có nguyền quản lý cũng như người dùng thông thường.

Lưu ý: không được có thư mục con trong `/bin`

**/sbin**

Chứa các lệnh tiện ích của người quản lý hệ thống

Các tiện ích (file nhị phân) này cần thiết cho quá trình khởi động, khôi phục, sửa chữa ha phục hồi lại hệ thống.

Ta còn có thể sử dụng các tiện ích tương tự trong các thư mục `/usr/sbin` và `/usr/local/bin`

**/dev**

Nơi chứa các file thiết bị hoặc các file đặc biệt

* Có thể là một thiết bị ở cứng IDE: `/dev/hda` `/dev/hdb`
* Có thể là một thiết bị ổ cứng SCSI: `/dev/sda` `/ev/sdb`
* Có thể là thiết bị âm thanh: `/dev/audio` `/dev/dsp`
* Có thể là một thiết bị terminal: `/dev/tty0` `/dev/tty1`
* Có thể là một cổng serial: `/dev/ttySO` cho `COM 1`, `/dev/ttyS1` cho `COM2`
* Có thể là đĩa mềm: `/dev/fd*`
* Có thể là một cổng parallel: `/dev/lp0` `/dev/lp1`

**/home**

Thư mục chứa các file cá nhân của người dung thông thường trên hệ thống

Các cấu hình trên liên quan đến thư mục home có thê là khác nhau trên các hệ thống khác nhau do đó không nên để các chương trình thực thi trong thư mực này.

**/boot**

Thư mục chứa tất cả cái file cần thiết cho quá trình khởi động

**/etc**

Thư mực chứa các file cấu hình cần thiết cho hệ thống:

* File cấu hình là các file chứa các thông tin được sử dụng để điều khiển hoạt động của một chương trình
* File cấu hình là các file tĩnh

Các file cấu hình về mật khẩu người dùng, boot, device, mạng và các cầu hình khác nằm ở đây

Không nên đặt file nhị phân và thư mực này.

**/lib**

Thư mục này chứa các mã của các thư viện chia sẻ cần thiết cho thiết bị khởi động hệ thống và chạy các lện trên hệ thống root

Các thư mục thư viện có thể bao gồm các thư viện liên kết tĩnh hoặc chia sẻ (Ví dụ /usr/lib)

**/usr**

Là một thư mục lớn chứa một cấu trúc tương tự /

Đa phần hệ thống linux nằm trong thư mục /usr

**/var**

Thư mục chứa các file dữ liệu là biến của các chương trình chạy: bao gồm spool, các file quản lý và file nhật ký, các file tạm

Nên đặt /var ra một phân vùng độc lập trong quá trình cài đặt

**/tmp**

Là nơi chứa các file tạm trong quá trình người dùng làm việc

Bất cứ người dùng nào đều có thể đọc và ghi trong thư mực /tmp nhưng không thể truy cập đến các file khác nhau trong thư mục này

Đa số các bản phân phối sẽ dọn dẹp thư mục /tmp trong quá trình khởi động

### Các lệnh làm việc với thư mục

Để tham chiếu tới một thư mục ta sử dụng hai dạng đường dẫn: tuyệt đối và tương đối

Đường dẫn tuyệt đối tham chiếu tới đường dẫn đầy đủ của một thư mục bắt đầu từ thu mực root

Ví dụ: `/home/jsmith/files/documents`

Đường dẫn tương đối tham chiếu tới đường dẫn tắt của một thư ục trong ngữ cảnh của thư mực hiện tại.

Ví dụ: `cd documents` trong khi documents nằm trong /home/jsmith/files

Một số lệnh thông dụng để làm việc với thư mục:

* `pwd` - hiển thị đường dẫn của thư mục hiện tại mà người dùng đang làm việc
* `cd` - chuyển đến một thư mục khác
* `cd ..` - lùi lại 1 thư mục
* `ls` - liệt kê nội dung của thư mục

<a name="2"></a>
## 2.Quản lý file

### Quy cách đặt tên file
Tên file trong Linux bao gồm mọi ký tự trừ:

* dấu /
* ký tự null
* Dấu cách không bị cấm khi đặt tên file nhưng hạn chế sử dụng

Thông thường tên file gồm:

* chữ cái ( thường ở dạng viết thường )
* gạch chân
* dấu gạch nối
* dấu chấm (phân cách phần)

Rất ít tên file ở dạng chữ hoa, nếu có thường là các file văn bản đi kèm. Ví du: `README, INSTALL, NEWS, vv...`

Tên file có thể bắt đầu bằng số

Phần mở rộng là không bắt buộc

File ẩn là file được bắt đầu bằng dấu . (trên thực tế thì không hoàn toàn ẩn)

### Dạng file

Để xác định dạng của file ta dùng lệnh `file tên file`

### Cơ bản về quản lý file

1. Có thể tạo được bởi lệnh `touch`. Lưu ý: nếu file chưa có sẽ tạo file mới, file có rồi touch sẽ thay đổi lại nhãn thời gian trên file

2. Tạo thư mục ta dùng lệnh `mkdir`

Để tạo nhiều thư mục trong 1 thư mục, ta thêm tham số -p. 

Ví dụ: `mkdir -p folder folder/folder1 folder/folder2`

Nó sẽ tạo ra hai thư mục folder1 và folder2 trong thư mục folder

![mkdir](http://i.imgur.com/EpiuBqL.png)

3. Sao chép file ta dùng lệnh `cp tên file đích đến`

4. Để di chuyển file ta dùng lệnh `mv tên file đích đến ` 

Có thể di chuyển được thư mục

Sẽ hỏi xác nhận trong trường hợp sẽ ghi đè file cũ trừ khi tùy chọn -f được sử dụng

Có thể sử dụng để đặt lại tên file

Ví dụ: ta đổi tên file `README.md` thành `README2.md`, ta dùng lệnh `mv README.md README2.md`

![mv](http://i.imgur.com/GTJzrlr.png)

5. Để xóa file ta dung lệnh `rm tên file`

Xóa nhiều file có ký tự chung trong tên file, ví dụ ta có nhiều file textt, text1, text2,..

Để xóa các file đó ta dùng lệnh `rm text*`

Để xóa hết nội dung của một folder, ta dùng lệnh `rm -r tên folder`

### Hard và Symbolic links

Link cho phép tạo ra các đường dẫn tắt tới một đối tượng trên hệ thống file của Linux

Có hai dạng link chính đó là: symbolic(soft) link và hard link

Hai dạng link cơ bản được phân việt với nhau dựa vào cách thức sử dụng inode để tham chiếu tới đối tượng được link tới.

Các đường link có thể tạo ra bằng lệnh `ln`

**Inode**

Inode(256 buyte): lưu thông tin về file trên hệ thống file của linux

Các thông tin:

* Loại file và quyền truy cập
* Chủ sở hữu
* Kích thước file và số lượng hard link trở đến
* Nhân thời gian
* Vị trí lưu nội dung file trên hệ thống vật lý

Dùng lệnh `ls -i` để xem thông tin về inode. Ví dụ:

`ls -i /usr/local`

![ls -i](http://i.imgur.com/2xICEgW.png)

**Symbolic link**

Nó tương tự như khái niệm shortcut trên Windows

Soft link không sử dụng inode entry cho việc tạo link mà chỉ tham chiếu bằng tên

Soft link không được dùng để tránh file đối tượng trỏ đến bị xóa, khi file đối tượng bị xóa soft link là không có giá trị.

Soft link có thể tham chiếu tới thu mục và file

Tạo ra bằng lệnh `ln -s tên file(hoặc đường dẫn) tên softlink`

**Hard links**

Hard links là các liên kết trỏ tới cùng một nội dung vật lý ( nội dung file ) với giá trị inode giống nhau

Nội dung vật lý này sẽ tồn tại trên hệ thống cho tới khi hard link cuối cùng bị xóa bỏ.

Hard links chỉ tham chiếu tới file mà không sử dụng được với thu mực

Hard link tạo bằng lệnh `ln tên file(hoặc đường dẫn) tên hartlink`

### Tìm kiếm file

1. Lệnh `locate` 

Locate là công cụ tìm kiếm có tốc độ làm việc nhanh

Cơ sở dữ liệu về hệ thống các file được cập nhật thông qua việc sử dụng lệnh `slocate -u` hoặc `updatedb`

Không hiển thị các kết quả mà người thực hiện việc tìm kiếm không có quyền truy cập

Cú pháp:

`locate tên file`

`locate -i chuỗi ` : tìm kiếm các file có chuỗi đó trong tên

2. Lệnh `find`

Công cụ tìm kiếm chính xác nhất, tuy nhiên tốn nhiều thời gian cho việc xử lý.

Đi kèm với nhiều tùy chọn cho phép điều khiển để tìm kiếm được chính xác đối tượng muốn tìm.

Có thể tìm kiếm file dựa trên các đường dẫn cụ thể, tên người dùng, nhóm sở hữu...

Một số tùy chọn:

* `-type` : `d` tìm thư mục, `f` tìm kiếm file thông thường, `s` tìm socket
* `-user` : tìm user chủ sở hữu file
* `-size` :  tìm kích thước 
* `-perm` : tìm theo quyền
* `-name` :  tìm tên file không phân biệt hoa thường
* `-iname` : tìm tên có phân biệt hoa thường

Ví dụ: ta tìm những file nằm trong thư mục gốc có đuôi là `.conf`

Ta dùng lệnh : `find / -type f -name '*.conf'`

Ví duh: ta tìm kiếm những file nằm trong thư mục gốc có đuôi là `.conf` có `user` là `root`

Ta dùng lệnh : `find / -type f -name '*.conf' -user root`

Ngoài ra còn một số công cụ khác

`which` : kiểm tra một chương trình có trong thư mục được chỉ ra bởi biến $PATH hay không.

`whereis` : tìm kiếm các thông tin có liên quan đến vị trí của chương trình nhập vào
<a name="3"></a>
## 3.Xử lý văn bản

### Xem nội dung văn bản

File văn bản có thể đọc được nội dung thông qua việc sử dụng các lệnh 'cat','more' hoặc 'less'.

Cú pháp: `$ cat [more/less] tên file`

Lệnh `cat` sẽ gửi toàn bộ văn bản ra ngoài màn hình. Tuy nhiên, nếu nội dung có nhiều trang thì nó chỉ hiện ra phần cuối cùng của file.

Lệnh `more` giúp ta khắc phục nhược điểm trên. Cú pháp: `more tên file`

Ta dùng phím space để xuống từng trang và phím enter để xuống từ dòng. Tuy nhiên lệnh `more` ko thể quay lại dòng vừa xem.

Để khắc phục nhược điểm này, ta sử dụng lệnh `less`. Tương tự như lệnh `more` nhưng `less` có thể dụng phím điều hướng để di chuyển từng dòng lên xuống. 

Để tìm kiếm một chuỗi ký tự khi dùng lệnh `less`, ta sử dụng dấu `/chuỗi ký tự` để tìm kiếm trong file văn bản mà ta đang xem bằng lệnh `less`. Ngoài ra ta có thể chỉnh sửa file văn bản ta ấn nút `v` để bắt đầu chỉnh sửa.

Tùy vào như cầu ta sử dụng lệnh nào.

### Xử lý luồng dữ liệu văn bản

Luồng dữ liệu có thể được định hướng tới hoặc từ một file.

STDIN có thể được định hướng từ đầu ra của một file thành đầu vào của một chương trình

STDOUT và STDERR có thể được gửi tới một file thay vì gửi tới console hoặc gửi đi như là đầu vào của một chương trình.

Biểu tượng định hướng:

+ `<` (định hướng đầu vào)
+ `>` (định hướng stdout và stderr tới một file)

Ví dụ: `$ less oldfile > newfile`

'>' sử dụng để định hướng stdout là mặc định, '2>' sủ dụng định hướng stderr.

Có thể định hướng tới một file riêng biệt hoặc vừa tới file và vừa ra màn hình.

Có thể định hướng tới /dev/null để loại bỏ đi kết quả.

'>' gửi kết quả tới một file và khi đè lên nếu file đó tồn tại.

'>>' thêm stdout hoặc stderr vào nội dung đã có sẵn

Pipe chuyển kết quả đầu ra của một chương trình hoặc một file thành đầu vào của một chương trình khác.

Ký tự '|'

Ví dụ: `ls -la | sort` . Đầu ra của lệnh `ls` sẽ được chuyển vào trong file `sort`.

Nếu ta gõ 1 lệnh sai thì hệ thống báo lỗi, đây là stderr, nếu ta muốn chuyển thông báo lỗi đó vào trong 1 file.

Ví dụ ta gõ lệnh `d` và có lỗi. Để đưa thông báo lỗi này vào file `error` thì ta làm như sau: `d 2> error`

Ví dụ về Pipe, ta đọc file `error` rồi dùng lệnh `sort` để sắp xếp lại và đưa kết quả vào file `sortedfile`.

`more error | sort > sortedfile`

### Tìm kiếm nội dung trong văn bản

Lệnh `grep` cho phép tìm kiếm một chuỗi trong 1 file

Cú pháp: `grep nội dung tên file`

Ví dụ: `grep class info.php`

Hai dạng thường dùng  trong việc tìm kiếm nâng cao là: 'egrep' và 'fgrep'`

Regular expression cho phép tìm kiếm các nội dung văn bản mà không cần phải biết chính xác chuỗi ký tự muốn tìm kiếm. 

Sử dụng một số ký tự đặc biệt thay thế cho một hoặc vài ký tự không rõ.

Ký tự `*` đại diện cho một hoặc vài ký tự. Ví dụ: `re*` mọi chuỗi có độ dài bất kỳ bắt đầu với cụm ký tự re.

Ký tự `.` đại diện cho bất cứ một ký tự đơn nào. Ví dụ `r.d` một chuỗi có độ dài bằng 3, bắt đầu bằng chữ r và kết thúc bằng chữ d.

### Một số tiện ích khác

Lệnh `sort` in ra nội dung của một fiile theo thứ tự sắp xếp theo trình tự chữ cái. Ta thêm vào tham số -r để sắp xếp ngược lại.

Lệnh `uniq` lấy một file có nội dung đã được sắp xếp theo trình tự chữ cái hoặc một luồng dữ liệu, loại bỏ các dòng trùng nhau và hiện ra màn hình.

Lệnh `wc` đếm số dòng, số từ và số byte trong đầu ra nội dung của một file hoặc một luồng dữ liệu.

Lệnh `head` hiện thi nội dung mười dòng đầu tiên của một file hoặc 1 lường dũ liệu.

Lệnh `tail` hiện ra nội dung cuối cùng của một file hoặc một luồng dữ liệu.

Lệnh `tac` giống như lệnh `cat` nhưng hiển thị ngược lại văn bản.

Lệnh `cut` sử dụng để lấy ra và hiển thị một trường trong luồng kết quả có được.

Lệnh `nl` sử dụng để đánh số các dòng.

Lệnh `echo` hiện thị ra nội dung của ra màn hình hoặc có thể định hướng vào một file.

Lệnh `tee` cho phép vừa in vào một file vừa in ra màn hình.
<a name="4"></a>
## 4.Chỉnh sửa văn bản với lệnh "vi"

### Tổng quan về vi - Chế độ làm việc và cách thức thao tác

Để mở một file sau đó nhảy đến một chuỗi có trong file

`vi + chuỗi cần nhảy đến tên file`

Để mở và nhảy tới một dòng cụ thể

`vi +10 tên file`

Chế độ lệnh: thực hiện việc xem xét và làm việc với file ( lưu file, tìm kiếm, thoát )

Chế độ chèn: chỉnh sửa nội dung

### Chèn ký tự 

Các phím để chèn:

* `i` - di chuyển tới vị trí con trỏ hiện tại và chèn ký tự vào văn bản bắt đầu từ điểm đó.
* `o` - bắt đầu một dòng mới ngay dưới dòng hiện tại
* `O` - bắt đầu một dòng mới ngày trên dòng hiện tại

### Chỉnh sửa chuỗi ký tự 

Các tổ hợp lệnh để thay đổi một ký tự, một dòng, một câu, một từ: 

* `cw` - thay đổi một từ đơn tại vị trí con trỏ hiện tại
* `c$` - thay đổi dòng hiện tại
* `r` - thay đổi ký tự dưới con trỏ
* `R` - thay thế chuỗi văn bản trên cùng một dòng cho tới khi bấm ESC

Các tổ hợp lệnh để sao chép và dán

* `yw` - sao chép một từ. Ví dụ: 2yw sẽ sao chép hai từ tình từ vị trí con trỏ.
* `yy` - để sao chép một dong. Ví dụ: 2yy sẽ sao chép hai dòng tình từ vị trí con trỏ
* `p` - dán sang bên phải con trỏ
* `P` - dán sang bên trái con trỏ

### Tìm kiếm chuỗi ký tự 

Tìm kiếm tiến là tìm kiếm từ vị trị con trỏ sang bên phải

Cú pháp: `/chuỗi cần tìm kiếm`

Tìm kiếm lùi là tìm kiếm từ vị trí con trỏ sang bên trái

Cú pháp: `?chuỗi cần tìm kiếm`

Nút n để di chuyển đến kết quả tiếp theo và Shift + n sẽ di chuyển đến kết quả phía trên.

Tìm kiếm và thay thế 

Cú pháp: `:s/chuỗi cần thay/chuỗi thay vào` thay thế trong dòng hiện tại

Còn `:%s/chuỗi cần thay/chuỗi thay vào ` thay thế trong toàn bộ văn bản.

### Thiết lập các tùy chọn

Sử dụng `set` để bật/tắt các tùy chọn
* `:set number` - hiện sô dòng
* `:set nonumber` - tắt hiện số dòng
* `:set all` - xem mọi tùy chọn có thể thiết lập 

Trong trường hợp không chỉ sửa gì file và muốn thoát `:q`

Trong trường hợp đã chỉnh sửa và muốn thoát mà ko ghi lại gì `:q!`

Với việc ghi lại kết quả - có thể ghi lại và thoát, hoặc ghi lại và tiếp tục chỉnh sửa.

* Để ghi lại và tiếp tục làm việc `:w`
* Để ghi lại và thoát ra `:wq`
* Để ghi lại bằng mọi giá `:wq!`

Lưu lại và thoát `:x`
<a name="5"></a>
## 5.Cấu hình thiết bị phần cứng

### Cấu hình các thiết bị mạng

Hai thiết bị chí thường được sử dụng để truyền thông dữ liệu khi máy tính hoạt động trong một hệ thống mạng: 

* Card mạng
* Moderns

#### Card mạng

Có thể xem các thông tin cấu hình lăm việc của card mạng thông qua lệnh `ifconfig`. Các thông số này bao gồm: 

* Địa chỉ IP
* Subnetmark
* Địa chỉ MAC

Card mạng đầu tiên trong hệ thống được gán tên /dev/eth0

Card mạng không giây được cấu hình thông qua lệnh `iwconfig`

Có ba cách để thay đổi thông số hoạt động của card mạng hệ thống:

* Lệnh `ifconfig` để gán tĩnh cho một session làm việc
* Lệnh `dhclient` để gán động cho một session làm việc
* Thay đổi các file cấu hình tương ứng

1. Cú pháp lệnh `ifconfig` như sau:

`ifconfig <interface> <ip_address> netmark <subnetmark> [up/down]`

Ví dụ: `ifconfig eth0 10.0.0.4 netmark 255.0.0.0 up`

Thống số gán vào chỉ có giá trị trong session làm việc hiện tại và sẽ mất đi khi hệ thống khởi động lại

2. Gán động thông sô hoạt động cho card mạng dùng lệnh `dhclient`

Cú pháp: `dhclient`

Sử dụng được khi trong hệ thống có mặt dịch vụ dhcp client và trong mạng có một dhcp server.

Thống số gán vào chỉ có giá trị trong session làm việc hiện tại và sẽ mất đi khi hệ thống khởi động lại.

3. Có thể cấu hình cố định các thông số làm việc cho card mạng thông qua việc can thiệp vào file `/etc/sysconfig/network-script/ifcfg-eth*`

Ví dụ gán tĩnh các thông số hoạt động cho eth0

```
/etc/sysconfig/network-script/ifcfg-eth0
DEVICE="eth0"
IPADDR="192.168.10.100"
NETMARK="255.255.255.0"\
ONBOOT="yes"
BOOTPROTO="static"
```

Các thông số có giá trị cho mọi phiên làm việc
<a name="6"></a>
## 6.Quản lý phần mềm và gói phần mềm

### Cài đặt phần mềm từ mã nguồn

Đa số các phần mềm trên hệ điều hành Linux đều được cung cấp kèm cả mã nguồn và các tài liệu cần thiết để sử dụng.

Mã nguồn có thể được biên dịch và cài đặt trở thành các ứng dụng trong hệ thống.

Mã nguồn thường đi kèm ở dạng file nén, hay gọi là tarbal với phần đuôi file là `.tar` hoặc `.tar.gz`

Các file nén này thường bao gồm: mã nguồn của ứng dụng, các script cấu hình, makefile và các scripts để cài đặt.

Script cấu hình là các file chứa các dòng lệnh kiểm tra hệ thộng nhằm thu thập các thông tin cần thiết để cầu hình cho makefiles

Makefiles các file chứa các thông số cài đặt, các biến và các lệnh cài đặt, được dùng để thực hiện việc biên dịch cũng như cài đặt ứng dụng.

Các lệnh make và make install thường được sử dụng để biên dịch mã nguồn cũng như cài đặt ứng dụng.

Các phần mềm có thể sử dụng các thư viện chia sẻ - thường là các file thư viện, các file header có trong: 

* `/lib` : thư mục thư viện chia sẻ chính
* `/usr/lib` : thư mục các file thư viện bổ sung
* `/usr/X11R6/lib` : thư mục chứa các file thư viện thành phần của X-Windoes

### Hệ thống quản lý gói phần mềm của RedHat (RPM)

Gói phần mềm là các bộ cài đặt ứng dụng

RPM sử dụng lệnh `rpm` để thực hiện việc quản lý các gói phần mềm, lệnh này đi kèm với rất nhiều các tùy chọn khác nhau.

Các gói phần mềm có thể có phần đuôi là .rpm hoặc src.rpm tùy thuộc vào gói

Các gói .rpm có thể cung cấp dưới dạng các gói mã nguồn hoặc các gói thực thi.

Các gói này chứa trong đó các file, các lệnh, các script thực thi cần thiết cho việc cài đặt ứng dụng

Sử dụng lệnh `rpm -q tên gói ` để thu thập thông tin về các gói phần mềm đã được cài trong hệ thống

Cơ sở dữ liệu RPM có chứa các thông tin về các gói phần mềm đã được cài đặt trong hệ thống.

Thường cơ sở dữ liệu này được lưu tại thư mục /var/lib/rpm

CSDL này có thể bị hỏng sau nhiều lần cài đặt và gỡ bỏ, để có thể sửa chữa ta dùng lệnh `rpm -rebuilddb` 

Lệnh rpm được sử dụng để cài đặt, nâng cấp và gỡ bỏ các gói phần mềm

Có thể truy vấn CSDL để lấy thông tin về các gói

Có thể kiểm tra chữ ký đi kèm với các gói bằng lệnh: `rpm -K tên gói`

### Hệ thống quản lý gói phần mềm của Debian (dpkg)

Các gói .deb có chứa danh sách các file, các file nhị phân và các file điều khiển

Sử dụng lệnh `dpkg` để thực hiện các tác vụ cài đặt lệnh đi kèm với rất nhiều tùy chọn khác nhau.

CSDL về dpkg thường đặt tại thư mục /var/lib/dpkg

Có 3 file chính trong thư mục này cần chú ý:

* status
* available
* diversion

`apt-get` là hệ lệnh mới cho phép thực thi việc cài đặt các gói .deb từ các nguồn gói.

`alien` là tiện ích cho phép chuyển đổi các định dạng gói không tuân theo chuẩn của debian sang định dạng gói của debian.

>------------------------
