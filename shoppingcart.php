<?php
    $db = mysqli_connect("localhost","David","1234");
    mysqli_select_db($db, "computer");
    mysqli_query($db, "SET NAMES UTF8");
    $sql = "SELECT * FROM products";
    $rows = mysqli_query($db, $sql);
    $num = mysqli_num_rows($rows);
    mysqli_close($db);
    session_start();
    $inout = "登入";
    $hr = "login.php";
    $msg="";
    if(isset($_SESSION["id"])){
    $id = $_SESSION["id"];
    $inout = "登出";
    $hr = "logout.php";
    $msg="歡迎使用者 ".$id." 登入<br><hr>";

    }
?>
    <html>
    <head>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href="css/pic.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <style>
            #all
            {
                width: 1500px ;
                height: 1950px;
                position: absolute;
            }
            #container
            {
                position: absolute;
                top:150px;
                left:310px;
            }
            #logo
            {
                position: absolute;
                left:310px;
                top:20px;
            }
            #login
            {
                position: absolute;
                left:1050px;
                top:20px;
                color: aliceblue;
            }
            #register
            {
                position: absolute;
                left:1090px;
                top:20px;
                color: aliceblue;
            }
            #msg
            {
                position: absolute;
                left:750px;
                top:20px;
                color: aliceblue;
            }
            #shoppingcart
            {
                position: absolute;
                left:980px;
                top:20px;
            }
            #animation
            {
                position: absolute;
                border-style: solid;
                left:310px;
                top:250px;
                width: 800px ;
                height: 300px;
            }
            #example
            {
                position: absolute;
                left:310px;
                top:600px;
                width: 800px;
            }
            #pic
            {
                float: left;
                margin: 20px;
                width: 310px ;
            }
            #product{
                
                width:1000px;
                height:900px;
                position:absolute;
                top:580px;
                left:330px;
            }
          
           
            #btn1{
                width:30px;
                height:30px;
                text-align:center;
            }
            .pcname>p{                            
                margin:20px 0 0 10px;
                font-size:16px;
            }
            .money{ 
                margin:15 20px 0 80px;

            }
            .pc{
                margin:0 80px 50px 0 ;
                float:left;
                width:350px;
                height:360px;
              
            }
            .pcimg{
                width:350px;
                height:300px;
            }
            .pcprice{
                padding:0 0 0 150px;
            }
            .pcbuy{
                padding:0 0 0 120px;
            }
            .shoppingcart{
                color:white;
                position:absolute;
                top:270px;
                left:310px;
                width:800px;
                height:800px;
            
            }
            .shoppingcart>table{
                color:white;

            }
        </style>
        <div id="all">
        <p id="logo"><a href="main2.php"><img src="img/logo.jpg" height="100"></a></p>
        <p id="shoppingcart"><img src="shoppingcart.png" width="50" height="50"></p>
        <p id="msg">
        <?php
        print $msg;
        ?>
        </p>
        <p id="login">
        <?php  echo "<a href=\"$hr \">"; 
        echo $inout ;?></a></p>
        <p id="register">
        <a href="register.php">註冊</a></p>
        <div id ="container" id ="main" role="main">
            <ul class="menu">
            <li><a href="#s1">最新消息</a>
                <ul class="submenu">
                    <li><a href="#">促銷活動</a></li>
                </ul>
            </li>
            <li class="active"><a href="#s2">產品系列</a>
                <ul class="submenu">
                    <li><a href="main1.php">桌電</a></li>
                    <li><a href="main2.php">筆電</a></li>
                    
                </ul>
            </li>
            <li><a href="#s3">經銷據點</a>
                <ul class="submenu">
                    <li><a href="tw.php">台灣</a></li>
                </ul>
            </li>
            <li><a href="#s3">關於我們</a>
                <ul class="submenu">
                    <li><a href="special.php">特色</a></li>
                </ul>
            </li>
            <li><a href="#s3">技術支援</a>
                <ul class="submenu">
                 <li><a href="qa.php">Q&A</a></li>
                </ul>
            </li>
        </ul>
        </div>

            <div class="shoppingcart">
            <h3>選購的商品</h3>
        <hr>
        <br>
        
        <table border="1">
            <tr>
            <th>操作</th><th>商品編號</th><th>商品名稱</th><th>定價</th><th>訂購數量</th>
                </tr>
                <?php
                      $total = 0;
                      while(list($array,$value)=each($_COOKIE))
                      {
                          
                         
                          if(isset($_COOKIE[$array])&& is_array($_COOKIE[$array])){
                              print "<td><a href='deletecart.php?id=$array'>刪除</a></td>";
                              $quantity ;
                              $price ;
                              while(list($name,$value)=each($_COOKIE[$array]))
                          {
                              echo "<td> $value </td>";
                              if($name=="PRICE") $price=$value;
                              if($name=="QNT")  $quantity=$value;
                          }
                            $total+=$price*$quantity;
                            echo"</tr>";
                             
  
                          }
                      }
                          if($total!=0){
                          echo"<tr> <td colspan=5>";
                          echo"訂購金額 NT$= $total 元</td> </tr>";
                          }
                      
                  
              ?>
        </table>
            </div>
        
        </div>
        <?php  mysqli_free_result($rows); ?> 
    </body>
</html>
