$(document).ready(function(){
    var notification = false;                 
    var friends = false;
    var results = false;
    var settings = false;
     
    $(".first").click(function(){       
        notification = !notification;                
        if(notification){
            $(".notification").fadeIn(1);           
        }else{
            $(this).css('border','');     
            $(".notification").fadeOut(1);
        } 
        if(friends){
            $(".frienddropwrap").fadeOut(1)
            friends = !friends;
        }
        
        $("#orders").click(function(){
            var url = "orders.php";
            $(location).attr('href',url);  
        });
        $("#order_search").click(function(){
            var result = prompt('Digite o numero da ordem de serviço: ');
            var url = "order_detail.php?id="+result;
            $(location).attr('href',url);  
        });
        $("#order_new").click(function(){
            var url = "orders_new.php";
            $(location).attr('href',url);  
        });
        $("#orders_laboratory").click(function(){
            var url = "orders_laboratory.php";
            $(location).attr('href',url);  
        });
        $("#orders_lens").click(function(){
            var url = "orders_lens.php";
            $(location).attr('href',url);  
        });
    });
       
    $(".third").click(function(){                         
        friends = !friends;                
        if(notification){
            $(".notification").fadeOut(1);
            notification = !notification;                        
        }
        if(friends){
            $(".frienddropwrap").fadeIn(200);                
        }else{
            $(".frienddropwrap").fadeOut(1);    
        }
         $("#sellers").click(function(){
            var url = "sellers.php";
            $(location).attr('href',url);  
        });
    });  
        
    $(".ignorebutton,.confirmbutton").mouseover(function (){
        friends = false;
    } );
    $(".ignorebutton,.confirmbutton").mouseout(function (){
        friends = true;
    } );
                            
    $(".midwht,.homlft,.hommid,.friendright").mouseover(function (){                        
        //        $(".topinner").mouseout(function(){                        
        if(settings){
            $(".settings").fadeOut(1);                             
            settings = false;
        }
        if(friends){
            $(".frienddropwrap").fadeOut(1);         
            friends = false;
        }
        if(notification){
            $(".notification").fadeOut(1);
            notification = false;
        }
    });        
    
    
     
    $(".midwht,.homlft,.hommid,.friendright").click(function (){                        
        //        $(".topinner").mouseout(function(){                        
        if(settings){
            $(".settings").fadeOut(1);                             
            settings = false;
        }
        if(friends){
            $(".frienddropwrap").fadeOut(1); 
            friends = false;
        }
        if(notification){
            $(".notification").fadeOut(1);                 
            $('.notify').fadeIn(1);
            notification = false;
        }
        if(results){
            $('.results').fadeOut(1);           
            $('.searchinput').val('');
            results = false;
        }
    });      
      
       
            
               
    $(".setting").click(function(){
        $(".settings").fadeIn(1);
        settings = true;
    });
    //        added by marcel
  
   
    $(".second").click(function(){                                
        $(".messages").slideToggle("slow");                    
    });    
  

   
    
    /**
     * Modified the way that the event are triggered 
     */
    timeout = false;
    $(".searchinput").keypress(function(e){        
        
        if(timeout) {
            clearTimeout(timeout);
            timeout = null;
        }        
        
        lastlength = 0;
        timeout = setTimeout(function(){
            //            alert('hello')
        
            if($(".searchinput").val().length >=2 && lastlength <  $(".searchinput").val().length){            
                $('.results').fadeIn(1);   
                $("#resultdiv").html('<li><image class="loading" src="images/ajax-loader.gif" title="Loading"  > </li>')                 
                sended = search('search', $(".searchinput").val(), '#resultdiv');            
        
            
                results = true;
            }else {
                $('.results').fadeOut(1);           
                results = false;
            }
            lastlength = $(".searchinput").val().length ;    
        },1700);
                      
    });                                
/**
     * --Modified  --
     */   
});

function readNotification($qtd){
    $val =parseInt($('.notify').text(), 10)-1;
    if($val == 0) $val = '';                
    $('.notify').html($val);         
    $('#read_'+$qtd).hide();
    getNotifications('readNotification', $qtd, '.notifications');
        
}

var   timeover = false;
function getMoreNotificaitons(){
     if(timeout) {
            clearTimeout(timeout);
            timeout = null;
        }        
        
        lastlength = 0;
        timeout = setTimeout(function(){
            //            alert('hello')
         getNotifications('raiseLimit', 0, 0);
        },2000);
    
    getNotifications('raiseLimit', 0, 0);
}
