$(document).ready(function(){
    $(".sidebar ul li").on('click' , function(){
        $(this).addClass('active')
    });

    $(".open-btn").on('click', function(){
        $('.sidebar').addClass('active');
    });

    $(".close-btn").on('click', function(){
        $('.sidebar').removeClass('active');
    });

});

