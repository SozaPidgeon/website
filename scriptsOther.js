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
            data: {size : width, type : 'other'},
            success: function(response) {
                // place server response in contents div
                $('#contents').html(response);
            }
        });
    }

    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
        else {
            document.documentElement.setAttribute('data-theme', 'light');
        }    
    }

    toggleSwitch.addEventListener('change', switchTheme, false);

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark'); //add this
        }
        else {
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light'); //add this
        }    
    }

    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);

        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
        }
    }
});