$(document).ready(function(){
    $(".submit-button").click(function() {
       var f_name = $("#firstname").val();
       var l_name = $("#lastname").val();
       var ph_no = $("#phone").val();
       alert("Your response has been recorded!");
       
       $.ajax({
        type: 'POST',
        url: 'info.php',
        data: {
            first_n: f_name,
            last_n: l_name,
            phn: ph_no
        },
        success: function(response){
            var $result = response.firstname + " " + response.lastname + " " + response.phone;
            alert($result);
            }
        });
    });
    });
    
