<?php
    // �����ͺ��̽� ���� ���ڿ�. (db��ġ, ���� �̸�, ��й�ȣ)
    $connect=mysqli_connect( "db.appddi.com", "appddi", "dydgur2009!","dbappddi") or  
        die( "SQL server�� ������ �� �����ϴ�.");
    
    mysqli_query( $connect,"set name utf8");
    mysqli_query( $connect,"set session character_set_connection=utf8");
    mysqli_query( $connect,"set session character_set_results=utf8");
    mysqli_query( $connect,"set session character_set_client=utf8");
    
   
   // �����ͺ��̽� ����
  
 
   // ���� ����
   session_start();
 
   // ������ ����
   $sql = "select main from count";
 
   // ���� ���� ����� $result�� ����
   $result = mysqli_query($connect, $sql);
   // ��ȯ�� ��ü ���ڵ� �� ����.
   $total_record = mysqli_num_rows($result);
 
   // JSONArray �������� ����� ���ؼ�...
  
 
   // ��ȯ�� �� ���ڵ庰�� JSONArray �������� �����.
 
     
      // ������ ���ڵ�� ��ġ(������) �̵�  
          
        
      $row = mysqli_fetch_array($result);
   
   $number = $row[main] +1;
   
   $sql2 =  "update count set main= '$number'";
  mysqli_query($connect, $sql2);


   
   echo "\"$number\" ";
   
   echo "\" $sql2\" ";
        
 
   // ������ ���ڵ� ������ ,�� ���δ�. �׷��� ������ ������ �Ǵϱ�.  
  
  ;
   // JSONArray�� ������ �ݱ�
  

  
?>