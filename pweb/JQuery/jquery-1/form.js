$(function(){
    
    $("fname_error").hide();

    var error_fname = false;

    $("form-fname").focusout(function(){
        check_fname();
    });

    function check_fname() {
        var pattern = /^[a-z A-Z]*$/;
        var fname = $("#form-fname").val()
        if (pattern.test(fname) && fname !=='') {
            $("fname_error").hide();
        } else {
            $("fname_error").html("Should contain only characters");
            $("fname_error").show();
            error_fname = true;
        }
    }
})