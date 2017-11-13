<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hearsay A Cappella</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/members.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/members.js" type="text/javascript"></script>
</head>

<body>
  <!-- <?php
   include "includes/navigation.php";
   ?> -->

   <h1>Current Members</h1>

   <!-- display members in a grid fashion with three profiles per grid -->
   <div class="container">
    <div class="first profile">
      <!-- trigger the modal -->
      <button id="modal_btn">
        <img alt="" src="images/gray.jpg">
      </button>
      <!-- modal -->
      <div id="modal">
      <!-- modal content -->
        <div id="modal_content">
          <span class="close">&times;</span>
          <p>some stuff that pops up</p>
        </div>
      </div>
    </div>
    <div class="second profile">
      <img alt="" src="images/gray.jpg">
    </div>
    <div class="third profile">
      <img alt="" src="images/gray.jpg">
    </div>
   </div>

   <div class="container">
    <div class="first profile">
      <img alt="" src="images/gray.jpg">
    </div>
    <div class="second profile">
      <img alt="" src="images/gray.jpg">
    </div>
    <div class="third profile">
      <img alt="" src="images/gray.jpg">
    </div>
  </div>


   <!-- <?php
   include "includes/footer.php";
   ?> -->

</body>
