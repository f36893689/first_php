<?php
    $id="";
    $username="";
    $email="";
    $password="";
    $tel="";
    $address="";
    $birth="";
    $msg="";
    if(isset($_POST["ID"]))
        $id= $_POST["ID"];
    if(isset($_POST["name"]))
        $username= $_POST["name"];
    if(isset($_POST["email"]))
        $email= $_POST["email"];
    if(isset($_POST["password"]))
        $password= $_POST["password"];
    if(isset($_POST["tel"]))
        $tel= $_POST["tel"];
    if(isset($_POST["address"]))
        $address= $_POST["address"];
    if(isset($_POST["birth"]))
        $birth= $_POST["birth"];
    


    if(isset($_POST["send"]) && $id !="" && $username !=""){
        $db = mysqli_connect( "localhost", "root", "yikming98" ) 
            or  die("MySQL伺服器連接錯誤!".mysqli_connect_error() );
        mysqli_select_db($db, "computer") or die("無法開啟資料庫".mysqli_error($db));
   
        mysqli_query($db, "SET NAMES UTF8");
        $sql = "SELECT * FROM member WHERE mId = '$id'";  //建立SQL指令
        $rows = mysqli_query( $db, $sql);     //執行SQL查詢
        
        //寫入註冊資料於資料庫
        if(mysqli_fetch_row($rows) == false)
           {
               $sql = "insert into member (mId,mAccount,mPassword,mEmail,mTel,mAddress,mBirth) VALUES ('$id','$username','$password','$email','$tel','$address','$birth')";
               mysqli_query($db,$sql);
               $msg ="註冊成功<br>"."使用者學號﹕".$id."<br>"."使用者姓名﹕".$username."<br>"."使用者電郵﹕".$email."<br>"."使用者密碼﹕".$password."<br>"."使用者電話﹕".$tel."<br>"."使用者地址﹕".$address."<br>"."使用者生日﹕".$birth."<br>";
               header("Refresh:4 url=main1.php");
           }
        else
        {
            $msg = "此帳號已存在<br>";
            header("Refresh:1; url=register.php");
        }
        
        
        mysqli_close($db);  
    }
?>

<!DOCTYPE html>
<html lang="zh-TW">
  <head>
      <style>
          html
          {
              background-image: url(css/background.jpg);
          }
          h1
          {
              color: red;
          }
          body
          {
          color: aliceblue;
          }
      </style>
    <meta charset="utf-8">
    <title> 註冊會員 </title>
  </head>
  
  <body>
      <h1>輸入資料 註冊會員</h1>
      <hr/>
      <form action="register.php" method="post">
          <p>使用者學號：<input type="text" name="ID"></p>
          <p>使用者姓名：<input type="text" name="name"></p> 
          <p>電子郵件地址：<input type="text" name="email"></p>
          <p>使用者密碼：<input type="text" name="password"></p>
          <p>使用者電話：<input type="text" name="tel"></p>
          <p>住家地址：<input type="text" name="address"></p>
          <p>使用者生日：<input type="text" name="birth"></p>      
          <p><input type="submit" name="send" value="註冊會員"></p>         
      </form>  
      <?php print $msg; ?>
  </body>
</html>