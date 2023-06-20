<html>
  <meta charset="UTF-8">
  <head>
    <body background="img/haikei.jpg" oncontextmenu="alert('右クリックは禁止です!');returnfalse">
      <center>

        <table border="6"bordercolor="red"width="750">
          <tr>
            <td>
            <marquee>
              <font size="30"color="blue"><i><b>⭐ようこそ練習用ホームページへ⭐</b></i></font>
            </marquee>
            </td>
          </tr>
        </table>

        <table width="400">
          <tr>
            <td>
              <marquee behavior="alternate">いろいろあるよ!ゆっくりしていってね!</marquee>
            </td>
          </tr>
        </table>
    </body>
    
        <table bgcolor="#f5b2b2">
          <tr>
            <td>
              <font color="red">
              <?php
$today = date("Y-m-d H:i:s");

print_r($today);

?>
                あなたは
                <?php include "counter.php" ?> 人目の訪問者です｡
                
              </font>
            </td>
          </tr>
        </table>

        <br><br><br>
        <a fref="menu.php"><img src="img/menu.png">
        <table width="230">
        <tr>
        <td>
             <br><br><br>
             <a href="form.php"><img src="img/keijiban.png"></a>
             

       </tr>
       </td>

        </center>

  </head>
</html>