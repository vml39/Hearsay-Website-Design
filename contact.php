<?php
// Stores the name of the class for hidden error messages
$HIDDEN_ERROR_CLASS = "hiddenError";

// request all of the variables
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$listserv = $_REQUEST["listserv"];
$message = $_REQUEST["message"];
$submit = $_REQUEST["submit"];

if (isset($submit)) {

  // validating each field
  $nameValid = !empty($name);
  $emailValid = !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
  $messageValid = !empty($message);

  $formValid = $nameValid && $emailValid && $messageValid;

  if ($formValid) {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION["listserv"] = $listserv;
    $_SESSION['message'] = $message;

    // redirect to contact-response.php
    header("Location: contact-response.php");
    return;
  }
} else {
  // no form submitted, default behavior
  $nameValid = true;
  $emailValid = true;
  $messageValid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hearsay A Cappella</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/contact.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/contact.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>

<body>
  <?php
  include "includes/navigation.php";
  ?>

  <div class="body_container">

    <h1>Contact Us</h1>

    <p>We would love to hear from you. If you would like to know where we are performing next, information about our semester concert, would like us to perform at your event, or anything else, just ask!</p>

    <form id="contactForm" method="post" action="contact.php" novalidate>
      <span>Name (required)</span><br/>
      <input id="name" class="formInput" name="name" type="text" value="<?php echo($name);?>" required>
      <!-- this error message is hidden by default -->
      <span class="errorContainer <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
        <br/>Name is required.
      </span>

      <br/><span>Email (required)</span><br/>
      <input id="email" class="formInput" name="email" type="email" value="<?php echo($email);?>" required>
      <!-- this error message is hidden by default -->
      <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="emailError">
        <br/>A valid email is required.
      </span>

      <input type="checkbox" name="listserv" value="No"><span>Would you like to join our listserv?</span><br/>
      <!-- if isset, then send the email to the hearsay listserv -->

      <br/><span>Message</span><br/>
      <textarea id="message" class="formInput" name="message" required><?php echo($message);?></textarea>
      <!-- this error message is hidden by default -->
      <span class="errorContainer <?php if ($messageValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="messageError">
        <br/>A message is required.
      </span>

      <br/><button name="submit" type="submit" class="submit" id="contact_submit">Submit</button>
    </form>

  </div>

  <?php
  include "includes/footer.php";
  ?>

</body>
