    //equalize newsbox and content divs height script

      $(function(){
          $("#slides").css({'height':($(".slide").height()+'px')});
          $("#newsbox").css({'height':($("#content").height()+'px')});
      });