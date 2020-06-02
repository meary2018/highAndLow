<?php
$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
$leftCard=mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charaset=UTF-8">
		<title>HighAndLow</title>
	</head>
	<body>
		<div align="center">

		<?php
		  //題名
	       echo'<font size="6">High&Lowゲーム<br></font>';
	       print '<hr>';
	       //echo"ランダム数値：",$leftCard;
	    ?>
	    <form action="highAndLowS07.php"method="post">
	    <?php
	       //カード表示
	       echo'<img src="../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;';
	       echo'<img src="../cards/bg.png"><br>';
	       echo'<input type="hidden" name="leftCard" value="',$leftCard,'">';
		?>
		<input type="radio" name="select" value="High">High
		<input type="radio" name="select" value="Low">Low<br>
		<input type="submit" value="決定">
		</form>
		</div>
	</body>
</html>
