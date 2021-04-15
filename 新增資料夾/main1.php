<?php
    $db = mysqli_connect("localhost","David","1234");
    mysqli_select_db($db, "computer");
    mysqli_query($db, "SET NAMES UTF8");
    $sql = "SELECT * FROM products";
    $rows = mysqli_query($db, $sql);
    $num = mysqli_num_rows( $rows );
    mysqli_close($db);
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
          
            .pcimg{
                margin:0 0 50px 0 ;
                float:left;
                width:410px;
                height:360px;
            }
            #btn1{
                width:30px;
                height:30px;
                text-align:center;
            }
            .pcimg>p{
              
              
                margin:-30px 0 0 150px;
                font-size:20px;
            }
            .money{ 
                margin:15 20px 0 80px;

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
                    <li><a href="#">ASUS</a></li>
                    <li><a href="#">MSI</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Acer</a></li>
                </ul>
            </li>
            <li><a href="#s3">經銷據點</a>
                <ul class="submenu">
                    <li><a href="#">台灣</a></li>
                </ul>
            </li>
            <li><a href="#s3">關於我們</a>
                <ul class="submenu">
                    <li><a href="#">特色</a></li>
                </ul>
            </li>
            <li><a href="#s3">技術支援</a>
                <ul class="submenu">
                 <li><a href="#">Q&A</a></li>
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
            <form action="savecart.php" method="POST">
          <div class="pcimg">
         
           <a href="https://24h.pchome.com.tw/prod/DSAM2F-A9008JYX4?q=/S/DSAAAI" target="_blank" ><img src="img/desk1.jpg" width="350px" height="280px"></a><br>
            <div class="money"><font color="white"><img src="img/money.png" width="40px"; width="40px" ></div><p> <font color="white"> 34900</p>
            <input type="submit" name="btn1" value="購買" style="width:35px;height:30px;position:absolute;left:150px;top:350px;">
        </div>
            <div class="pcimg">
            <a href="https://24h.pchome.com.tw/prod/DSAA6I-A9008YX1V?q=/S/DSAA0K"target="_blank" ><img src="img/desk2.jpg" width="350px" height="280px"></a><br>
            <div class="money"><font color="white"><img src="img/money.png" width="40px"; width="40px" ></div><p> <font color="white">19900</p>
            <input type="submit" name="btn2" value="購買" style="width:35px;height:30px;position:absolute;left:560px;top:350px;">
            </div>
            <div class="pcimg">
            <a href="https://24h.pchome.com.tw/prod/DSAA35-A9008H6GK?q=/S/DSAA0N" target="_blank" ><img src="img/desk3.jpg" width="350px" height="280px"></a><br>
            <div class="money"><font color="white"><img src="img/money.png" width="40px"; width="40px" ></div><p> <font color="white">10499</p>
            <input type="submit" name="btn3" value="購買" style="width:35px;height:30px;position:absolute;left:150px;top:760px;">
            </div>
            <div class="pcimg">
            <a href="https://24h.pchome.com.tw/prod/DSAA6I-A9008D8C1?q=/S/DSAA0K" target="_blank" ><img src="img/desk4.jpg" width="350px" height="280px"></a>
            <div class="money"><font color="white"><img src="img/money.png" width="40px"; width="40px" ></div><p> <font color="white">19900</p>
            <input type="submit" name="btn4" value="購買" style="width:35px;height:30px;position:absolute;left:560px;top:760px;">
            </div>
            <div class="pcimg">
            <a href="https://24h.pchome.com.tw/prod/DSAA2P-A90094PXT" target="_blank" ><img src="img/desk5.jpg" width="350px" height="280px"></a>
            <div class="money"><font color="white"><img src="img/money.png" width="40px"; width="40px" ></div><p> <font color="white">34900</p>
            <input type="submit" name="btn5" value="購買" style="width:35px;height:30px;position:absolute;left:150px;top:1170px;">
            </div>
            <div class="pcimg">
            <a href="https://24h.pchome.com.tw/prod/DSAA9C-A90090753?q=/S/DSAA45" target="_blank" ><img src="img/desk6.jpg" width="350px" height="280px"></a>
            <div class="money"><font color="white"><img src="img/money.png" width="40px"; width="40px" ></div><p> <font color="white">17900</p>
            <input type="submit" name="btn6" value="購買" style="width:35px;height:30px;position:absolute;left:560px;top:1170px;">
            </div>
            
        </form>
        </div>
        </div>
        
        <?php
     
        ?>
    </body>
</html>
