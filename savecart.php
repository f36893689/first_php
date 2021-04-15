
<?php

$id=$_POST["PID"];
$name = $_POST["pppname"];
$price = $_POST["pppprice"];
$quantity = $_POST["Pquantity"];
if($quantity == "")
$quantity = 1 ;


setcookie($id."[ID]", $id, time()+3600);
setcookie($id."[NAME]", $name, time()+3600);
setcookie($id."[PRICE]", $price, time()+3600);
setcookie($id."[QNT]", $quantity, time()+3600);
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
                height: 1550px;
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
            #shoppingcart
            {
                position: absolute;
                left:980px;
                top:20px;
            }
            .record{
                position:absolute;
                top:250px;
                left:310px;
                width:800px;
                height:500px;
                color:white;
                font-size:25px;
            }
 </style>
<div id="all">
        <p id="logo"><a href="main2.php"><img src="img/logo.jpg" height="100"></a></p>
        <p id="shoppingcart"><img src="shoppingcart.png" width="50" height="50"></p>
        <p id="login"><a href="login.php">登錄</a></p>
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

        <div class="record">
        <?php
        
                 echo "已經成功將選購商品放入購物車<br>";
                 echo "選購商品: $name<br>";
                 echo "購買個數: $quantity<br>";
                 echo "等待2秒,繼續購物<br>";
                 header("Refresh:2;url=main1-1.php");
    ?>
         
            
        </table>

        </div>
        </body>
        </html>