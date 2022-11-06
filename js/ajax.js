$(document).on("click", "#add", function(e) {
    e.preventDefault();
    var name = $("#name").val();
    var mail = $("#mail").val();
    var phone = $("#phone").val();
    var pass = $("#pass").val();
    var add = $("#add").val();

    $.ajax({
        url: "users/insert.php",
        type: "post",
        data: {
            name: name,
            mail: mail,
            phone: phone,
            pass: pass,
            add: add
        },
        success: function(data) {
            console.log(data);
            $("#result").html(data);


        }
    });
    $("#form")[0].reset();

});

$(document).on("click", "#login", function(e) {
    e.preventDefault();
});