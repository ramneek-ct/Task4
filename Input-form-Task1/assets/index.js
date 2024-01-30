$(document).ready(function(){
$(".submit-button").click(function() {
   var firstname = $("#firstname").val();
   var lastname = $("#lastname").val();
   var phone = $("#phone").val();
   alert("Your response has been recorded!");
   
   $.ajax({
    type: 'POST',
    url: 'info.php',
    data: {
        firstname: firstname,
        lastname: lastname,
        phone: phone
    },
    success: function(response){
        var $result = response.firstname + " " + response.lastname + " " + response.phone;
        alert($result);
        }
    });
});
});
