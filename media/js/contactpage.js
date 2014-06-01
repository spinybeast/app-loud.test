$(function () {
    $('select').selectbox({
        onOpen: function (inst) {
            $(".sbHolder").addClass("filled");
        },
        onClose: function (inst) {
            if ($("select").val() == "") {
                $(".sbHolder").removeClass("filled");
            }
        },
        onChange: function (inst) {
            $("label[for='mailSubject']").addClass("filled");
        }
    });

    $(".sbOptions>li:first").addClass("first");
    $(".sbOptions>li:last").addClass("last");

    $("input[type=text]").on("focus", function () {
        $(this).addClass("filled");
    }).on("blur", function () {
        var label = $("label[for='" + $(this).attr("id") + "']");
        if ($(this).val() != "") {
            label.addClass("filled");
        } else {
            $(this).removeClass("filled");
            label.removeClass("filled");
        }
    });
    $("textarea").on("focus", function () {
        $(".text").addClass("filled");
    }).on("blur", function () {
        if ($(this).val() == "") {
            $(".text").removeClass("filled");
        }
    });
});
function checkContactsForm() {
    $(".button").addClass("disabled").attr("disabled", "disabled");
    $("span[id$='Error']").empty();

    $.ajax({
        url: "/ajax/contact",
        data: $("form").serialize(),
        type: "POST",
        dataType: "json",
        beforeSend: function () {
            $(".ajax_loader").show();
        },
        complete: function () {
            $(".ajax_loader").hide();
        },
        success: function (response) {
            $(".button").removeClass("disabled").removeAttr("disabled");
            if (response.status == 'error') {
                for (var errorElement in response.errors) {
                    $("#" + errorElement + "Error").text(response.errors[errorElement]);
                }
            }
            if (response.status == 'success') {
                $("form").trigger('reset');
                refreshCaptcha();
                $(".filled").removeClass("filled");
                $("#mailError").text(response.message);
            }
        }
    });
}

function refreshCaptcha() {
    $("img.captcha").attr("src", "/captcha/default?id=" + Math.floor(Math.random() * 1000000));
}