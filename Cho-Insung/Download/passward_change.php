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
  $id = $_POST['data1'];
  $pw = $_POST['data2'];
   // ������ ����
   $sql = "UPDATE login SET pw = '$pw' WHERE id = '$id' ";
 
   // ���� ���� ����� $result�� ����
   $result = mysqli_query($connect, $sql);
  if($result)
    echo "����";
  else 
    echo "����"; 

  
?>