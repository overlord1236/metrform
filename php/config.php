<?php

  // ����� ������� MySQL
  $dblocation = "localhost";

  // ��� ���� ������, �� �������� ��� ��������� ������
  
  $dbname = "srv28816_metro";
  // ��� ������������ ���� ������
  $dbuser = "root";
  // � ��� ������
  $dbpasswd = "root";

  // ������������� ���������� � ����� ������
  $connection = mysql_connect($dblocation, $dbuser, $dbpasswd);

  //if (!$connection) {

    //cho mysql_error();
   // exit( "<P>� ��������� ������ ������ ���� ������ �� ��������,
   //           ������� ���������� ����������� �������� ����������.</P>" );
    //return "� ��������� ������ ������ ���� ������ �� ��������";
    //exit();
  //}
  // �������� ���� ������

  $db_name = mysql_select_db($dbname, $connection);


  //if (!mysql_select_db($dbname, $connection) ) {
    // exit( "<P>� ��������� ������ ���� ������ �� ��������,
    //           ������� ���������� ����������� �������� ����������.</P>" );
    //echo mysql_error();
    //return "� ��������� ������ ���� ������ �� ��������";
    //exit();
  //}

  // ���������� ������ �������
  // $query = "SELECT VERSION()";
  // $ver = mysql_query($query);
  // if(!$ver) exit("������ ��� ����������� ������ MySQL-�������");
  // $version = mysql_result($ver, 0);
  // list($major, $minor) = explode(".", $version);
  // ���� ������ ���� 4.1 �������� �������, ��� ����� �������� �
  // ���������� cp1251
  // $ver = $major.".".$minor;
  // if((float)$ver >= 4.1)
  // {
  //   mysql_query("SET NAMES 'cp1251'");
  // }
?>