
$( '.part>li>a' ).on( "click", function() {
       var player_id = $(this).data('data-bas');
       var player_text = $('#'+player_id).text();
       if(player_text!=''){
           $('#'+player_id).html(player_text);
       }
       var tab_id = $(this).attr('data-bas');
       $('.izle2').removeClass('db');
       $("#"+tab_id).addClass('db');
   });
