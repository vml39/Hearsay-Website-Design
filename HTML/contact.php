<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hearsay A Cappella</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
</head>

<body>
  <!-- <?php
  include "includes/navigation.php";
  ?> -->

  <h1>Contact Us</h1>

  <p>We would love to hear from you. If you would like to know where we are performing next, information about our semester concert, would like us to perform at your event, or anything else, just ask!</p>

  <div class="labelAndInputHolder">
    <div class="labelHolder">
      <label for="name">Name(required): </label>
    </div>
    <div class="inputHolder">
      <input id="name" name="name" required>
    </div>
    <!-- this error message is hidden by default -->
    <span class="errorContainer hiddenError" id="nameError">
      Name is required.
    </span>
  </div>

  <div class="labelAndInputHolder">
    <div class="labelHolder">
      <label for="email">Email(required): </label>
    </div>
    <div class="inputHolder">
      <input id="email" name="email" required>
    </div>
    <!-- this error message is hidden by default -->
    <span class="errorContainer hiddenError" id="emailError">
      Email is required.
    </span>
  </div>

  <div class="labelAndInputHolder">
    <div class="labelHolder">
      <label for="message">Message(required): </label>
    </div>
    <div class="inputHolder">
      <textarea id="message" name="message" required></textarea>
    </div>
    <!-- this error message is hidden by default -->
    <span class="errorContainer hiddenError" id="messageError">
      Message is required.
    </span>
  </div>

  <button type="submit" class="submit">Submit</button>


  <!-- <?php
  include "includes/footer.php";
  ?> -->

</body>
