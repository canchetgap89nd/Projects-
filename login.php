<!doctype>
<html>
	<head>
		<meta charset = "utf-8" />
		<title>Login</title>
		<script src = "../../jquery-3.3.1.js">‪</script>
		<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap.css"> 
		<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap-theme.min.css"> 
		<style>
			<?php include("login_css.css");?>
		</style>
		<script type="text/javascript" src = "list_account.js"></script>
		<script type="text/javascript">
		
			function checkLogin() // hàm check tài khoản login
			{
				var tmp;
				for( i in account.info){
				  if($("input[name='userName']").val()==account.info[i].name && $("input[name='password']").val()==account.info[i].pass )
				  {
				  		tmp = 1;
				  		break;
				  }				
				  else	{	  	
			  		tmp = 0;
			  		$("#title-signIn").attr('style','color: red;font-size: 26px; font-family: Roboto; line-height: 24px;');	
			  		$("input[type='text']").attr('style', 'border: 1px solid red;box-shadow: 0px 0px 2px 0px red;');
			  		$('#txt1').focus();		  		
					}
				}
				if(tmp==1) return true;
				else 
			  	return false;
			};
			function alertError()
			{
				if(!checkLogin())
					$("#boxtxt2").append("<p>Sai tên tài khoản hoặc mật khẩu</p>");
			}
			$(document).ready(function(){
				$('#txt1').on('click', function(){
					if( $(this).val()=="" ){
						$(this).attr('style', 'border: 1px solid red;box-shadow: 0px 0px 2px 0px red;');
					}
				})
				$("#txt2").on("click",function(){
					if($(this).val()==""){
						$(this).attr('style', 'border: 1px solid red;box-shadow: 0px 0px 2px 0px red;');
					}
				});	
				$("input[type='text']").keypress(function(){
					$(this).attr('style', 'border: 1px solid green;box-shadow: 0px 0px 2px 0px green;');			
				});
				// $("input[type='submit']").click(alertError());
				
			});
		
		</script>
	</head>
	<body style = "background-image: url('‪‪../../../img/LoginBG.png') ">
		
		<div class = "container-fluid">
			<div id= "header" class="row">
			  	<div class="col-xs-12 col-md-12">Login</div>			  
			    </div>
			    <div class = "row">
			    	<div class ="col-xs-3 col-md-4"></div>
			    	<div  style="padding: 25px;" id ="form" class ="col-xs-6 col-md-4">
			    		<div class = "col-xs-12 col-md-12">
			    		<p id ="title-signIn" style = "font-size: 26px; font-family: Roboto; line-height: 24px; color: #222;">Sign In</p>
			    		</div>
			    		<form method="post" action="trang_chu_lika.php?goto="onsubmit="return checkLogin();">
			    		<div class = "col-xs-12 col-md-12">
			    			<input id = "txt1" type = "text" name = "userName" value = "" required placeholder="User Name" autofocus /><br />
			    		</div>
			    		<div id ="boxtxt2" class = "col-xs-12 col-md-12">
			    			<input id = "txt2" type = "text" name = "password" value = "" required placeholder="Password" autofocus /><br />
			    		</div>
			    		<div  style="margin: 15px 0px;" class = "col-xs-12 col-md-12">
			    			<input type="checkbox"> Ghi nhớ mật khẩu
			    		</div>
			    		<div id = "btn-login" class = "col-xs-12 col-md-12">
			    			<input  type = "submit" name = "login" value = "Login to your account"/>
			    		</div>
			    	</form>
			    	</div> <!-- end form -->
			    	<div class ="col-xs-3 col-md-4"></div>
			    	</div> <!-- end row -->
			    </div> <!-- end container -->
			</div>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src ="‪../../../bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>