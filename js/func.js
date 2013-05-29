$(document).ready(function () {

    $("body").on("click", ".say-hello", function () {
        var name = $.trim($("input[name='name']").val());
        var placeholder = $("#name");

        if (name === "") {
            name = "%username%";
        }

        $(placeholder).html(name);
        blink(placeholder);

        return false;
    });

});

function blink(obj) {
    var delay = 150;
    $(obj).fadeOut(delay, function () {
        $(this).fadeIn(delay, function () {
            $(this).fadeOut(delay, function () {
                $(this).fadeIn(delay);
            })
        })
    });
}