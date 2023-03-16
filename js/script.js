$(".btn").click(function () {
    opt1 = $("#opt1").val();
    opt2 = $("#opt2").val();
    val1 = $("#val1").val();
    val2 = $("#val2");
    to = $("#type").val();
    data = { "type": to, "o1": opt1, "o2": opt2, "v1": val1 };

    $.ajax({
        method: "POST",
        url: "/conversion.php",
        dataType: "json",
        data: data,
        success: function (val) {
            // debugger;
            val2.val(val);
        },
        error: function () {
            window.alert("Failed");
        }
    });
})