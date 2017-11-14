<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hearsay A Cappella</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/members.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/members.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>

<body>
  <?php
   include "includes/navigation.php";
   ?>

   <div class="body_container">

     <h1>Meet the Hearsayers</h1>

     <!-- display members in a grid fashion with three profiles per grid -->
     <!-- tried to do a popup modal but still trying to figure it out, using https://www.w3schools.com/howto/howto_css_modals.asp -->
     <div class="container">
      <div class="first profile">
        <!-- trigger the modal -->
        <!-- <button id="modal_btn"> -->
          <img alt="" src="images/members/belan.png">
          <p>Belan Antensaye, Co-Social Chair</p>
        <!-- </button> -->
        <!-- modal -->
        <!-- <div id="modal"> -->
        <!-- modal content -->
          <!-- <div id="modal_content">
            <span class="close">&times;</span>
            <p>some stuff that pops up</p>
          </div>
        </div> -->
      </div>
      <div class="second profile">
        <img alt="" src="images/members/veronica.jpg">
        <p>Veronica Dickson, Co-Social Chair</p>
      </div>
      <div class="third profile">
        <img alt="" src="images/members/katie.jpeg">
        <p>Katie O’Neill, Musical Director</p>
      </div>
     </div>

     <div class="container">
      <div class="first profile">
        <img alt="" src="images/members/chrissy.jpg">
        <p>Chrissy Chen, Co-Social Chair</p>
      </div>
      <div class="second profile">
        <img alt="" src="images/members/samantha.jpg">
        <p>Samantha Li, President</p>
      </div>
      <div class="third profile">
        <img alt="" src="images/members/anna.jpg">
        <p>Anna Bores, Assistant Musical Director</p>
      </div>
    </div>

    <div class="container">
     <div class="first profile">
       <img alt="" src="images/members/lydia.png">
       <p>Lydia Clemente</p>
     </div>
     <div class="second profile">
       <img alt="" src="images/members/audrey.jpg">
       <p>Audrey Kennedy, Vice President</p>
     </div>
     <div class="third profile">
       <img alt="" src="images/members/danica.jpg">
       <p>Danica Lee, Business Manager</p>
     </div>
   </div>

   <div class="container">
    <div class="first profile">
      <img alt="" src="images/members/quyen.jpg">
      <p>Quyen Nguyen, Marketing Chair</p>
    </div>
    <div class="second profile">
      <img alt="" src="images/members/lily.jpg">
      <p>Lily Pagan</p>
    </div>
    <div class="third profile">
      <img alt="" src="images/members/mihoko.jpg">
      <p>Mihoko Sakanaka</p>
    </div>
  </div>

  <div class="container">
   <div class="first profile">
     <img alt="" src="images/members/sam_ng.jpg">
     <p>Samantha Ng, Social Media Chair</p>
   </div>
   <div class="second profile">
     <img alt="" src="images/members/vanessa.jpg">
     <p>Vanessa Okoyeh</p>
   </div>
   <div class="third profile">
     <img alt="" src="images/members/chase.jpg">
     <p>Chase Kauder</p>
   </div>
  </div>

  <div class="container">
   <div class="first profile">
     <img alt="" src="images/members/jillian.jpg">
     <p>Jillian Berkowitz</p>
   </div>
   <div class="second profile">
     <img alt="" src="images/members/melissa.jpg">
     <p>Melissa Gao</p>
   </div>
  </div>

  </div>

   <?php
   include "includes/footer.php";
   ?>

</body>
