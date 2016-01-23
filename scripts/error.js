$(function () {
    $("#email").on('click',function(event){
        event.preventDefault();

        var reference = $(".errorDetails").attr("reference");
        var email = "moi@artmoi.com";
        var subject = "[Portfolio] Error Reporting :: Reference # " + reference;
        var body = $(".errorDetails").text();
        var fullEmail = "mailto:" + email + "?subject=" + subject + "&body= **** Error Message **** \n" + encodeURIComponent(body);

        location.href = fullEmail;
        return false;
    });
});