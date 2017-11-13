$(document).ready(function() {

  // // change border of boxes to purple on click
  // $(".formInput").click( function () {
  //   $(".formInput").css("border", "1px solid purple");
  // });

  $("#contactForm").on("submit", function() {
    // assume the form is valid, unless we find an invalid field
    formValid = true;

    nameIsValid = $("#name").prop("validity").valid;
    if(nameIsValid) {
     $("#nameError").hide();
    } else {
     $("#nameError").show();
     formValid = false;
    }

    emailIsValid = $("#email").prop("validity").valid;
    if(emailIsValid) {
     $("#emailError").hide();
    } else {
     $("#emailError").show();
     formValid = false;
    }

    messageIsValid = $("#comments").prop("validity").valid;
    if(messageIsValid) {
     $("#messageError").hide();
    } else {
     $("#messageError").show();
     formValid = false;
    }

    return formValid;

  });

});
