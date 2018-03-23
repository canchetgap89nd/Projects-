<!doctype html>
<html>
<head>
	<title>Demo_DOM</title>
	<meta charset = "utf-8" />	
</head>
<body>
	<input type = "text" value = "the 1" class = "website">	<!-- // thẻ 1 -->
	<div class = "box">	
		<input type = "text" value = "the 2" class = "website"> 	<!-- // thẻ 2 -->
		<input type = "text" value = "the 3" id = "single">	<!-- // thẻ 3 -->	
	</div>	
	<script type="text/javascript">
		var a = getElementsByClassName("website");				//lấy thẻ 1 và thẻ 2
		var b = getElementById("single");						//lấy thẻ 3
		var c = getElementsByTagName('input');					//lấy thẻ 1 và thẻ 2 và thẻ 3
		var d = querySelectorAll("div input.website");			//lấy thẻ 3
	</script>
</body>
</html>