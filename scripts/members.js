$(document).ready(function() {

// how to correspond people to their information profiles so that I dont have to do this
// can I mix php with jquery??
  $("#belan").click( function(){
      $("#belan_info").toggle();
      // also need to hide the other profiles how to only have one profile open at the same time
  });
  $("#veronica").click( function(){
      $("#veronica_info").toggle();
  });
  $("#katie").click( function(){
      $("#katie_info").toggle();
  });

});
