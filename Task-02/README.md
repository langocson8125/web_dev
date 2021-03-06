#Báo cáo Task 02 [Tìm hiểu về Git/Github]
>Nguồn tham khảo: [ThachPham-Share The Best](https://thachpham.com/series/git-co-ban)

>Người thực hiện: **Lã Ngọc Sơn**

>Cập nhật lần cuối: 20/1/2017
>------------------------

##Mục lục
>####[**I.Git là gì? Dùng để làm gì?**](#I)
>* [1.Git là gì?](#I.1)
>* [2.Git dùng để làm gì](#I.2)

>####[**II.Cài đặt Git trên máy tính**](#II)
>* [Cài Git trên Windows](#II.1)
>* [Cài Git trên Mac OS](#II.2)
>* [Cài Git vào Linux](#II.3)

>####[**III.Cách sử dụng Git trên cmd(terminal)**](#III)
>* [Cách tạo một Repository](#III.1)

>####[**IV.Sử dụng Git để commit/push file `README.md` lên Github**](#IV)
>
>####[**V.Tổng kết**](#V)
>----------------------

<a id="I"></a>
#I.Git là gì? Dùng để làm gì?<a id="I.1"></a>
##1.Git là gì?

![](http://i.imgur.com/BUNfAnC.png)

**Git** là tên gọi của một Hệ thống quản lý phiên bản phân tán (**Distributed Version Control System** – **DVCS**) là một trong những hệ thống quản lý phiên bản phân tán phổ biến nhất hiện nay. **DVCS** nghĩa là hệ thống giúp mỗi máy tính có thể lưu trữ nhiều phiên bản khác nhau của một mã nguồn được nhân bản (**clone**) từ một kho chứa mã nguồn (**repository**), mỗi thay đổi vào mã nguồn trên máy tính sẽ có thể ủy thác (**commit**) rồi đưa lên máy chủ nơi đặt kho chứa chính. Và một máy tính khác (nếu họ có quyền truy cập) cũng có thể clone lại mã nguồn từ kho chứa hoặc clone lại một tập hợp các thay đổi mới nhất trên máy tính kia. Trong Git, thư mục làm việc trên máy tính gọi là **Working Tree**. Đại loại là như vậy.

![](http://i.imgur.com/Y3qQcsa.png)

`Mô hình hoạt động của DVCS`

Ngoài ra, có một cách hiểu khác về **Git** đơn giản hơn đó là nó sẽ giúp bạn lưu lại các phiên bản của những lần thay đổi vào mã nguồn và có thể dễ dàng khôi phục lại dễ dàng mà không cần copy lại mã nguồn rồi cất vào đâu đó. Và một người khác có thể xem các thay đổi của bạn ở từng phiên bản,  họ cũng có thể đối chiếu các thay đổi của bạn rồi gộp phiên bản của bạn vào phiên bản của họ. Cuối cùng là tất cả có thể đưa các thay đổi vào mã nguồn của mình lên một kho chứa mã nguồn.
<a id="I.2"></a>
##2.Git dùng làm gì?
Hiểu theo cách đơn giản nhất là để lưu và share tài liệu nhằm phục vụ cho công việc và học tập
<a id="II"></a>
#II.Cài đặt Git trên máy tính<a id="II.1"></a>
##Cài Git vào Windows
Nếu bạn dùng Windows thì có thể tải file .exe cài đặt Git tại địa chỉ http://git-scm.com/download/win. Khi cài bạn có thể để nguyên tùy chọn mặc định mà không cần tùy chỉnh gì thêm nếu bạn chưa hiểu về nó.

Sau khi cài đặt Git vào Windows, bạn sẽ cần mở ứng dụng Git Bash lên để bắt đầu sử dụng các dòng lệnh của Git.
<a id="II.2"></a>
##Cài Git trên Mac OS
Đối với Mac, bạn có thể sử dụng file installer tải tại địa chỉ http://git-scm.com/download/mac để cài đặt.
<a id="II.3"></a>
##Cài Git vào Linux
Nếu bạn đang sử dụng hệ điều hành Ubuntu/Debian thì có thể sử dụng lệnh sau để cài Git.

`$ sudo apt-get install git`

Hoặc lệnh sau để cài trên CentOS/Fedora/RHEL.

`$ yum install git`

###Thiết lập chứng thực cá nhân
Sau khi cài Git xong, việc đầu tiên bạn nên làm là khai báo tên và địa chỉ email vào trong file cấu hình của Git trên máy. Để làm điều này bạn sẽ cần sử dụng hai lệnh sau đây để thiết lập tên và email.

```sh
$ git config --global user.name "La Ngoc Son"
$ git config --global user.email "langocson8125@gmail.com"
```

Sau khi thiết lập xong, bạn có thể kiểm tra thông tin chứng thực trên user của bạn bằng cách xem tập tin `~/.gitconfig` (nhắc lại rằng dấu `~` nghĩa là thư mục gốc của user).

```sh
$ cat ~/.gitconfig
[user]
 name = La Ngoc Son
 email = langocson8125@gmail.com
```
<a id="III"></a>
#III.Cách sử dụng Git trên cmd(terminal)<a id="III.1"></a>
##Cách tạo một Repository
**Repository** (kho chứa) nghĩa là nơi mà bạn sẽ lưu trữ mã nguồn và một người khác có thể sao chép (clone) lại mã nguồn đó nhằm làm việc. Repository có hai loại là **Local Repository (Kho chứa trên máy cá nhân) và Remote Repository (Kho chứa trên một máy chủ từ xa).**

##Tạo Local Repository
Trước hết, để tạo một **repository** thì bạn cần truy cập vào thư mục của mã nguồn với lệnh `cd`, sau đó sử dụng lệnh `git init` để khởi tạo repository trong thư mục đó. Ở ví dụ này, mình sẽ tạo tạo ra một thư mục mới để chứa code sau này và khởi tạo repository cho nó, mình sẽ dùng lệnh `git init tên_folder` để nó tự khởi tạo thư mục.

```sh
$ git init git_example
Initialized empty Git repository in /home/langocson/git_example/.git/
```

Ở đoạn trên, nó hiển thị dòng thông báo mình đã khởi tạo một kho **Git** trống tại đường dẫn như trên. **Lưu ý** rằng thư mục ẩn `.git/` là nơi nó sẽ chứa các thiết lập về Git cũng như lưu lại toàn bộ thông tin về kho chứa, **bạn không cần đụng chạm gì vào thư mục** `.git/` này.

Nếu kho chứa của bạn đã có sẵn mã nguồn thì bạn cần **phải đưa các tập tin về trạng thái Tracked** nhằm có thể làm việc được với Git. Để làm việc này, bạn sẽ cần sử dụng lệnh `git add tên_file`, có thể sử dụng dấu `*` để gom toàn bộ. Sau đó có thể sử dụng lệnh `git status` để xem danh sách các tập tin đã được tracked.

```sh
$ git add readme.txt
$ git status
On branch master
```

`Initial commit`

```sh
Changes to be committed:
 (use "git rm --cached <file>..." to unstage)
```

`new file: readme.txt`

Và sau khi tập tin đã được đưa vào trạng thái tracked và nếu một tập tin đã tracked thì nó phải được đưa vào lại Staging Area (giải thích ở bài sau) cũng bằng lệnh `git add` thì bạn mới có thể tiến hành ủy thác (**commit**) nhằm lưu lại bản chụp các thay đổi. Lệnh commit sẽ có cấu trúc `git commit -m "Lời nhắn"`, lúc này tất cả các tập đang trong trạng thái tracked (file mới) hoặc một tập tin đã được tracked nhưng có một sự thay đổi mới thì sẽ được commit.

```sh
$ git commit -m "First Commit"
[master (root-commit) 799db56] First Commit
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 readme.txt
```

Bây giờ thì bạn đã hoàn thành việc commit lần đầu tiên các tập tin mà bạn đã đưa vào kho, mình sẽ nói kỹ hơn về việc commit ở các bài sau. Tóm lại là tới đây bạn đã có một kho chứa mã nguồn Git trên máy của bạn.
<a id="IV"></a>
#IV.Sử dụng Git để commit/push file `README.md` lên Github
##Đầu tiền bạn hãy tạo một **repository** trên **Github**

Làm theo hướng dẫn từ ảnh bên dưới

![](http://i.imgur.com/Dh68P0E.png?1)

Bạn sẽ cần đặt tên cho kho chứa của bạn. Bạn có thể chọn loại kho chứa là Public (ai cũng có thể clone) và Private (chỉ có những người được cấp quyền mới có thể clone).

![](http://i.imgur.com/TPn8UGc.png?1)

Khi tạo xong nó sẽ dẫn bạn tới trang hướng dẫn làm việc với kho chứa vừa tạo. Và kho chứa của bạn bây giờ sẽ có địa chỉ là `https://github.com/$user-name/$repository`
ví dụ `https://github.com/langocson8125/up-github`

Việc của bạn bây giờ là hãy clone cái kho chứa này về máy của mình bằng lệnh `git clone địa_chỉ`.

```sh
$ git clone https://github.com/langocson8125/up-github
Cloning into 'up-github'...
warning: You appear to have cloned an empty repository.
Checking connectivity... done
```

##.Sử dụng Git để commit/push file README.md lên Github
Bây giờ hãy truy cập vào thư mục working tree (thư mục vừa clone repository về) và thử tạo ra một file tên là `README.md`, sau đó dùng lệnh git add để đưa file này vào Staging Area.
```sh
$ cd up-github
$ echo "#Lan dau lam chuyen ay" > README.md
$ git add README.md
$ git commit -m "Update README.md"
[master (root-commit) 3e90448] First commit on Github
 1 file changed, 1 insertion(+)
 create mode 100644 README.md
```

Tuy nhiên sau khi commit xong, tập tin đã được commit sẽ vẫn không thể xuất hiện trong kho chứa trên Github mà bạn phải làm thêm một việc nữa đó là dùng lệnh `git push` để đẩy các tập tin đã được commit lên Github. Lưu ý rằng bạn **sẽ cần nhập tài khoản và mật khẩu Github**.

`$ git push origin master`

```sh
Counting objects: 3, done.
Writing objects: 100% (3/3), 244 bytes | 0 bytes/s, done.
Total 3 (delta 0), reused 0 (delta 0)
To https://github.com/langocson8125/up-github
 * [new branch] master -> master
```

`origin` nghĩa là tên remote (xem ở bài sau) và `master` là tên branch, hai cái này mình sẽ giải thích kỹ hơn ở bài riêng của nó. Bây giờ bạn có thể kiểm tra kho chứa của bạn trên Github rồi đó.

![](http://i.imgur.com/sAzJgtk.png)
`Kết quả sau khi push mã nguồn đã được commit lên Github`

Có thể bạn sẽ thấy mỗi khi push lên Github thì nó hiển thị ra thông báo quá dài dòng, bạn có thể cho ẩn các thông báo đi mà chỉ hiển thị dòng khai báo username và password trên Github thì có thể thiết lập với lệnh này.

`git config --global push.default simple`

Tuy nhiên nếu bạn không thích bị hỏi mật khẩu nữa thì có thể sử dụng SSH với Github, mình sẽ nói cái này sau.
<a id="V"></a>
#V.Tổng kết
Ta có thể hiểu được Git là gì và cách cài đặt cũng như sử dụng Git trên máy tính

Đồng thời ta cũng có thể commit được 1 file lên Github 

Contact: https://www.facebook.com/langocson8125

Nickname:LNS
