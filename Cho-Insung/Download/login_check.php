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
   $sql = "select * from  (select * from login where id = '$id') as Login where Login.pw = '$pw'";
 
   // ���� ���� ����� $result�� ����
   $result = mysqli_query($connect, $sql);
   // ��ȯ�� ��ü ���ڵ� �� ����.
   $total_record = mysqli_num_rows($result);
 
   // JSONArray �������� ����� ���ؼ�...
  
  
  echo "{\"status\":\"OK\",\"num_results\":\"$total_record\",\"results\":[";
   // ��ȯ�� �� ���ڵ庰�� JSONArray �������� �����.
   for ($i=0; $i < $total_record; $i++)                    
   {
     
      // ������ ���ڵ�� ��ġ(������) �̵�  
      mysqli_data_seek($result, $i);       
        
      $row = mysqli_fetch_array($result);
   echo "{\"id\":\"$row[id]\",\"pw\":\"$row[pw]\",\"name\":\"$row[name]\",\"pw_identify\":\"$row[pw_identify]\"} ";
        
 
   // ������ ���ڵ� ������ ,�� ���δ�. �׷��� ������ ������ �Ǵϱ�.  
  
   if($i<$total_record-1){
      echo ",";
   }
    
   }
  echo "]}";
   // JSONArray�� ������ �ݱ�
  

  
?>