<?php
    // 데이터베이스 접속 문자열. (db위치, 유저 이름, 비밀번호)
    $connect=mysqli_connect( "db.appddi.com", "appddi", "dydgur2009!","dbappddi") or  
        die( "SQL server에 연결할 수 없습니다.");
    
    mysqli_query( $connect,"set name utf8");
    mysqli_query( $connect,"set session character_set_connection=utf8");
    mysqli_query( $connect,"set session character_set_results=utf8");
    mysqli_query( $connect,"set session character_set_client=utf8");
    
  
   // 세션 시작
   session_start();
  $id = $_POST['data1'];
  $pw = $_POST['data2'];
   // 쿼리문 생성
   $sql = "UPDATE login SET pw = '$pw' WHERE id = '$id' ";
 
   // 쿼리 실행 결과를 $result에 저장
   $result = mysqli_query($connect, $sql);
  if($result)
    echo "성공";
  else 
    echo "실패"; 

  
?>