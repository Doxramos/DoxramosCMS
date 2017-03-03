/**
 * Created by Chubs on 3/2/2017.
 */
$("#login_form").submit(function(e) {
    ClearErrors();
    var postURL = $("#post_url").val();
    var continuerun = true;
    e.preventDefault();
    if($("#login_username").val() === "") {
        $(".username_login").addClass("alert-danger");
        AddError("Username Cannot Be Empty");
        var continuerun = false;
    } else {
        $(".username_login").removeClass("alert-danger");
    }
    if($("#login_password").val() === "") {
        $(".password_login").addClass("alert-danger");
        AddError("Password Cannot Be Empty");
        var continuerun = false;
    } else {
        $(".password_login").removeClass("alert-danger");
    }
    if(continuerun === false) {
    } else {
        Login($(this), postURL);
    }
});
$("#logout_function").click(function(e) {
    e.preventDefault();
    var form = $("#logout_form");
    var postURL = $("#post_url").val();
    Login(form, postURL);
})
function AddError(errorMessage, postURL) {
    $(".login_error").addClass("alert-danger");
    $(".login_error").append("<br />" + errorMessage);
}
function ClearErrors() {
    $(".login_error").removeClass("alert-danger");
    $(".login_error").html("");
}
function Login(form, postURL) {
    $.ajax({
        type: "POST",
        url: postURL,
        data: form.serialize(),
        success: function (data) {
            if(isNaN(data)) {
                AddError(data);
            } else {
                location.reload();
            }
        }
    })
}