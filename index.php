<!DOCTYPE html>
<html>
<head>
        <script src="jquery/jquery-3.3.1.min.js"> </script>
            <script>
    $(document).ready(function(){
        $(".left").hide();
    $(".left").fadeIn("slow");
    $(".right").hide();
    $(".right").fadeIn("slow");
   
  });


            </script>
        <link href="css/index.css"
        type="text/css"
        rel="stylesheet" >

    <meta charset="utf-8" />
    <title>特價屋</title>
</head>
<body>

<div class="all">
    <div class="left">
    <img  src="img/m1.jpg" width=750px height="720px" onclick="javascript:location.href='main1.php'">         
    </div>

    <div class="right">
            <img src="img/m2.jpg" width=750px height="720px" onclick="javascript:location.href='main2.php'"> 
</div>

</div>
</body>
</html>