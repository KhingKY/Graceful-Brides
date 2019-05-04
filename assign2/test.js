function test(){
	document.getElementById("subject").value="RE: Enquiry on";
}

function init()
{
	var regForm=document.getElementById("book");
	regForm.onclick=test;
}

window.onload=init;