<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum() {
            $a = 7;
            $b = 7;
            return $a + $b; 
        }

        $result = sum();
        
        echo "Tổng là: " . $result;
    ?>
</body>
</html>
