$("#contactform").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Por favor, verifique o preenchimento dos campos.");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var token = $("#token").val();

    $.ajax({
        type: "POST",
        /*url: "assets/contact-form/php/form-action.php",*/
        url: "assets/includes/send-mail.php",
        data: "name=" + name + "&phone=" + phone + "&email=" + email + "&message=" + message + "&token=" + token,
        success : function(msg){
            if (msg.error == "false"){
                $("#contactform")[0].reset();
                submitMSG(true, msg.userMessage);
            } else {
                formError();
                submitMSG(false, msg.userMessage);
                console.log(msg.errorMessage);
            }
        }
    });
}

function formError(){
    $("#contactform").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 tada animated text-success";
    } else {
        var msgClasses = "text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
