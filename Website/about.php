<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>About Us</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    .navbar {
    margin-bottom: 0px;
    }

    .jumbotron{
    height: 100vh;
    }

    .large{
      font-size: 150%;
    }

    #logo{

      border-right: 1px white solid;
    }


    #bgImage{

        background:url("images/bg 3.jpg");
        min-height : 100%;
        min-width : 100%;
        background-size:100% 100%;
        background-repeat:no-repeat;
        overflow-y: hidden;
        overflow-x: hidden;
        background-size: cover;
    }

    #page3Content{

      margin-top: 100px;
    }


    .white{

      color:#f9f9f9;
    }

    .largeText{
      font-size :300%;
    }

    .bold {
      font-weight: bold;
    }

    .cursive{

      font-family: "Comic Sans MS", cursive, sans-serif;
        font-weight: bold;
      font-style: normal;
    }

    .centered {

      text-align: center;
    }

    #problemHeader{

      color: #E9EDF0;
      font-weight:bold;
      font-family:Impact, Charcoal, sans-serif  ;
      font-size: 20px;
      -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: black;
    }


    #head{

      text-align: center;
      margin-top: 100px;

    }

    </style>

  </head>
  <body>

  
    <!-- start navbar  -->
    <div class="navbar navbar-default navbar-fixed-top ">

      <div class="container">

        <div class="navbar-header">

          <a href="" class="navbar-brand" id="logo">
          <span class="glyphicon glyphicon-heart large " aria-hidden="true"></span> E-Clinic</a>

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

 <script>
  history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
</script>
<?php
session_start();
if($_SESSION['log']==true){
  echo'      <li class="centered"><a href="log_out.php">log out</a></li>
             <li class="centered"><a href="profile.php">Profile</a></li>
             <li class="centered active"><a href="">about us</a></li>';
}
else{
  echo'      <li class="centered "><a href="main.php">main page</a></li>
             <li class="centered active"><a href="">about us</a></li>
             ';
}
?>
        
           </ul>
        </div>


      </div>
    </div>

      <!-- end navbar  -->

      <div class="container" id="bgImage">

        <div id="page3Content">

          <h1 class="centered largeText white cursive"> E-Doctor System</h1>

          <ul>
            <li id="problemHeader" >
              <h2  style="font-size:200%">The Problem We Target:</h2>

              <h3 > Day to day accidents forces patients to appeal to hospitals and clinics. Large and famous city hospitals has various departments, for example : Cardiology department, Critical care department, Ear nose and throat department ,etc.. Each of which has its own functions and own doctors, for each department there is the database system holding the complete information about its patients.
Larger databases and more patients leads to less ability for the doctors to gather enough information about the patients which leads to difficulty in scheduling their tasks and less ability in scheduling their appointments with patients and monitoring their daily objectives.
These problems may lead to messy work environment and worsen the quality of social environment inside the hospital.
</h3>

            </li>
          </ul>


        </div>
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
