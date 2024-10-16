<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Chẵn Lẻ</title>
</head>
    <style>
        input {
            margin-bottom: 10px;
        }
    </style>
<body>
    <form action="" method="POST">
        Nhập số: <input type="text" name="number"> <br>
        <input type="hidden" name="form_submitted" value="1">
        <input type="submit" value="Kiểm tra">
    </form>

    <?php
        function chanle($number) {
            if ($number % 2 == 0) {
                echo "<h3>$number là số chẵn.</h3>";
            } else {
                echo "<h3>$number là số lẻ.</h3>";
            }
        }
            $a = $_POST["number"];
            $kq = chanle($a)      
    ?>
</body>
</html>
