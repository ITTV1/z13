<?php


//Работа с путями

//string dirname( string $p, int $level = 1)


//echo dirname("/www/php.txt");///www
//echo dirname("../php.txt");///..
//echo dirname("/php.txt");//  /
//echo dirname("/");//  /
//echo dirname("php.txt");//  .


//echo dirname("/www/php/html/css/js/php.txt");//  /www/php/html/css/js
//echo dirname("/www/php/html/css/js/php.txt", 2);//   /www/php/html/css
//echo dirname("/www/php/html/css/js/php.txt", 3);//   /www/php/html
//echo dirname("/www/php/html/css/js/php.txt", 4);//   /www/php




//string tempnam(string $d, string $p)


//tempnam( "/tmpp","tempp"); //   /tmpp/tempp4g222h44
//
//TMPDIR  TMP

//
//$name = tempnam();
//$t = fopen($name, "w");



//getmygid()


//
//$name = tempnam() . getmygid();
//$t = fopen($name, "w");



//string realpath(string $p);



echo realpath("../index.php"); //  абсолютный путь к данному файлу  /php.xxx/index.php
echo realpath("."); //   эта функция выведет имя текущего каталога


false

































?>
