<?php
      // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Bạn chưa nhập";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from users where fullname like '%$search%'";
 
                // Kết nối sql
                $connect = mysqli_connect("mysql.hostinger.vn", "u739990072_dtb", "khongbiet98", "member");
 
                // Thực thi câu truy vấn
                $sql = mysqli_query($connect,$query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysqli_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>Fullname: {$row['fullname']}</td>";
                            echo "<td>Birthday: {$row['birthday']}</td>";
                            echo "<td>Username: {$row['username']}</td>";
                            echo "<td>Email: {$row['email']}</td>";
                            echo "<td>Sex: {$row['sex']}</td>";
                            echo "<td>Address: {$row['address']}</td>";
                        echo '</tr>';
                        echo 'Click vào đây để <a href="logout.php">Logout</a>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   