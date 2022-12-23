<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="/">
            <input type="text" name="X" placeholder="Введите Х"> <br>
            <input type="text" name="A" placeholder="Введите А"> <br>
            <input type="text" name="B" placeholder="Введите В"> <br>
            <input type="text" name="C" placeholder="Введите С"> <br>
            <input type="submit" name="cr" value="Ввести данные">
        </form>
    </body>
</html>

<style>
    input {
        margin: 10px;
    }
</style>

<?php
    if(isset($_POST["cr"]))
    {
        class laba{
            public $x, $a, $b, $c;

                function __construct($x, $a, $b, $c){
                    $this->x = $x;
                    $this->a = $a;
                    $this->b = $b;
                    $this->c = $c;
                }

                function Numbers(){
                    if($this->x <= 3){
                        echo "Результат ";
                        echo $this->x * $this->x - 3 * $this->x + 9 . "<br>";
                    }
                    else{
                        echo "Результат ";
                        echo $this->x * $this->x * $this->x + 6 . "<br>";
                    }
                }

                function Discriminant(){
                    echo "Дискрименант " . $this->a * $this->b * $this->c . "<br>";
                }
        }

        $x = $_POST["X"];
        $a = $_POST["A"];
        $b = $_POST["B"];
        $c = $_POST["C"];
        $num = new laba($x, $a, $b, $c);
        $num->Numbers();
        $num->Discriminant();
    }
?>