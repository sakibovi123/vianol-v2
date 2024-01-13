// Sidebar active//
$(document).on('click', '#sidebar li', function(){
    $(this).addClass('active').siblings().removeClass('active')
});

//Sidebar dropdown toggle//
$('.sub-menu ul').hide();
$('.sub-menu a').click(function(){
    $(this).parent('.sub-menu').children('ul').slideToggle('100');
    $(this).find('.right').toggleClass('fa-caret-up fa-caret-down');
});


//Sidebar Toggle//
$(document).ready(function(){
    $('#toggleSidebar').click(function(){
        $('.left-menu').toggleClass('hide');
        $('.content-wrapper').toggleClass('hide');
    });
});


//Data table js//
$(document).ready(function () {
    $('#order-table').DataTable();
});