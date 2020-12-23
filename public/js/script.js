//let cl = 0;
//let text = document.querySelector('#text')
//$('#lele').on('click',function(){  
//    if(cl < 1){
//        $('#kek').animate({height:'422px'},100)
//        cl++;
//        $('#lele').css({rotate:'180deg'})
//        $('#lele').animate({top:'380px'},100)
//        $('#order,#h2,#order2,#a').toggle(100);
//    }
//     else if(cl >= 1){
//        $('#kek').animate({height:'290px'},100)
//        $('#lele').css({rotate:'360deg'})
//        $('#lele').animate({top:'250px'},100)
//        $('#order,#h2,#order2,#a').toggle();
//        cl = 0;
//    }
//})
//$('#order').on('mouseover',function(){
//    $('#order').animate({top:'367px',right:'823px'},100)
//})
//$('#order').on('mouseout',function(){
//    $('#order').animate({top:'370px',right:'820px'},100)
//})

let cl = 0;
$('#newletter').on('click',function(){
    if(cl < 1){
        $('#message').slideToggle(1000);
        $('#down').css({rotate:'180deg'});
        cl++;
    }
    else if(cl<2){
        $('#message').slideToggle(1000);
        $('#down').css({rotate:'360deg'});
        cl = 0;
    }
})
//data
$('#dowN').on('click',function(){
        $('#data1').animate({height:'476px'},1000);
        $('#dowN').css({display:'none'})
        $('#down2').css({display:'block'})
        $('#down2').css({rotate:'180deg'})
        $('#zxc').slideToggle();
})
$("#down2").on('click',function(){
    $('#zxc').slideToggle();
    $('#data1').animate({height:'66px'},1000);
    $('#down2').css({display:'none'})
    $('#dowN').css({display:'block'})
})
//contacts
$('#DOWN').on('click',function(){
    $('#contacts').animate({height:'476px'},1000)
    $('#asd').slideToggle();
    $('#DOWN').css({display:'none'})
    $('#down3').css({display:'block'})
    $('#down3').css({rotate:'180deg'})
    
})
$("#down3").on('click',function(){
   $('#asd').slideToggle();
   $('#contacts').animate({height:'66px'},1000);
   $('#down3').css({display:'none'})
   $('#DOWN').css({display:'block'})
})
//pasport
$('#dOWN').on('click',function(){
    $('#pasport').animate({height:'476px'},1000)
    $('#iop').slideToggle();
    $('#dOWN').css({display:'none'})
    $('#down4').css({display:'block'})
    $('#down4').css({rotate:'180deg'})
    
})
$("#down4").on('click',function(){
   $('#iop').slideToggle();
   $('#pasport').animate({height:'66px'},1000);
   $('#down4').css({display:'none'})
   $('#dOWN').css({display:'block'})
})
//karta
$('#DoWN').on('click',function(){
    $('#karta').animate({height:'476px'},1000)
    $('#karta1').slideToggle();
    $('#DoWN').css({display:'none'})
    $('#down5').css({display:'block'})
    $('#down5').css({rotate:'180deg'})
    
})
$("#down5").on('click',function(){
   $('#karta1').slideToggle();
   $('#karta').animate({height:'66px'},1000);
   $('#down5').css({display:'none'})
   $('#DoWN').css({display:'block'})
})
//dopinfo
$('#DoWN1').on('click',function(){
    $('#dopInfo').animate({height:'476px'},1000)
    $('#dopInfo1').slideToggle();
    $('#DoWN1').css({display:'none'})
    $('#down6').css({display:'block'})
    $('#down6').css({rotate:'180deg'})
    
})
$("#down6").on('click',function(){
   $('#dopInfo1').slideToggle();
   $('#dopInfo').animate({height:'66px'},1000);
   $('#down6').css({display:'none'})
   $('#DoWN1').css({display:'block'})
})
