// JavaScript Document
function validateName(name,statId){
	var validRegex = /^[a-zA-Z\-']+$/;
	var elNameStatus=document.getElementById(statId);
	elNameStatus.classList.add("alert");
	if (name.value.match(validRegex)){
		elNameStatus.classList.remove("alert-danger");
		elNameStatus.classList.add("alert-success");
		elNameStatus.innerHTML="Name is valid!";
	} else {
		elNameStatus.classList.remove("alert-success");
		elNameStatus.classList.add("alert-danger");
		elNameStatus.innerHTML="Name is NOT valid!";
	}
}

function validateEmail(email){
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var elEmailStatus=document.getElementById('emailStatus');
	elEmailStatus.classList.add("alert");
	if (email.value.match(validRegex)){
		elEmailStatus.classList.remove("alert-danger");
		elEmailStatus.classList.add("alert-success");
		elEmailStatus.innerHTML="Email is valid!";
	} else {
		elEmailStatus.classList.remove("alert-success");
		elEmailStatus.classList.add("alert-danger");
		elEmailStatus.innerHTML="Email is NOT valid!";
	}
}

function validatePhoneNum(phone){
	var validRegex = /^[0-9]{10}$/;
	var elPhoneStatus=document.getElementById('pNumStatus');
	elPhoneStatus.classList.add("alert");
	if (phone.value.match(validRegex)){
		elPhoneStatus.classList.remove("alert-danger");
		elPhoneStatus.classList.add("alert-success");
		elPhoneStatus.innerHTML="Phone Number is valid!";
	} else {
		elPhoneStatus.classList.remove("alert-success");
		elPhoneStatus.classList.add("alert-danger");
		elPhoneStatus.innerHTML="Phone Number is NOT valid!";
	}
}

function validateComment(comment){
	var validRegex = /^.+.*$/;
	var elCommentStatus=document.getElementById('commentStatus');
	elCommentStatus.classList.add("alert");
	if (comment.value.match(validRegex)){
		elCommentStatus.classList.remove("alert-danger");
		elCommentStatus.classList.add("alert-success");
		elCommentStatus.innerHTML="Comment is valid!";
	} else {
		elCommentStatus.classList.remove("alert-success");
		elCommentStatus.classList.add("alert-danger");
		elCommentStatus.innerHTML="Comment is NOT valid!";
	}
}

var elFName=document.getElementById('firstName');
elFName.addEventListener('blur', function() {validateName(elFName,'fNameStatus');}, false);

var elLName=document.getElementById('lastName');
elLName.addEventListener('blur', function() {validateName(elLName,'lNameStatus');}, false);

var elEmail=document.getElementById('email');
elEmail.addEventListener('blur', function() {validateEmail(elEmail);}, false);

var elPhone=document.getElementById('phoneNum');
elPhone.addEventListener('blur', function() {validatePhoneNum(elPhone);}, false);

var elComment=document.getElementById('comment');
elComment.addEventListener('blur', function() {validateComment(elComment);}, false);
