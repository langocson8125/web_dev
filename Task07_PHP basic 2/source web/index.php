<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Lã Ngọc Sơn ATTT</title>
	<meta charset="utf-8">
	<meta name="author" content="Lã Ngọc Sơn">
	<meta property="fb:app_id" content="1215498005154491" />
<meta property="fb:admins" content="100015278109502"/>
	<link rel="stylesheet" type="text/css" href="xxx.css">
</head>
<body>
<div id="small-sb">
<ul>
	<li><a href="https://www.facebook.com/LaNgocSonWP" title="Facebook" target="_blank">Facebook</a></li>
	<li><a href="https://plus.google.com/u/0/103788319635749817739" title="Google+" target="_blank">Google+</a></li>
</ul>
</div>
<div id="big-sb">
	<ul id="sb1">
		<li><a href="http://langocson.16mb.com" class="logo"></a></li>
		<li><a href="https://vnhacker.blogspot.com/2012/05/lam-toan-thong-tin-thi-hoc-gi.html" title="Làm ATTT thì học gì?" target="_blank">ATTT</a></li>
		<li><a href="http://congdonglinux.vn/forum/showthread.php?2692-H%E1%BB%8Dc-Network-Pentesting-v%C3%A0-WebApp-Pentesting-th%C3%AC-c%E1%BA%A7n-chu%E1%BA%A9n-b%E1%BB%8B-nh%E1%BB%AFng-ki%E1%BA%BFn-th%E1%BB%A9c-g%C3%AC" title="Học WebApp Pentesting" target="_blank">WEB PENTEST</a></li>
		<li><a href="https://www.google.com.vn/search?q=go%C3%B4&oq=go%C3%B4&aqs=chrome..69i57j0l5.671j0j4&sourceid=chrome&ie=UTF-8#q=l%C3%A3+ng%E1%BB%8Dc+s%C6%A1n">ABOUT</a></li>
		</ul>
		
</div>

<div style="background-color: #540320">
<form action="search.php" method="get">
<input type="text" name="search" style="width: 300px" value="Tìm theo tên thành viên đã đăng ký"><input type="submit" name="ok" value="Search" >
</form>
</div>
	<div id="login">
		<form action="dang-nhap.php?do=login" id="form" method="post" name="login">
			Tài khoản: <input type="text" name="txtUsername" placeholder="Tài khoản">
			Mật khẩu: <input type="password" name="txtPassword" placeholder="Mật khẩu">
			<input type="submit" name="login" value="Đăng nhập" id="ok">
			<br/>
			<a href='dang-ky.php' style="color: white" title='Đăng ký'>Đăng ký</a>
		</form>
	</div>
