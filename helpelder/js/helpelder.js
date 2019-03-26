//stick header to top on scroll
var stickTheHeader =  function(evt) {
	var doc = document.documentElement;
	var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
	var nav = document.getElementById("nav");

	if (top>0){
		nav.parentElement.style.height=nav.clientHeight+'px';
		nav.parentElement.classList='stickTheHeader';
	}else{
		nav.parentElement.style.height='';
		nav.parentElement.classList='';
	}
};

function stickTheHeaderBtn(evt){
	window.setTimeout('stickTheHeader("");',500);

}

//bind height calculator for sticky scroll header effect to window and menu button for mobile
document.getElementById("tabMobile").addEventListener("click",stickTheHeaderBtn);
window.addEventListener("scroll", stickTheHeader);
window.addEventListener("resize", stickTheHeader);

//choose senior button on registration form
function btnregsenior(){
	document.getElementById("btnregsenior").classList="regtypebtn btn btn-sm btn-primary col-xs-6 noround btnregsenior";
	document.getElementById("btnregserviceprovider").classList="regtypebtn btn btn-sm btn-default col-xs-6 noround btnregserviceprovider";
	document.getElementById("bigicon").classList="fa fa-user-circle-o";
	document.getElementById("bigicon1").classList="fa fa-user-circle-o";
	document.getElementById("userType").value="senior";
	document.getElementById("reg-form").style.display="block";
	document.getElementById("providerServiceType").style.display="none";
}

//choose serviceprovider button on registration form
function btnregserviceprovider(){
	document.getElementById("btnregsenior").classList="regtypebtn btn btn-sm btn-default col-xs-6 noround btnregsenior";
	document.getElementById("btnregserviceprovider").classList="regtypebtn btn btn-sm btn-success col-xs-6 noround btnregserviceprovider";
	document.getElementById("bigicon").classList="fa fa-user-circle-o";
	document.getElementById("bigicon1").classList="fa fa-user-circle-o";
	document.getElementById("userType").value="serviceprovider";
	document.getElementById("reg-form").style.display="block";
	document.getElementById("providerServiceType").style.display="table";
	document.getElementById("address").style.display="none";
}


//choose make sure sign up form is filled up correctly
function validateSignupForm(){
	if (document.getElementById("psw").value!=document.getElementById("psw2").value){
			bootbox.alert("Password and new password is different They must be same.");
			return false;
	}
	if (document.getElementById("userType").value=='serviceprovider')
	{
		if (document.getElementById("providerServiceType").value=='')
		{
			bootbox.alert("You need to choose service type first.");
			return false;
		}
	}
	return true;
}

//make sure serviceprovider edit form is filled up correctly
function validateserviceproviderForm(){
	if (document.getElementById("psw").value!=document.getElementById("psw2").value){
			bootbox.alert("Password and new password is different, They must be same.");
			return false;
	}

	if (document.getElementById("providerServiceType").value=='')
	{
		bootbox.alert("You need to choose service type first.");
		return false;
	}

	return true;
}

//make sure senior edit form is filled up correctly
function validateseniorForm(){
	if (document.getElementById("psw").value!=document.getElementById("psw2").value){
			bootbox.alert("Password and new password is different, They must be same.");
			return false;
	}
	return true;
}


//pop out message when record a new service type
function myFunction() {
    alert("Added new service type successful.");
		return true;
}

//ratingstar
if(typeof $.fn.rating !== 'undefined')
$(".ratinginput").rating({step: 1});
