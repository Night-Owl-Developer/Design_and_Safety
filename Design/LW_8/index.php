<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
        input {
            width: 25px;
            height: 25px;
            margin: 8px;
        }

        button{
            margin-left: 40px;
            background-color: rgb(168, 217, 255);
        }
    </style>

    <form method="post">
        <input type="text" name="elem11" required/>
        <input type="text" name="elem12" required/>
        <input type="text" name="elem13" required/> <br>

        <input type="text" name="elem21" required/>
        <input type="text" name="elem22" required/>
        <input type="text" name="elem23" required/> <br>

        <input type="text" name="elem31" required/>
        <input type="text" name="elem32" required/>
        <input type="text" name="elem33" required/> <br> <br>
        <button type="submit" name="butt">Рассчитать</button> <br> <br>
    </form>

<?php
    if (isset($_POST['butt'])) {
        sum();
    }

    function sum() {
        $num11 = $_POST['elem11'];
        $num12 = $_POST['elem12'];
        $num13 = $_POST['elem13'];
        $num21 = $_POST['elem21'];
        $num22 = $_POST['elem22'];
        $num23 = $_POST['elem23'];
        $num31 = $_POST['elem31'];
        $num32 = $_POST['elem32'];
        $num33 = $_POST['elem33'];

        $elements = array(
            array($num11,$num12,$num13),
            array($num21,$num22,$num23),
            array($num31,$num32,$num33)
        ); 
        
        $sum = 0;

        for ($i = 0; $i <= count($elements); $i++) {
            $sum += $elements[$i][$i];
        }
        echo "Сумма элементов главной диагонали массива равна $sum";
    }
?>
</body>
</html>