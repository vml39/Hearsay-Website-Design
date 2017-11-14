$(document).ready(function() {

  $("#alum_contact").on("submit", function() {
    // assume the form is valid, unless we find an invalid field
    formValid = true;

    alumEmailIsValid = $("#alum_email").prop("validity").valid;
    if(alumEmailIsValid) {
     $("#alumEmailError").hide();
    } else {
     $("#alumEmailError").show();
     formValid = false;
    }

    return formValid;

  });

});
