$(document).ready(function(){
	$('#Submit').click(function(){
		sendInformation();
		//storeData();
		})
	});
	
function sendInformation(){	
	phoneNumber = $("#Phone").val();
	var person = {
		Phone: phoneNumber,
		RegID: notificationEvent.regid
	};
	
	$.ajax({
            url: "http://sha-net.net/wines",
            type: "POST",
            dataType: "json",
            data: person
        });
}


	