<div id="info">
	<h1>Lã Ngọc Sơn</h1>
		<br/>
		<hr>
		<br/>
	<div>
			<?php
		//code xử lý thuật toán PHP
			$dapan='';
				if (isset($_POST['solve'])) { //kiểm tra xem là có biến solve hay k
				$x = isset($_POST['x']) ? (float)trim($_POST['x']) : ''; //trim là xóa hết khoảng trắng trong chuỗi a
				$y = isset($_POST['y']) ? (float)trim($_POST['y']) : ''; //trim là xóa hết khoảng trắng trong chuỗi b
				if ($x == 0) {  			//(float) buộc biến a và b là kiểu float
				$dapan = 'Bạn phải nhập xa khác 0';
				}
				elseif ($x == '') {
				$dapan = 'Bạn chưa nhập giá trị của a';
				}
				elseif ($y == '') {
				$dapan = 'Bạn chưa nhập giá trị của b';
				}
				else
				$dapan = -$y / $x;
				}
			?>
		<p>Gỉai phương trình bậc 1</p>
		<form method="post" action="">
			<input type="text" style="width: 30px" name="x" value="">x + 
			<input type="text" style="width: 30px" name="y" value=""> = 0
			<br/>
			<input type="submit" style="width: 60px" name="solve" value="Solve">
		</form>
		<?php
		echo 'Kết quả: x='.$dapan;
		?>
	</div>
	<hr><br/>
	<div>
		<?php
	//code xử lý thuật toán PHP
			$dapan='';
			if (isset($_POST['solve'])) { //kiểm tra xem là có biến solve hay k
			$a = isset($_POST['a']) ? (float)trim($_POST['a']) : ''; //trim là xóa hết khoảng trắng trong chuỗi a
			$b = isset($_POST['b']) ? (float)trim($_POST['b']) : ''; //trim là xóa hết khoảng trắng trong chuỗi b
			$c = isset($_POST['c']) ? (float)trim($_POST['c']) : ''; // câu điều kiện 3 ngôi
			$delta = pow($b,2)-4*$a*$c;

			if ($a == 0) $dapan = 'Bạn phải nhập a khác 0'; 
						//(float) buộc biến a và b là kiểu float
			elseif ($a == '') $dapan = 'Bạn chưa nhập giá trị của a';

			elseif ($b == '') $dapan = 'Bạn chưa nhập giá trị của b';

			elseif ($delta < 0) $dapan = 'Phương trình vô nghiệm';

			elseif ($delta == 0) $dapan = 'Phương trình có nghiệm kép: ';

			else {
			$dapan = 'Phương trình có 2 nghiệm phân biệt: <br/>x<sub>1</sub>='.(-$b+sqrt($delta))/(2*$a).'<br/>';
			$dapan .= 'x<sub>2</sub>='.(-$b-sqrt($delta))/(2*$a);
			}
		}	
		?>

<p>Bài 2:Giải phương trình bậc 2</p>
<form method="post" action="">
	<input type="text" style="width: 30px" name="a" value="">x<sup>2</sup> + 
	<input type="text" style="width: 30px" name="b" value="">x +
	<input type="text" style="width: 30px" name="c" value=""> = 0
	<br/>
	<input type="submit" style="width: 60px" name="solve" value="Solve">
</form>
	<?php
	//code in ra kết quả của PHP
	echo 'Kết quả: '.$dapan;
	?>
	</div>
	<hr><br/>
         
	<p>Lã Ngọc Sơn (sinh ngày 14 tháng 02, 1998) là một doanh nhân người Mỹ, nhà từ thiện, tác giả và chủ tịch tập đoàn Microsoft, hãng phần mềm khổng lồ mà anh cùng với Paul Allen đã sáng lập ra. Anh luôn có mặt trong danh sách những người giàu nhất trên thế giới và là người giàu nhất thế giới từ 1995 tới 2014, ngoại trừ tháng 3/2013, 3/2012, tháng 3/2011 (hạng 2) và 2008 khi anh chỉ xếp thứ ba. Tháng 5 năm 2013, Ngọc Sơn đã giành lại ngôi vị người giàu nhất thế giới. Gần đây, anh cũng là người giàu nhất thế giới với tài sản 77,8 tỷ đô la Mỹ.</p>
		<br/>
	<p>Sơn là một trong những doanh nhân nổi tiếng về cuộc cách mạng máy tính cá nhân. Mặc dù nhiều người ngưỡng mộ anh, nhiều đối thủ cạnh tranh đã chỉ trích những chiến thuật trong kinh doanh của anh, mà họ coi là cạnh tranh không lành mạnh hay độc quyền và công ty của anh đã phải chịu một số vụ kiện tụng. Trong giai đoạn gần cuối của sự nghiệp, Sơn đã theo đuổi một số nỗ lực từ thiện, quyên góp và ủng hộ một số tiền lớn cho các tổ chức từ thiện và nghiên cứu khoa học thông qua Quỹ Sơn đẹp zai, được thành lập năm 2000.</p>
	<br/>
	 <img id="img" src="http://i.imgur.com/FBFhDe2.jpg" title="Lã Ngọc Sơn">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1215498005154491";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://langocson.16mb.com" data-numposts="5" width="100%" data-colorscheme="light" data-version="v2.3"></div>
</div>

</body>
</html>
			