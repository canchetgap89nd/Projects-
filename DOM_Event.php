<!doctype html>
<html>
<head>
	<title>Demo_DOM</title>
	<meta charset = "utf-8" />	
</head>
<body>
	<script type="text/javascript">
		function change(){
			var a = document.getElementById("content").innerHTML = "Phường Thị Trân"; // hàm thay đổi nội dung trong thẻ div
		}
		function getContent()
		{
			var b = document.getElementById("content").innerHTML;						// hàm xuất ra nội dung trong thẻ div
			alert(b);
		}
		function changeCSS()															// hàm thay đổi CSS 
		{
			document.getElementById("content").style.width = "100px";
			document.getElementById("content").style.height = "100px";
			document.getElementById("content").style.backgroundColor = "red";
			document.getElementById("content").style.color = "black";
			document.getElementById("content").style.textAlign = "center";
			document.getElementById("box-btn").style.marginTop = "10px";
		}
	</script>
	<div id = "content">Trần Anh Quyền</div>
	<div id = "box-btn">
	<input type = "button" value = "Change Name" onclick = "change(),getContent()" />
	<input type = 'button' value = "Change style" onclick = "changeCSS()" />
	</div>

</body>
</html>