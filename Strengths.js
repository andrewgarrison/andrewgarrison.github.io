$(document).ready(function() {
    // trigger the function when clicking on an assigned element
    $(".toggle").click(function () {
        // check the visibility of the next element in the DOM
        if ($(this).next().is(":hidden")) {
            $(this).next().slideDown("fast"); // slide it down
        } else {
            $(this).next().hide(); // hide it
        }
    });
});