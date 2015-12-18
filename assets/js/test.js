$(document).ready(function() {
    $("#password2").on("keypress, keyup", function() {
        if ($("#password2").val() == $("#password1").val() ) {
            $("#register").prop("disabled", false);
        }
    })
});
