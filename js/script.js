
jQuery(document).ready(function () {
    jQuery("#formID").validationEngine();
});
function checkHELLO(field, rules, i, options) {
    if (field.val() != "HELLO") {
        return options.allrules.validate2fields.alertText;
    }
}

$(document).ready(function () {
    $(".btnEliminarItem").click(function () {
        var id = $(this).attr("id").split("-")[1];
        $("#btnEliminar").attr("href", urlDelete + id);
    });

    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
        // Avoid following the href location when clicking
        event.preventDefault();
        // Avoid having the menu to close when clicking
        event.stopPropagation();
        // If a menu is already open we close it
        //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
        // opening the one you clicked on
        $(this).parent().addClass('open');

        var menu = $(this).parent().find("ul");
        var menupos = menu.offset();

        if ((menupos.left + menu.width()) + 30 > $(window).width()) {
            var newpos = -menu.width();
        } else {
            var newpos = $(this).parent().width();
        }
        menu.css({left: newpos});

    });
});