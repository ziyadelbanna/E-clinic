
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Clinic</title>

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

    .large{
      font-size: 150%;
    }

    #logo{

      border-right: 1px white solid;
    }

    #bgImage{

        background: url("images/bg 2.jpg");
        position: fixed;
        height:100% ;
        width: 100%;
        background-size: cover;
    }

    #page2Content{

      margin-top: 90px;
    }

    .centered {

      text-align: center;
    }

    .tableText{

      color: #E9EDF0;
      font-weight:bold;
      font-family:Impact, Charcoal, sans-serif  ;
      font-size: 20px;
      -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: black;

    }

    </style>

  </head>
  <body>
          <?php

          include'Checking user.php'; 
          session_start();
          $_SESSION['log'] = true;
          $user_surname = $_SESSION['surname'];
          $_SESSION['chosen_date'] = date('d-m-Y');
          ?>

    <!-- start navbar  -->
    <div class="navbar navbar-default navbar-fixed-top ">

      <div class="container">

        <div class="navbar-header">

          <a href="" class="navbar-brand" id="logo">
          <span class="glyphicon glyphicon-heart large " aria-hidden="true"></span> E-Clinic : <?php echo "   Hello DR.  ".$user_surname;?></a>

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

             <li class="centered"><a href="log_out.php">log out</a></li>
             <li class="centered"><a href="about.php">about us</a></li>

           </ul>
        </div>


      </div>
    </div>

      <!-- end navbar  -->
              <?php
              if(isset($_GET['show'])&&isset($_GET['date'])){
                $_SESSION['chosen_date'] = $_GET['date'];
                $_SESSION['chosen'] = true;
              }
              else{
            if(!$_SESSION['chosen'] = true)
               $_SESSION['chosen_date'] = date('d-m-Y'); 
            }
              ?>
        <div  style='overflow: auto;' class="container" id="bgImage">

          <div id="page2Content">

              <h2> This Is <?php echo  $_SESSION['chosen_date']."'s Schedule" ;?> </h2>
                <form method="GET" action="">
                <input type="date" name="date" > Date
                <input type="submit" name="show" value="Show">
                </form>

              <br>
            <!-- Start of popup modal -->

            <div class="modal" id="myModel">

              <div class="modal-dialog modal-md">

                <div class="modal-content">

                  <div class="modal-header">

                    <button class="close" data-dismiss = "modal">x</button>

                    <h4 class="modal-title">Actions</h4>

                  </div>


                  <div class="modal-body">

                    Choose the patient and the action you want to perform .<br><br>
                    <?php
                    include'Actions.php';
                    ?>
                  </div>

                  <div class="modal-footer">

                    <button class="btn btn-success" data-dismiss="modal">Cancel</button>

                  </div>
                </div>


              </div>

            </div>

            <!-- end of popup modal -->
                              <table class="table table-hover tableText">
                  <?php
                  include'get table.php';
                  include 'print table.php';
                  
                  ?>

                  </table >

                        <!-- launch Modal btn-->
                        <button class="btn btn-success" data-toggle="modal" data-target= "#myModel">
                          Actions
                          </button>

          </div>

        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
