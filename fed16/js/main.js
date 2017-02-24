
// if(localStorage.getItem("notificationShown") == null) {
// 	//document.getElementById("hide-notification")
// 	//.addEventListener("click", hideNotification);
// 	$("#hide-notification").on("click", hideNotification);
// } else {
// 	$("#cookie-notification").hide();
// }

// function hideNotification() {
// 	localStorage.setItem("notificationShown", true);
// 	$("#cookie-notification").fadeOut(5000, function() {
// 		$("#cookie-notification").addClass("hidden");
// 	});
// }






// if(localStorage.getItem("notificationShown") == null) {
// 	// display message
// 	document.getElementById("hide-notification").addEventListener("click", hideNotification);
// } else {
// 	document.getElementById("cookie-notification").classList.add("hidden");
// }


// function hideNotification() {
// 	document.getElementById("cookie-notification").classList.add("hidden");
// 	localStorage.setItem("notificationShown", true);
// }



jQuery
var $ = jQuery;
if(localStorage.getItem("notifactionShown") == null) {
	// display cookie message
	$("#hide-notifaction").click(hideNotifaction);
}
else {
	hideNotifaction();
}

// $("#hide-notifaction").on("click", hideNotifaction); // jQuwery
$("#hide-notifaction").click(hideNotifaction);

function hideNotifaction() {
	localStorage.setItem("notifactionShown", true);
	// $("#cookie-notifaction").hide();
	// eller
	$("#cookie-notifaction").slideUp();
}






// Vanlig javascript

// if(localStorage.getItem("notifactionShown") == null) {
// 	// display message
// 	document.getElementById("hide-notifaction").addEventListener("click", hideNotifaction);
// }
// else {
// 	document.getElementById("cookie-notifaction").classList.add("hidden");
// }

// function hideNotifaction() {
// 	document.getElementById("cookie-notifaction").classList.add("hidden");
// 	localStorage.setItem("notifactionShown", true);
// }