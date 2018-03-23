<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Demo JS</title>
	</head>
	<body>
			<input type = "submit" onclick = 'clearAction()' value = "click" id = "sub"> <!--onclick = "alert('OK!')--> 
			<script language="javascript">
				// hàm trong js
				// function checkSum(result){				// hàm check số chẵn lẻ. Note: tham số truyền vào ko cần từ khóa var
				// 	if(result%2==0)
				// 		document.write("tổng là số chẵn");
				// 	else
				// 		document.write("tổng là số lẻ");
			
				// }
				//-------------
				// || trong  js 
				function message(show)
				{
					show = show || ('No message <br />'); // nếu ko truyền vào tham số thì mặc định in ra No message.
					document.write(show);
				}
				//-------------
				// sau 3s ko click thì alert ra Time out!
				var action = setTimeout(function(){    // hàm: sau 3s thì alert ra Time out.
					alert("Time out!!");
				 },30000)
				function clearAction()
				{
					clearTimeout(action);				// hàm clear timeOut
				}
				//--------------------
				// Hàm setInterval tương tự như setTimeout nhưng thực hiện vĩnh viễn. Cũng có hàm clear tương tự.
				// var Interval = setInterval(function(){
				// 	alert("Hello");
				// },2000)
				//---------------------
				var button = document.getElementById('sub');
				button.addEventListener('click', function()
				{
					// //confirm("OK?");
					// var a = parseInt(prompt('Nhập a', '')); // đổi sang kiểu int
					// var b = parseInt(prompt('Nhập b', ''));
					// var sum = a +b;
					// document.write('tổng a + b = ' + sum + "<br />" );
					// checkSum(sum);
					var tmp = 20;
					message();								// No message
					message('Hello W');						// Hello W
					//console.log(tmp);						
				});
				
			</script>
	</body>
</html>