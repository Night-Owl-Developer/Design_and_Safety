<?php
    // интерфейс "продукт"
    interface Product{
        public function Info();
    }

    // класс "шоколад"
    class Chocolate implements Product{
        public $chocolate, $price, $rating;

        function __construct($chocolate, $price, $rating){
            $this->chocolate=$chocolate; // наименование 
            $this->price=$price; // цена
            $this->rating=$rating; // рейтинг
        }
        
        function Info(){
            echo "Шоколад: ".$this->chocolate." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
        }
    }
    
    // класс "мастика"
    class Mastic implements Product{
        public $mastic, $price, $rating;

        function __construct($mastic, $price, $rating){
            $this->mastic=$mastic; // наименование 
            $this->price=$price; // цена
            $this->rating=$rating; // рейтинг
        }

        function Info(){
            echo "Мастика: ".$this->mastic." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
        }
    }
    
    // класс "вишня"
    class Сherry implements Product{
        public $cherry, $price, $rating;

        function __construct($cherry, $price, $rating){
            $this->cherry=$cherry; // наименование 
            $this->price=$price; // цена
            $this->rating=$rating; // рейтинг
        }

        function Info(){
            echo "Вишня: ".$this->cherry." Цена: ".$this->price." Рейтинг: ".$this->rating."<br>";
        }
    }

    // интерфейс "пользователь"
    interface User{
        public function userInfo();
    }
    
    // класс "пользователь 1"
    class User1 implements User{
        public $username, $login, $password;

        function __construct($username, $login, $password){
            $this->username=$username; // имя 
            $this->login=$login; // логин
            $this->password=$password; // пароль
        }

        function userInfo(){
            echo "Пользователь: ".$this->username." Логин: ".$this->login." Пароль: ".$this->password."<br>";
        }
    }
    
    // класс "пользователь 2"
    class User2 implements User{
        public $username, $login, $password;

        function __construct($username, $login, $password){
            $this->username=$username; // имя 
            $this->login=$login; // логин
            $this->password=$password; // пароль
        }

        function userInfo(){
            echo "Пользователь: ".$this->username." Логин: ".$this->login." Пароль: ".$this->password."<br>";
        }
    }
    
    // класс "пользователь 3"
    class User3 implements User{
        public $username, $login, $password;

        function __construct($username, $login, $password){
            $this->username=$username; // имя 
            $this->login=$login; // логин
            $this->password=$password; // пароль
        }

        function userInfo(){
            echo "Пользователь: ".$this->username." Логин: ".$this->login." Пароль: ".$this->password."<br>";
        }
    }
    
    // класс "подведение итогов"
    class Summarizing implements Product, User{
        public $username, $video, $photo, $screen;

        function __construct($username, $commodity){
            $this->username=$username;
            $this->commodity=$commodity;
        }

        function Info(){
            echo  "Пользователь: ".$this->username." купил: ".$this->commodity."<br>"; 
        }

        function userInfo(){
            echo "da";
        }
    }
    
    // заполнение данных о товарах
    $result1 = new Chocolate("AlpenGold", "89", "4.7 / 5.0");
    $result1->Info();

    $result2 = new Mastic("Mastic super","300","4.0 / 5.0");
    $result2->Info();

    $result3 = new Сherry("Screen_1", "185", "5.0 / 5.0");
    $result3->Info();

    // заполнение данных о пользователях
    $us1 = new User1("Allen", "All", "1234");
    $us1->userInfo();

    $us2 = new User2("Sam","Robert","super");
    $us2->userInfo();

    $us3 = new User3("Jon","Josef","Cook");
    $us3->userInfo();

    $resInfo = new Summarizing("Jon", "Сherry");
    $resInfo->Info();
?>