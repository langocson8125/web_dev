<!DOCTYPE html>
<html>
<head>
	<title>Bài tập PHP cơ bản</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<?php
	//code xử lý thuật toán PHP
	$dapan='';
	if (isset($_POST['solve'])) { //kiểm tra xem là có biến solve hay k
		$a = isset($_POST['a']) ? (float)trim($_POST['a']) : ''; //trim là xóa hết khoảng trắng trong chuỗi a
		$b = isset($_POST['b']) ? (float)trim($_POST['b']) : ''; //trim là xóa hết khoảng trắng trong chuỗi b
		if ($a == 0) {  			//(float) buộc biến a và b là kiểu float
			$dapan = 'Bạn phải nhập a khác 0';
		}
		elseif ($a == '') {
			$dapan = 'Bạn chưa nhập giá trị của a';
		}
		elseif ($b == '') {
			$dapan = 'Bạn chưa nhập giá trị của b';
		}
		else
			$dapan = -$b / $a;
	}
	?>
<h2>Bài 1:Giải phương trình bậc 1</h2>
<form method="post" action="">
	<input type="text" style="width: 20px" name="a" value="">x + 
	<input type="text" style="width: 20px" name="b" value=""> = 0
	<br/>
	<input type="submit" style="width: 60px" name="solve" value="Solve">
</form>
	<?php
	//code in ra kết quả của PHP
	echo 'Kết quả: '.$dapan;
	?>
</body>
</html>