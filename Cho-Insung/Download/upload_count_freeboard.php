<?php
 
  $connect=mysqli_connect( "db.appddi.com", "appddi", "dydgur2009!","dbappddi") or  
        die( "SQL server�� ������ �� �����ϴ�.");
    
    $number = $_GET['number'];
    $count = $_GET['count'];
    
    mysqli_query( $connect,"set name utf8");
    mysqli_query( $connect,"set session character_set_connection=utf8");
    mysqli_query( $connect,"set session character_set_results=utf8");
    mysqli_query( $connect,"set session character_set_client=utf8");


  $sql="UPDATE freeboard set count = '$count' where inumber = '$number'";  
  $result =  mysqli_query($connect, $sql);
  

  
  
 
?>