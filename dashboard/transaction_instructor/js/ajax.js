// select data 

function fetch() {

    $.ajax({
        url: "fetch.php",
        type: "post",
        success: function(data) {
            $("#fetch").html(data);

        }
    });
};
fetch();

// inserrt data

$(document).on("click", "#add", function(e) {
    e.preventDefault();
    var name = $("#name").val();
    var phone = $("#phone").val();
    var age = $("#age").val();
    var email = $("#email").val();
    var address = $("#address").val();
    var experiance = $("#experiance").val();
    var position = $("#position").val();
    var title = $("#title").val();
    var pass = $("#pass").val();
    var add = $("#add").val();

    $.ajax({
        url: "insert.php",
        type: "post",
        data: {
            name: name,
            phone: phone,
            age: age,
            email: email,
            address: address,
            experiance: experiance,
            position: position,
            title: title,
            pass: pass,
            add: add
        },
        success: function(data) {
            fetch();
            $("#result").html(data);

        }
    });
    $("#form")[0].reset();
});


// delete data 

$(document).on("click", "#del", function(e) {
    e.preventDefault();

    if (window.confirm("do you want delete this data")) {

        var del_id = $(this).attr("value");

        $.ajax({
            url: "delete.php",
            type: "post",
            data: {
                del_id: del_id
            },
            success: function(data) {
                fetch();
                $("#show").html(data);

            }
        });

    } else {
        return false;
    }

});





// edit data 

$(document).on("click", "#edit_id", function(e) {
    e.preventDefault();


    var edit_id = $(this).attr("value");

    $.ajax({
        url: "edit.php",
        type: "post",
        data: {
            edit_id: edit_id
        },
        success: function(data) {
            $("#edit_data").html(data);

        }
    });



});



// update data

$(document).on("click", "#update", function(e) {
    e.preventDefault();
    var edit_name = $("#edit_name").val();
    var edit_phone = $("#edit_phone").val();
    var edit_address = $("#edit_address").val();
    var edit_age = $("#edit_age").val();
    var update = $("#update").val();
    var edit_id = $("#edit_id").val();


    $.ajax({
        url: "update.php",
        type: "post",
        data: {
            edit_id: edit_id,
            edit_name: edit_name,
            edit_phone: edit_phone,
            edit_address: edit_address,
            edit_age: edit_age,
            update: update
        },
        success: function(data) {
            fetch();
            $("#rrrr").html(data);

        }
    });
});