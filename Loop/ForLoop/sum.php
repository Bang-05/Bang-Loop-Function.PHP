<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .square {
            width: 100px; 
            height: 100px; 
            background-color: blue;
            display: inline-block; 
            margin: 5px; 
        }
    </style>
</head>
<body>
    <?php 
        $sumEven = 0;
        $sumOdd = 0;
        for ($i = 0; $i < 5; $i++) {
            if ($i % 2 == 0) {
                $sumEven += $i;
            } else {
                $sumOdd += $i;
            }
        } 
        echo "Tổng số chẵn là: " .$sumEven . "<br>"; 
        echo "Tổng số chẵn là: " .$sumOdd; 
    ?>
</body>
</html>
