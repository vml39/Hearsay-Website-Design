<?php
session_start();
$email = $_REQUEST["email"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hearsay A Cappella</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/contact.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/alumni.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>

<body>
  <?php
  include "includes/navigation.php";
  ?>

  <div class="body_container">

  <h1>Alumni</h1>
  <p>Thank you for being a part of Hearsay! We have added <?php echo( htmlspecialchars($email) ); ?> to our mailing list.</p>

  </br>
  </br>
  </br>
  </br>
  </br>
  </div>

  <?php
  include "includes/footer.php";
  ?>

</body>
