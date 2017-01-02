<?php 
	session_start();
	/*
	require_once 'connection.php';
	if(!isset($_SESSION['username'])) {
		header("Location:index.php");
	}
	updateSessionData(); */
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pentatris</title>
		<script src="frameworks/js/jquery-2.1.1.js" charset="utf-8"></script>
		<script src="frameworks/js/paper.js" charset="utf-8"></script>
		 <link rel="stylesheet" href="pentatris.css" title="Pentatris" type="text/css" media="screen" charset="utf-8"> 
		 <link rel="stylesheet" href="frameworks/css/font-awesome.min.css" title="Tetris" type="text/css" media="screen" charset="utf-8">
		<script src="frameworks/js/howler.js" charset="utf-8"></script>
		<link rel="icon" href="Pentatris.png" type="image/png">
	</head>
	<body>
		<div id="gamecontainer">
			<div id="boardcontainer">
				<audio loop id="bgscore" src="sounds/Tatrisa.mid"></audio> 
				<p id="paused">GAME PAUSED</p>
				<p id="gameover">GAME OVER</p>
				<p id="newgame">Press N to start a new game</p>
				<canvas id="board" width="300" height="600"></canvas>
			</div>
			<div id="sidebar">
				<hr>
				<p>SCORE: &nbsp;<span id="score"> - </span></p>
				<p>LEVEL: &nbsp;<span id="score"> - </span></p>
				<p>HIGH SCORE: </p>
				<!-- <p id="statsinfo"><?php /* echo $_SESSION['userinfo']['lastscore']." | ".$_SESSION['userinfo']['highscore']." | ".$_SESSION['userinfo']['plays']; */?></p> -->
				<hr>
				NEXT:
				<br />
				<br />
				<br />
				<br />
				<hr>

				<div id="helpcontainerXXX">
				<p>CONTROLS: &nbsp; </p>
					<center>
					<!--
					<div class="key"><i class="fa fa-long-arrow-up"></i></div>
					<span>Rotate</span>
					<div class="key"><i class="fa fa-long-arrow-down"></i></div>
					<span>Drop</span>
					<div class="key"><i class="fa fa-long-arrow-left"></i></div>
					<span>Move left</span>
					<div class="key"><i class="fa fa-long-arrow-right"></i></div>
					<span>Move right</span><br><br> -->
					<span class="key">&nbsp;&nbsp;&larr;&nbsp;&nbsp;</span>
					<span class="key">&nbsp;&nbsp;&uarr;&nbsp;&nbsp;</span>
					<span class="key">&nbsp;&nbsp;&darr;&nbsp;&nbsp;</span>
					<span class="key">&nbsp;&nbsp;&rarr;&nbsp;&nbsp;</span><br>
					<span style="font-size:small;">LEFT &nbsp;&nbsp;UP &nbsp;&nbsp;DOWN &nbsp;&nbsp;RIGHT</span>
					<br>
					<br>
					<span class="key">&nbsp;&nbsp;n&nbsp;&nbsp;</span>
					<span class="key">&nbsp;&nbsp;p&nbsp;&nbsp;</span>
					<br>
					<span style="font-size:small;">New&nbsp;&nbsp;Pause&nbsp;</span>
					</center>
					<hr>
				</div>
				<center>
				<br> <br> <br> <br> <br> <br> <br> <br>
				<input type="checkbox" id="musicswitch" value="sound" checked>
				<label id="musiclabel" for="musicswitch"><i class="fa fa-music"></i>&nbsp;</label> 
				<input type="checkbox" id="soundswitch" value="sound" checked>
				<label id="soundlabel" for="soundswitch"><i class="fa fa-bell-o"></i>&nbsp;</label>
				
				<!-- <span class="username"><?php /*echo "<a id=\"managelink\" alt=\"Manage account\" href=manage.php>".explode(' ', $_SESSION['name'])[0]."</a>"; */?></span> -->
				<a href="flogout.php" id="logoutb"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT</a>
				<!-- <a id="helpb"><i class="fa fa-info-circle"></i>&nbsp;Help</a> -->
				</center>
				
				
			</div>
		</div>
		<script src="pentatris.js" charset="utf-8"></script>
	</body>
</html>