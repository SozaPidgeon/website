$(document).ready(function() {

    // get initial window width
    var width = $(window).width();
    resize(width);

    // on window resize get new width
    $(window).resize(function() {
        var width = $(window).width();
        resize(width);
    })
    
    // resize function takes width, sends request to server
    function resize(width) {

        // make request
        $.ajax({
            url: 'functions.php',
            type: 'GET', 
            data: {size : width},
            success: function(response) {
                // place server response in contents div
                $('#contents').html(response);
            }
        });
    }
});