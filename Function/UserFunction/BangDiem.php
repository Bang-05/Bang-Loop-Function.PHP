<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .container {
            background-color: pink;
            width: 40%;
            margin-left: 20%;
            margin-top: 20px;
            padding: 15px;
        }

        .container .item {
            display: flex;
        }
        h1 {
            text-align: center; 
        }

        p {
            margin-left: 50px;
        }
        input {
            width: 65%;
            height: 30px;
            margin-top: 5px;
            outline: none;
            border: none;
            background-color: white;
        }
        .year {
            margin-left: 0px;
        }
        
        select {
            width: 55px;
            height: 30px;
            margin-left: 40px;
            margin-top: 5px;
            border: 1px solid red;

        }
       
        .btn {
            text-align: center; 
        }
        
        button {
            padding: 8px;
            margin-bottom: 10px;
        }
      

        .text {
            margin-left: 80px;
        }

        .text #grade {
            font-size: 40px;
            color: red;
        }
    </style>
</head>
<body>
    <?php
        error_reporting(0); //bỏ qua mặc định lỗi

        function diemTrungBinh($semester1, $semester2, $year){
            $avg = 0;
            if($year == 1){
                $avg = ($semester1 + ($semester2*2))/3;

            }elseif($year == 2) {
                $avg = (($semester1*2) + ($semester2*3))/5;

            } else {
                $avg = (($semester1*3) + ($semester2*4))/7;

            }
            return $avg;

        }
        $se1 = $_POST['se1'];
        $se2 = $_POST['se2'];
        $year = $_POST['select'];
        $result = diemTrungBinh($se1, $se2, $year);
        $check = "";
        if ($result >= 9){
            $check = "HỌC SINH GIỎI";
        } elseif ($result >= 7 && $result < 9) {
            $check = "HỌC SINH KHÁ";

        } elseif ($result >= 5 && $result < 7){
            $check = "HỌC SINH TRUNG BÌNH";

        } else {
            $check = "HỌC SINH YẾU";    
        }
    ?>

    <div class="container">
        <form action="BangDiem.php" method="POST">
            
            <h1>BẢNG ĐIỂM CỦA EM</h1>
            <div class="item">
                <p>Semester1:</p>
                <input type="text" name="se1" style="margin-left: 4px;" value = "<?php echo $se1?>">
            </div>
            <div class="item">
                <p>Semester2:</p>
                <input type="text" name="se2" style="margin-left: 4px;" value = "<?php echo $se2?>">
            </div>
            <div class="item">
                <p>Year:</p>
                <select style="color: red;" name="select" style="margin-left: 4px;">
                    <option value="1" name="number">1</option>
                    <option value="2" name="number">2</option>
                    <option value="3" name="number">3</option>
                </select>
            </div>
            <div class="item">
                <p>Summarise:</p>
                <input type="text" name="result" disabled="true" value ="<?php echo $result?>">
            </div>
            <div class="text">
                <p id="grade"><?php echo $check?></p>
            </div>
            <div class="btn">
                <button type="submit" name="ok" id="ok" value="OK">OK</button>
        </form>
    </div>
     
</body>
</html>