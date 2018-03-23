<!doctype>
<html>
	<head>
		<meta charset = "utf-8" />
		<title>Login</title>
		<script src = "../../jquery-3.3.1.js">‪</script>
		<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap.css"> 
		<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap-theme.min.css"> 
		<style>
		#container
		{		
			padding: 40px 31%;
		}
		#box-login
		{
			width: 512px;
			height: 300px;
			border: 1px solid #A7A09F;
			border-radius: 7px;		
			position: relative;
			background-color: #FAFAFA;
			box-shadow: 1px 1px 5px 1px grey;
		}
		#title ul
		{
			list-style-type: none;
			position: relative;
		}
		#title li
		{
			display: inline-block;
			padding: 0px;
			position: absolute;
		}
		#title li#t1
		{
			top: -6px;
		}
		#title li#t2
		{
			right: 165px;
		}
		#title li#t2 a
		{
			text-decoration: none;
		}
		#t2:hover
		{
			color: red;				// ko đc???
		}
		#title li#t3
		{
			border: 1px solid black;
		    width: 22px;
		    height: 23px;
		    border-radius: 287px;
		    top: 16px;
		    right: 135px;
		    background-color: #BBBABA;
		}
		#title li#t4
		{
			right: 66px;
			color: #222;
		}
		#body-login
		{
			position: absolute;
		    top: 70px;
   			left: 40px;
		}
		#body-login input
		{
			border-radius: 9px;
			line-height: 36px;
			padding-left: 45px;
			border: 1px solid #cccccc;;
		}
		#btn-login
		{
			width: 407px;
		    background-color: #5882FA;
		    height: 40px;
		    color: #fff;
		    font-size: 17px;
		    font-family: roboto;
		    box-shadow: inset 1px 1px grey;
		}
		#btn-login:hover
		{
			background-color: #0101DF;
		    
		}
		#txt
		{
			background: url('../../../img/user.png') no-repeat;
		}
		#txt1
		{
			background: url('../../../img/password.png') no-repeat;
		}
		.col-md-12
		{
			height: 65px;
			background-color: 333;
			padding: 10 93px;
			color: #fff;
		    font-size: 32px;
		    box-shadow: 2px 1px grey;
		}
		</style>
	</head>
	<body style = "background-image: url('‪‪../../../img/LoginBG.png') ">
		<div class="row">
			  	<div class="col-md-12">Login</div>
			  
			    </div>
		<div id = "container">
			
			<div id = "box-login">
				<div id = "title">
					<ul>
					<li id = "t1"><h1 style = "font-size: 26px; font-family: Roboto; line-height: 24px; color: #222;">Sign In<h1></li>
					<li id = "t2"><a href = ""><h3 style = "font-size: 14px; font-family: Roboto; line-height: 24px; color: #222;">Forgot Password</h3></a></li>
					<li id = "t3">&nbsp?</li>
					<li id = "t4"><a href = '#'><h3 style = "font-size: 14px; font-family: Roboto; line-height: 24px; color: #222;"><u>Click Here</u></h3></a></li>
					</ul>
				</div>
				<div id = "body-login">
					<form id= "form-login" action="" method = "post">
						<input id = "txt" type = "text" name = "userName" required placeholder="User Name" size = '47' autofocus /><br />  
						<br />
						<input id = "txt1"  type = "password" name = "pass" required placeholder="Password" size = '47' /><br /> <div class="checkbox">
						    <label>
						      <input type="checkbox"> Ghi nhớ mật khẩu
						    </label>
						  </div>
						<input id = "btn-login" onclick = "checkError()" type = "submit" name = "login" value = "Login to your account"/>

					</form>
				</div>
				<script type="text/javascript">
					var arrayError = new Array();
					
					function link()					// hàm link trang
					{
						var user = "aquyen23@gmail.com";
						var pass = "1";		
						var p_user = $("#txt").val();	// lấy giá trị khi nhập userName dùng jQuery
						var p_pass = $("#txt1").val();	// lấy giá trị khi nhập pass dùng jQuery
						if((p_user == user) && (p_pass == pass))
							//document.getElementById("form-login").action = "body_Genk.php";
							// window.location.href = "http://dotnet.edu.vn";
							arrayError.push(1);
						else
						{
							arrayError.push(0);

							// alert("Sai tên tài khoản hoặc mật khẩu.");
						}
					}
					function checkEmail() {									// hàm kiểm tra định dạng email
				        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				        if (!filter.test(txt.value)) {

				            arrayError.push(0);
				           // alert("Sai định dạng email.")
				        }
				        else
				        {
				            arrayError.push(1);
				        }
				    }
				    function checkError()
				    {
				    	link();
				    	checkEmail();
				    	var t;
				    	for(var i = 0; i <arrayError.length; i++)
				    	{
							// document.write(arrayError[i] + " ");
				    		if(arrayError[i] == 0){
				    			t = 0;
				    			break;
				    		}
					    	else
					    		t = 1;
				    	}	
				    	if(t==1)
				    		// window.open('https://freetuts.net', "windowChild", "width=500, height=500");	
				    		document.getElementById("form-login").action = "body_Genk.php";
				    	else 
				    		alert("What wrong with username or password!");
				    }
				  //   var submit = document.getElementById("btn-login");
				  //   submit.addEventListener('onclick', function(){
				  //   	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				  //       if (!filter.test(txt.value)) {

				  //           // arrayError.push(0);
				  //          alert("Sai định dạng email.")
				  //       }
				  //   })
				  //   submit.addEventListener('onclick', function(){
				  //   	var user = "aquyen23@gmail.com";
						// var pass = "1";		
						// var p_user = document.getElementById("txt").value;	// lấy giá trị khi nhập userName	
						// var p_pass = document.getElementById("txt1").value;	// lấy giá trị khi nhập pass
						// if((p_user != user) && (p_pass != pass))
						// 	//document.getElementById("form-login").action = "body_Genk.php";
						// 	// window.location.href = "http://dotnet.edu.vn";
						// 	// arrayError.push(1);
						// 	alert("Sai tên tài khoản hoặc mật khẩu!");
				  //   })
				</script>
			</div>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src ="‪../../../bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>