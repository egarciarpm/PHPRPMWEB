$(document).ready(function(){

   // jQuery methods go here...



$('.promodesc').hide();
$('.jumbotron').hide();
$('.blogdesc').hide();

$('.headerdesc1').hide();
$('.rpmdesc').hide();
$('#suite1desc').hide();
$('#suite2desc').hide();
$('#suite3desc').hide();
$('.jumbotron').delay(250).slideDown(1500);

$('.headerdesc1').delay(1750).slideDown(500);   

$('.promo').click(function(){
    $('.promodesc').slideToggle(1500);
});
$('.testhead').click(function(){
    $('.testdesc').slideToggle(1500);
});
$('.bloghead').click(function(){
    $('.blogdesc').slideToggle(750);
});
$('.rpmhead').click(function(){
    $('.rpmdesc').slideToggle(1500);
    $('.rpmshort').slideToggle(500);
});
$('.suite1head').click(function(){
    $('.suite1short').slideToggle(500);
    $('#suite1desc').slideToggle(500);
});
$('.suite2head').click(function(){
    $('.suite2short').slideToggle(500);
    $('#suite2desc').slideToggle(500);
});
$('.suite3head').click(function(){
    $('.suite3short').slideToggle(500);
    $('#suite3desc').slideToggle(500);
});

$('.scart').click(function(){
    $('.scart').attr('src','../images/cart.png');
    $(this).attr('src','../images/cartactive.png');
});
$('.scart1').click(function(){
    $('.scart1').attr('src','../images/cart.png');
    $(this).attr('src','../images/cartactive.png');
});
$('.scart2').click(function(){
    $('.scart2').attr('src','../images/cart.png');
    $(this).attr('src','../images/cartactive.png');
});
$('.scart3').click(function(){
    $('.scart3').attr('src','../images/cart.png');
    $(this).attr('src','../images/cartactive.png');
});
});

