<?php

    $card=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
    $rightCard=mt_rand(0,13);
    $leftCard=$_POST['leftCard'];
    $select=$_POST['select'];
    $result;//右カード，左カードの比較結果格納変数
    if($leftCard<$rightCard){
        $result="High";
    }elseif ($leftCard>$rightCard){
        $result="Low";
    }else{
        $result=$select;
    }

?>

<html>	
	<head>
		<meta http-equiv="Content-Type"content="text/html;charaset=UTF-8">
	</head>
	<body>
		<div align="center">
		<?php
		  //題名
	       echo'<font size="6">High&Lowゲーム<br></font>';
	       print '<hr>';
	       echo'<img src="../cards/',$card[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;';
	       echo'<img src="../cards/',$card[$rightCard],'"><br>';
	       echo $select,"を選択しました<br>";
	       if ($result==$select){
	           echo "You Win!";
	       }else{
	           echo "You Lose……";
	       }

		?>
		</div>
	</body>
</html>
