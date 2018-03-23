<!doctype html>
<html>
<head>
	<title>Demo_Event</title>
	<meta charset = "utf-8" />	
</head>
<body>
	<button class = 'b1' onclick = "kicked()">click me</button> 	<!-- cach 1 -->
	<button class = 'b2'>click me 2</button>
	<script type="text/javascript">
		function kicked()
		{
			alert("Cách 1");
		}
		var b = document.getElementById('b2');
		b.addEventListener('click', function() {
			alert("Cách 2");
		})
	</script>
</body>
</html>