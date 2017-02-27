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
		$c = isset($_POST['c']) ? (float)trim($_POST['c']) : ''; // câu điều kiện 3 ngôi
		$delta = pow($b,2)-4*$a*$c;
		if ($a == 0) $dapan = 'Bạn phải nhập a khác 0'; 			//(float) buộc biến a và b là kiểu float
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

<h2>Bài 2:Giải phương trình bậc 2</h2>
<form method="post" action="">
	<input type="text" style="width: 20px" name="a" value="a">x<sup>2</sup> + 
	<input type="text" style="width: 20px" name="b" value="b">x +
	<input type="text" style="width: 20px" name="c" value="c"> = 0
	<br/>
	<input type="submit" style="width: 60px" name="solve" value="Solve">
</form>
	<?php
	//code in ra kết quả của PHP
	echo 'Kết quả: '.$dapan;
	?>
</body>
</html>