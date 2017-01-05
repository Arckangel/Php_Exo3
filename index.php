<?php
$user =
    array( 'id' => '1', 'prenom' => 'Benjamin', 'nom' => 'Caroux', 'metier' => 'Développeur Web', 'tel' => '06.28.14.26.87', 'mail' => 'benjamin.caroux@gmail.com', 'portfolio' => 'www.portfolio.fr', 'facebook' => 'https://www.facebook.com/benjamin.caroux', 'twitter' => 'https://twitter.com/CarouxBenjamin', 'linkedin' => 'https://fr.linkedin.com/in/benjamin-caroux-553218129', 'viadeo' => 'http://fr.viadeo.com/en/');

    // array( 'id' => '2', 'prenom' => 'Eva', 'nom' => 'Price', 'metier' => 'Développeuse Web', 'tel' => '06.76.19.04.63', 'mail' => 'eva.price@gmail.com', 'portfolio' => 'www.portfolio.fr', 'facebook' => 'https://www.facebook.com/', 'twitter' => 'https://twitter.com/', 'linkedin' => 'https://fr.linkedin.com/', 'viadeo' => 'http://fr.viadeo.com/en/');

    // array( 'id' => '3', 'prenom' => 'Taliana', 'nom' => 'Zorah', 'metier' => 'Développeuse Web', 'tel' => '06.14.74.29.78', 'mail' => 'taliana.zorah@gmail.com', 'portfolio' => 'www.portfolio.fr', 'facebook' => 'https://www.facebook.com/', 'twitter' => 'https://twitter.com/', 'linkedin' => 'https://fr.linkedin.com/', 'viadeo' => 'http://fr.viadeo.com/en/');
?>

<!DOCTYPE html>
<html lang="fr">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Exo 3 PHP</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Font Awesome -->
      <script src="https://use.fontawesome.com/de7f2817e5.js"></script>


      <!-- Custom CSS -->
      <link href="css/main.css" rel="stylesheet">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style media="screen">
        .recto-card, .verso-card{
          <?php
            if ($user["id"]=="1") {
              echo "background: linear-gradient(to bottom, rgba(75, 75, 75, 1) 0%,rgba(60, 60, 60, 1) 13%,rgba(45, 45, 45, 1) 17%,rgba(70, 72, 73, 1) 100%);";
            }
            elseif ($user["id"]=="2") {
              echo "background: linear-gradient(to bottom, rgba(134, 104, 168, 1) 0%,rgba(103, 76, 134, 1) 13%,rgba(75, 51, 101, 1) 17%,rgba(97, 71, 126, 1) 100%);";
            }
            elseif ($user["id"]=="3") {
              echo "background: linear-gradient(to bottom, rgba(93, 150, 179, 1) 0%,rgba(75, 125, 150, 1) 13%,rgba(45, 91, 124, 1) 17%,rgba(96, 141, 186, 1) 100%);";
            }
            ?>
          }
      </style>
  </head>

  <body>
    <div class="container">

      <!-- Recto card -->
      <div class="row">
        <div class="col-xs-12 col-md-offset-3 col-md-6 recto-card">

          <div class="row">
            <div class="col-md-12 valign">
              <h1><?php echo $user["prenom"]." ".$user["nom"]; ?></h1><br>
              <p><?php echo $user["metier"]; ?></p>
            </div>
          </div><!-- /row -->

        </div>
      </div><!-- /row -->

      <!-- Verso card -->
      <div class="row">
        <div class="col-xs-12 col-md-offset-3 col-md-6 verso-card">

          <div class="row">
            <div class="col-xs-12">
              <h2><?php echo $user["prenom"]." ".$user["nom"]; ?></h2>
              <p><?php echo $user["metier"]; ?></p>
              <br>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <ul>
                <li><?php echo "Tel : ".$user["tel"]; ?></li>
                <li><?php echo $user["mail"]; ?></li>
                <li><a href="<?php echo $user["portfolio"]; ?>"><?php echo $user["portfolio"]; ?></li>
              </ul>
            </div>

            <div class="col-xs-6">
              <ul class="social-network">
                <li><a href="<?php echo $user["facebook"]; ?>"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $user["twitter"]; ?>"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $user["linkedin"]; ?>"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $user["viadeo"]; ?>"><i class="fa fa-viadeo-square fa-2x" aria-hidden="true"></i></a></li>
              </ul>
            </div>

          </div><!-- /row -->


        </div>
      </div><!-- /row -->

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/de7f2817e5.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/javascript.js"></script>


  </body>
</html>
