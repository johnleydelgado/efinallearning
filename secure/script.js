//declaring variables
var roleID;
var roleID2;
//redirecting to login
function loginRedirect(roleID){

	window.location = "secure/login.php?roleID="+roleID;

}

function signupRedirect(roleID2){

	window.location = "signup.php?roleID2="+roleID2;

}