$(document).ready(function(){
	$('#Submit').click(function(){
		sendInformation();
		//storeData();
		})
	});
	
function sendInformation(){	
	userName = $("#userName").val();
	familyName = $("#familyName").val();
	var person = {
		Phone: userName,
		RegID: familyName
	};
	
	$.ajax({
            url: "http://sha-net.net/index.php",
            type: "POST",
            dataType: "json",
            data: person
        });
}


	