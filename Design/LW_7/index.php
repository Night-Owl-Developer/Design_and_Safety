<html>
    <head>
        <title>Лабораторная работа №7</title>
    </head>

        <style>
            .form {
                display: block;
                border-width: 1px;
                border-color: black;
                margin-left: auto;
                margin-right: auto;
            }

            h2, img {
                margin-left: 5%;
            }

            h3 {
                margin-left: 3%;
            }

            img {
                width: 35%;
                height: 12%;
                margin-bottom: 2%;
            }

            input {
                margin-left: 7%;
                margin-bottom: 2%;
                width: 220px;
                height: 25px;
            }

            #b {
                margin-left: 8.2%;
                font-size: medium;
                color: rgb(0, 0, 0);
                background-color: rgb(168, 217, 255);
                width: 12%;
                height: 5%;
            }

        </style>

                <body>
                    <form name="f" method="post" action="/">
                        <h3>Введите значение переменной "Х":</h3>
                        <input name="elem1" type="text">

                        <br>

                        <h3>Введите количество шагов:</h3>
                        <input name="elem2" type="text">
                        <br>
                        <input  id="b" name="butt" type="submit" value="Ввести"/>
                        <!--  -->
                    </form>
                </body>
                <?php
                    // проверка была ли нажата кнопка
                    if (isset($_POST["butt"])) {
                        Poisk();
                    }

                        function Poisk (){
                            $sum = 0; // сумма
                            
                            // получение значений
                            $x = $_POST['elem1'];
                            $val = $_POST['elem2'];

                            for ($n = 1; $n <= $val; $n++) {
                                $d1 = (2*$n);

                                // вычисление факториала
                                $factorial = 1;
                                for($j = $d1; $j > 0; $j--){
                                    $factorial *= $j;
                                }

                                $p1 = pow(-1, $n);
                                $p2 = (int) pow($x, $d1);

                                $result = ($p1 * $p2) / $factorial;

                                $sum += $result;
                            }
                            
                            echo "Результат вычислений: $sum";
                        }
                    ?>
</html>