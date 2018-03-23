<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Learn JQuery</title>
	<script src = "../../jquery-3.3.1.js">‪</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){		
			$("div").css('background-color','red');
			$("div").css('color','#fff');
			$("div").html('Changed');
			$(this).hide();
			// // $("p").mouseleave(function(){
			// // 	$(this).css("color", "red");
			// // });
			// /*------------------------------------------------
			// // $("button").click(function(){
			// // 	$("p").html("Changed");			 thay đổi nội dung của thẻ p
			// // });
		 });
		});

	</script>
	<style type="text/css">
		div{
			padding: 10px;
			text-align: center;
			color: green;
			width: 100px;
			height: 100px;
			border: 1px solid black;
			border-radius: 7px;
		}
	</style>
</head>
<body>
<div>Hello</div><br />
<button>Click</button>

</body>

</html>