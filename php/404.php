<!--Main Page that will include all the other smaller sections (header, presentation, portofolio, about, contact, footer-->
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>App Solution - 404 Page Not Found</title>

    <meta name="description" content="The page you are looking for does not exist. Return to the main page.">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/8dd7dadaef.js"></script>

    <!--Google Fonts for this project-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Roboto:300" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--media="screen, handheld">-->
    <!--<link rel="stylesheet" type="text/css" href="enhanced.css" media="screen  and (min-width: 40.5em)" /> -->

    <!-- Icon -->
     <link rel="shortcut icon" href="../img/appsol.png"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->        
  </head>
  <body>

    <div id="wrapper">
      <?php
        include './phpComponents/header.php';
      ?>

      <div class="jumbotron errorPage text-center">
        <h1><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h1>
        <h1>Oops! The requested page was not found</h1>
        <a href="home" class="btn backBtn btn-lg" style="margin-top: 50px">Go back to site</a>
    </div>

      <?php
        include './phpComponents/footer.php';
      ?>
    </div>


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- The js script for this file -->
    <script src="../js/home.js"></script>
  </body>
</html>
