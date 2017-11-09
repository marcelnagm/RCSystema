/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    setInterval(function (){                    

        
        var $notifications = $.ajax({
            type: "POST",
            url:"response.php",
            data: 'getit',        
            async: false,
            processData: false,
            dataType: "html",
            success:   function(){             
            },
            error: function(){
                console.log('had an error to get the information');
            }
        }).responseText;
        obj = JSON.parse($notifications);
    
        $('.friendwrap').html(obj.friends);
        $('.peopwrap').html(obj.friends_tumbnail);
        $('.jessicatxt').html(obj.tumbnail_text);
        $('.jspPane').html(obj.getAll);
        $('.notify').html(obj.getAllNumber);
        $('.friends_request').html(obj.friends_request);
        $('.totalfriends').html(obj.friends_number);        
   
        
		
	

    },'2000');
});