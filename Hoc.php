<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap </title>
	<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href = "‪../../../bootstrap/css/bootstrap-theme.min.css"> 
  <style type="text/css">

  </style>
</head>
<body>
  <div class = "container">
    <p id ="demo"></p>
    <script type="text/javascript">
     // document.getElementById("demo").innerHTML =  typeof "Quyền"; // return kiểu của 1 biến
     //---------------------------------------------------------
      // var x = 12;
      // y = String(x);  // convert từ number -> string
      // if(x===y)
      //    document.getElementById("demo").innerHTML =  1;
      //  else
      //    document.getElementById("demo").innerHTML =  0;
      //-------------------------------------------
      var x = 5;
      var y = "6";
      var z = x+y;  // z: string

      document.getElementById("demo").innerHTML =  typeof(z);
       5 + null    // returns 5        because null is converted to 0
      "5" + null  // returns "5null"   because null is converted to "null"
      "5" + 2     // returns "52"      because 2 is converted to "2"
      "5" - 2     // returns 3         because "5" is converted to 5
      "5" * "2"   // returns 10        because "5" and "2" are converted to 5 and 2
    </script>

  </div>
  </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src ="‪../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>