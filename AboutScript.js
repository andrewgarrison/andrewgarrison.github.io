$(document).ready(function () {
        $("#nav ul li a").click(function() {
            $("nav ul li a ").removeClass("selected");
            $(this).addClass("selected")
        })
    })