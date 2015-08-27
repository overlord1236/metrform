<?php

  // Адерс сервера MySQL
  $dblocation = "localhost";

  // Имя базы данных, на хостинге или локальной машине
  
  $dbname = "srv28816_metro";
  // Имя пользователя базы данных
  $dbuser = "root";
  // и его пароль
  $dbpasswd = "root";

  // Устанавливаем соединение с базой данных
  $connection = mysql_connect($dblocation, $dbuser, $dbpasswd);

  //if (!$connection) {

    //cho mysql_error();
   // exit( "<P>В настоящий момент сервер базы данных не доступен,
   //           поэтому корректное отображение страницы невозможно.</P>" );
    //return "В настоящий момент сервер базы данных не доступен";
    //exit();
  //}
  // Выбираем базу данных

  $db_name = mysql_select_db($dbname, $connection);


  //if (!mysql_select_db($dbname, $connection) ) {
    // exit( "<P>В настоящий момент база данных не доступна,
    //           поэтому корректное отображение страницы невозможно.</P>" );
    //echo mysql_error();
    //return "В настоящий момент база данных не доступна";
    //exit();
  //}

  // Определяем версию сервера
  // $query = "SELECT VERSION()";
  // $ver = mysql_query($query);
  // if(!$ver) exit("Ошибка при определении версии MySQL-сервера");
  // $version = mysql_result($ver, 0);
  // list($major, $minor) = explode(".", $version);
  // Если версия выше 4.1 сообщаем серверу, что будем работать с
  // кодировкой cp1251
  // $ver = $major.".".$minor;
  // if((float)$ver >= 4.1)
  // {
  //   mysql_query("SET NAMES 'cp1251'");
  // }
?>