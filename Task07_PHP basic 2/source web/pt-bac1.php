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