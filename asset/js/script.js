$(document).ready(function(){
     $('#capsule').delay(1100).fadeOut();

          $("#burger").click(function(event){
               $("#supermenu").addClass('ok'),
               $("#agenda").removeClass('ok').addClass('ko'),
               $("#live").removeClass('ok').addClass('ko'),
               $("#info").removeClass('ok').addClass('ko'),
               $("#don").removeClass('ok').addClass('ko'),
               $("#chant").removeClass('ok').addClass('ko'),
               $("#priere").removeClass('ok').addClass('ko'),
               $("#actu").removeClass('ok').addClass('ko'),
               $("#cb").removeClass('ok').addClass('ko')

          });

$(".btn").click(function(event){
     $("#supermenu").removeClass('ok').addClass('ko'),
     $("#actu").removeClass('ko').addClass('ok');

});

 $("#m-agenda").click(function(event){
     $("#supermenu").removeClass('ok').addClass('ko'),
     $("#agenda").removeClass('ko').addClass('ok');
        
   }),

     //    $("#m-live").click(function(event){
     //      $("#supermenu").removeClass('ok').addClass('ko'),
     //      $("#live").removeClass('ko').addClass('ok');
          
     //    }),


   $("#m-info").click(function(event){
     $("#supermenu").removeClass('ok').addClass('ko'),
     $("#actu").removeClass('ko').addClass('ok');
        
   }),

   $("#m-don").click(function(event){
     $("#supermenu").removeClass('ok').addClass('ko'),
     $("#don").removeClass('ko').addClass('ok');
        
   }),

   $("#don_cb").click(function(event){
     $("#supermenu").removeClass('ok').addClass('ko'),
     $("#don").removeClass('ok').addClass('ko'),
     $("#cb").removeClass('ko').addClass('ok');     
   }),

   $("btnCb").click(function(event){
     $("#actu").removeClass('ok').addClass('ko')
     }),

   $("#m-chant").click(function(event){
     $("#supermenu").removeClass('ok').addClass('ko'),
     $("#chant").removeClass('ko').addClass('ok');
        
   }),

   $("#m-priere").click(function(event){
     $("#supermenu").removeClass('ok').addClass('ko'),
     $("#priere").removeClass('ko').addClass('ok');
        
   }),


   $(".accordeon").click(function(event){
    $(this).css('height','auto');
      
   })


 });

//  if( $("#supermenu").hasClass('ok')==true || $("#supermenu").hasClass('')==true ){
//      $("#agenda", "#live", "#info", "#don", "#chant", "#priere").removeClass('ok').addClass('ko');
//    }else if($("#supermenu").hasClass('ko')==true ){
//      $("#supermenu").removeClass('ko').addClass('ok'),