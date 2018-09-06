<<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="mysidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;></a>
	<a href="#">kontak</a>
	<a href="#">service</a>
	<a href="#">client</a>
	<a href="#">contanct</a>
</div>
<span style="font-size: 30px; cursor: pointer;" onclick="opennav()">&#9776;open></span>

<script >
	function opennav(){
		document.getElementById("mysidenav").style.width="250px";
	}

	function closenav(){
		document.getElementById("mysidenav").style.width="0";
	}
</script>

</body>
</html>