<?php
    // �����ͺ��̽� ���� ���ڿ�. (db��ġ, ���� �̸�, ��й�ȣ)
    $connect=mysqli_connect( "db.appddi.com", "appddi", "dydgur2009!","dbappddi") or  
        die( "SQL server�� ������ �� �����ϴ�.");
    
    mysqli_query( $connect,"set name utf8");
    mysqli_query( $connect,"set session character_set_connection=utf8");
    mysqli_query( $connect,"set session character_set_results=utf8");
    mysqli_query( $connect,"set session character_set_client=utf8");
    
  
   // ���� ����
   session_start();
  $sql = $_POST['data1'];
  
  
 
   // ���� ���� ����� $result�� ����
   $result = mysqli_query($connect, $sql);
  if($result)
    echo "1";
  else 
    echo "0"; 

  
?>