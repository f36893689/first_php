<?php

$records_per_page = 6;

if(isset($_GET["Pages"]))
$pages = $_GET["Pages"];
else
$pages = 1;


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

    $total_records = mysqli_num_rows($rows);
    $total_pages = ceil($total_records / $records_per_page);
    $offset = ($pages-1) * $records_per_page;
    mysqli_data_seek($rows, $offset);
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
            .num{
                position:absolute;
                top:1850px;
               left:630px;
            }
        </style>
        <div id="all">
        <p id="logo"><a href="main2.php"><img src="img/logo.jpg" height="100"></a></p>
        <p id="shoppingcart"><a href="shoppingcart.php"><img src="shoppingcart.png" width="50" height="50"></a></p>
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
        <div id="animation">
            <div class="coverflow">
                <a href="#"><img src="img/1.jpg" height="300" width="800"></a>
                <a href="#"><img src="img/2.jpg" height="300" width="800"></a>
                <a href="#"><img src="img/3.jpg" height="300" width="800"></a>
                <a href="#"><img src="img/4.jpg" height="300" width="800"></a>
            </div>
        </div>
 
        <div id="product">
            <?php 
                   

                for($i=0;$i<6;$i++){
                    $row = mysqli_fetch_array($rows);
                    print "<form action='savecart.php' method='post'>";
                    $id=$row["pId"];
                    $name=$row["pName"];
                    $price=$row["pPrice"];
                    
                     echo "<div class=\"pc\">";
                     echo '<div class="pcimg">';
                
                     $pimg = $row["pimg"];
                     $href=$row["html"];
                  
                     echo "<a href=\"$href \" target=\"_blank\">";
                     echo "<img src=\"pcimg\\".$pimg.".jpg\" width='350px' height='300px'>";
                     echo "</a>";
                    
                     echo "</div>";   
                    
                     echo ' <div class="pcname">';
                     echo "<p><font color='white'>".$row["pName"]."</p>";
                     echo "</div>";
                     echo ' <div class="pcprice">';
                     echo "<p><font color='white'>".$row["pPrice"]."</p>";
                     echo "</div>";
                     echo ' <div class="pcbuy">';
                     print "<input type='text' name='Pquantity' size=5 value='1'>";
                     print "<input type='hidden' name='PID' value='$id'>";
                     print "<input type='submit' name='send' value='訂購'>";
                     print "<input type='hidden' name='pppname' value='$name'>";
                     print "<input type='hidden' name='pppprice' value='$price'>";
                     echo "</div>";
                     echo "</div>";
                     print "</form>";
                    
               
                     
                }
              
            ?>
          
        </div>
        <div class="num">
          <?php
if($pages >=2)
print "<a href='main1.php?'>上一頁</a>| ";

for($i=1; $i<=2; $i++){
    if($i != $pages)
    print "<a href=\"main1-$i.php\">".".$i.</a> ";
    else
    print "$i ";
    }

    if($pages <2)
    print "| <a href='main1-2.php'>下一頁</a> ";
?>
          </div>
        <?php  mysqli_free_result($rows); ?> 
    </body>
</html>

