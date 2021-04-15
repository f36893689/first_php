<?php
    session_start();
    $id="";
    $password="";
    $msg="";
?>
<html>
    <style>
        html
        {
            background-image: url(css/background.jpg);
            color: aliceblue;
        }
        h1
        {
            color: red;
        }
        form
        {
            color: aliceblue;
        }
    </style>
    <body>
        <h1>登入網站</h1>
        <hr>
        <form action="" method="POST">
            使用者帳號﹕
            <input type="text" name="id"><br>
            使用者密碼﹕
            <input type="password" name="pw"><br>
            <input type="submit" name="submit" value="登入">
        </form>
        <?php
        $db = mysqli_connect("localhost","root","yikming98");
        mysqli_select_db($db,"computer");
        
        if(isset($_POST["submit"]))
        {
            $id = $_POST["id"];
            $pw = $_POST["pw"];
            if(empty($id)||empty($pw))
            {
                print "輸入不能空白";
            }
            else
            {
            $_SESSION["id"] = $id;
            $sql = "select * from member where mId =".$id;
            $rows = mysqli_query($db,$sql);
            $r = mysqli_fetch_row($rows);
            if($pw == $r[2])
            {
               print $r[2];
               header("Location: main1.php");
            }
            else
            {
                print "錯誤的帳號或密碼";
            }
            }
        }
        mysqli_close($db);
        ?>
    </body>
</html>