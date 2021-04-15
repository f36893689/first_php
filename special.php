<html>
    <head>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <style>
            #all
            {
                width: 1500px ;
                height: 1500px;
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
                border-style: solid;
                left:310px;
                top:20px;
            }
            #special
            {
                position: absolute;
                left:310px;
                top:270px;
            }
            #img
            {
                padding: 10px;
            }
            #text
            {
                color: aliceblue;
                padding: 10px;
            }
        </style>
        <div id="all">
                <p id="logo"><a href="index.php"><img src="img/logo.jpg" height="100"></a></p>
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
        <div id="special">
            <img src="img/special.jpg" width="800" height="300" id="img">
            <p id="text">
                特色<br><br>
                還在看著朋友同學用著最帥最美的電腦嗎?<br><br>
                ASUS, APPLE, ACER, MSI等的牌子<br><br>
                這裡擁有各式各樣的桌，筆電<br><br>
                讓你帶著你夢想中的電腦<br><br>
                邁向學霸之路！               
            </p>
        </div>
        </div>
    </body>
</html>