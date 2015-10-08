<?php
$clip = rand(1, 50);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="5">
<head>
    <meta charset="UTF-8">
    <title>Did somebody say china?</title>
    <link rel="stylesheet" href="main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100italic' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <div class="overlay">
        <div class="content"><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <span id="link" onclick="play()"><a href="#">China?</a></button>
			<span id="meme"></span>
		</div>
    </div>
	<script>
	function play() {
		document.getElementById("meme").innerHTML="<embed src='/china/audio/<?php echo $clip; ?>.mp3' autostart='true' loop='false' volume='100' hidden='true'>";
		return true;
	}
	</script>
</body>
</html>
