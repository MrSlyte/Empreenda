$(function(){
   $(".toggle").on('click', function(){
       if($(".menu").is(":visible")){
           $(".menu").hide();
       }else{
           $(".menu").show();
           $(".menu").css('padding-bottom', '1px');
           
       }
       $(".layout").toggleClass('ativo');
      
   });
});