<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Even and Odd Numbers</title>
</head>
<body>
    <?php
        $sumEven = 0;
        $sumOdd = 0;
        $number = 0; 

        while ($number <= 5) {
            if ($number % 2 == 0) {
                $sumEven += $number; 
            } else {
                $sumOdd += $number; 
            }
            $number++; 
        }

        echo "Tổng số chẵn là: " . $sumEven . "<br>";
        echo "Tổng số lẻ là: " . $sumOdd;
    ?>
</body>
</html>
