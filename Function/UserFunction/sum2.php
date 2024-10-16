<!-- Khai báo hàm gọi là: tham số -->
<!-- Khai báo hàm gọi là: tham trị -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập số tính tổng</title>
    <style>
        input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        Number 1: <input type="text" name="num1"> <br> 
        Number 2: <input type="text" name="num2"> <br> 
        <input type="hidden" name="form_submitted" value="1">
        <input type="submit" value="Tính tổng">
    </form>

    <?php
        function sum($hsa, $hsb) {
            return $hsa + $hsb; 
        }

        if (isset($_POST["form_submitted"])) {
            // Chuyển đổi các giá trị từ input thành số
            $a = (float)$_POST["num1"]; 
            $b = (float)$_POST["num2"]; 
            $kq = sum($a, $b);
            echo "<h3>Tổng của $a và $b là: $kq</h3>";
        }
    ?>
</body>
</html>
