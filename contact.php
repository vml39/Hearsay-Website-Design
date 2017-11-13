  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>Hearsay A Cappella</title>
    <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
    <link rel="stylesheet" type ="text/css" href="styles/contact.css" media="all"/>
    <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="scripts/contact.js" type="text/javascript"></script>
  </head>

  <body>
    <!-- <?php
    include "includes/navigation.php";
    ?> -->

    <h1>Contact Us</h1>

    <p>We would love to hear from you. If you would like to know where we are performing next, information about our semester concert, would like us to perform at your event, or anything else, just ask!</p>

    <form id="contactForm" action="contact-response.php" method="post" novalidate>
      Name (required)<br/>
      <input id="name" class="formInput" name="name" type="text" required>
      <!-- this error message is hidden by default -->
      <span class="errorContainer hiddenError" id="nameError">
        <br/>Name is required.
      </span>

      <br/>Email (required)<br/>
      <input id="email" class="formInput" name="email" type="email" required>
      <!-- this error message is hidden by default -->
      <span class="errorContainer hiddenError" id="emailError">
        <br/>A valid email is required.
      </span>

      <br/>Message<br/>
      <textarea id="comments" class="formInput" name="comments" required></textarea>
      <!-- this error message is hidden by default -->
      <span class="errorContainer hiddenError" id="messageError">
        <br/>A message is required.
      </span>

    <br/><button type="submit" class="submit">Submit</button>
  </form>


    <!-- <?php
    include "includes/footer.php";
    ?> -->

  </body>
