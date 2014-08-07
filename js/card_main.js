$(document).ready(function() {
  console.log("App is loaded");
  
	//load the pages based on the drop down for card categories
	//this is the defualt featured load
	$('#browse-cards-container').load('pages/featured.html', function() {
	});
	
	$("#clearForm").click(function() {
	  $('#greeting, #message, #signature').val('');
	  $('#countdown').val(100); 
	  
	});
	//start celebration ajax....
	
	
	
	
});
//this is the publish your own card form limit validator
function limitMessage(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} 
	else {
		limitCount.value = limitNum - limitField.value.length;
	}
}