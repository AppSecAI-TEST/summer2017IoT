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
   $sql = "select * from test";
 
   $result = mysqli_query($connect, $sql);
   $total_record = mysqli_num_rows($result);
 
  
  echo "{\"status\":\"OK\",\"num_results\":\"$total_record\",\"results\":[";
   for ($i=0; $i < $total_record; $i++)                    
   {
     
      mysqli_data_seek($result, $i);       
        
      $row = mysqli_fetch_array($result);
      
    echo "{\"title\":\"$row[title]\",\"day\":\"$row[day]\",\"img01\":\"$row[img01]\",\"img02\":\"$row[img02]\",\"img03\":\"$row[img03]\",\"number\":\"$row[number]\"} ";
  
   if($i<$total_record-1){
      echo ",";
   }
    
   }
  echo "]}";
  

  
?>