<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Clinic login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .error {color: #FF0000;}

    .navbar {
    margin-bottom: 0px;
    }

    .large{
      font-size: 150%;
    }

    #bgImage{

        background-image: url("images/bg 1.jpg");
        height:400px ;
        width: 100%;
        background-size: cover;
    }

    #page1Content{

      margin-top: 100px;
    }

    .centered {

      text-align: center;
    }
    </style>

  </head>
  <body>














  <?php
$passErr ='';
$namebool = false;
$passbool = false;
$nameErr ='';
$username = 'kamalhabieb@yahoo.ca';
$password = '12kimo34';
$enetred_name = '';
$entered_password = '';
if(isset($_POST["submit"])){
	
  if(!empty($_POST["name"])){
       $enetred_name = check($_POST["name"]);	
	     if(strcmp($username,$enetred_name)!=0 ){
		        $nameErr='incorrect E_mail';
	     }
	     else{
		        $namebool = true;
	     }
  }
  else{
       $nameErr = 'Please Enter the E_mail';
  } 
  if(!empty($_POST["password"])){
       $entered_password = check($_POST["password"]);
	     if(strcmp($entered_password,$password)!=0){
		        $passErr='incorrect Password';
	     }
	     else{
		        $passbool = true;
	     }
  }
  else{
       $passErr = 'Please Enter the Password';
  }
}
if($passbool && $namebool){
	header('Location: page2.html');
}
function check($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
//  $data = htmlentities($data);
return $data;
}


?>










    <div class="navbar navbar-default navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">

          <a href="" class="navbar-brand">
            <span class="glyphicon glyphicon-heart large" aria-hidden="true"></span>
            E-clinic</a>

          <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target=".navbar-collapse">

            <span class="sr-only">Toggle navigation </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>


        </div>

        <div class="collapse navbar-collapse">

           <ul class="nav navbar-nav navbar-right">

               <li class="centered active"><a href="">log in</a></li>
               <li class="centered"><a href="about.html">about us</a></li>

           </ul>
        </div>


      </div>
    </div>

    <div class="container" id="bgImage">
      <p><span class="error"></span></p>
      <form id="page1Content" method="POST">

        <div class="container">

          <div class="form-group">

            <label for = "login">Log In </label>
            <input name="name" type="email" placeholder="e-mail" class="form-control"/>
           	<span class="error"><?php echo $nameErr;?></span><br><br>
            <input name="password" type="password" placeholder="password" class="form-control">
            <span class="error"><?php echo $passErr;?></span><br><br>

          </div>


          <!--<div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Department
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div> -->


            <br/>
            <input type="submit" name="submit" value="Sign In"  class="btn btn-success"/>

            <br/><br/>

          </div>

      </form>

    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <script>
        $("#bgImage").css("height",$(window).height());
    </script>
  </body>
</html>
