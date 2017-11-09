
function sendAjax($func,$id) {
    
        var $result = $.ajax({
            type: "POST",
            url: "orders_ajax.php",
            data: 'func=' + $func + '&id=' + $id,
            async: false,
            processData: false,
            dataType: "html",
            success: function(response) {
                
            },
            error: function() {
                alert("had a error trying to get the information");
            }
        }).responseText;
        $('#resultSeller').html($result);
    

}

function removeSeller($id) {
    var $func = "delete";

    var retVal = confirm("Deseja Remover ?");
    if (retVal == true) {
//        console.log('done');
        var $result = $.ajax({
            type: "POST",
            url: "sellers_ajax.php",
            data: 'func=' + $func + '&id=' + $id,
            async: false,
            processData: false,
            dataType: "html",
            success: function(response) {
                
            },
            error: function() {
                alert("had a error trying to get the information");
            }
        }).responseText;
        $('#resultSeller').html($result);
        return true;
    } else {
//        alert("User does not want to continue!");
        return false;
    }

}

function refreshSellers() {

    var $func = "getAll";
    var $result = $.ajax({
        type: "POST",
        url: "orders_ajax.php",
        data: 'func=' + $func,
        async: false,
        processData: false,
        dataType: "html",
        success: function(response) {
        },
        error: function() {
            alert("had a error trying to get the information");
        }
    }).responseText;
$('#resultSeller').html($result);
}


$(document).ready(function() {


});


