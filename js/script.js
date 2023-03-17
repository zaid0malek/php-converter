$(".btn").click(function () {
    var opt1 = $("#opt1").val();
    var opt2 = $("#opt2").val();
    var val1 = $("#val1").val();
    var val2 = $("#val2");
    var to = $("#type").val();
    var data = { "type": to, "o1": opt1, "o2": opt2, "v1": val1 };

    $.ajax({
        method: "POST",
        url: "/conversion.php",
        dataType: "json",
        data: data,
        success: function (val) {
            val2.val(val);
        },
        error: function () {
            window.alert("Failed");
        }
    });
})