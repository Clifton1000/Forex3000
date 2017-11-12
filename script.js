// JS CHAPTER 8

"use strict";

$(document).ready(function(){
    $("#nav-mobile").php($("#nav-main").php());
    $("#nav-trigger span").click(function(){
        if ($("nav#nav-mobile ul").hasClass("expanded")) {
            $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
            $(this).removeClass("open");
        } else {
            $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
            $(this).addClass("open");
        } 
    });
		$("#nav-mobile #nav-trigger").remove();
		$("#nav-mobile #signIn").remove();
});

// global variables

var profile = {};  // object
var objectString;

// validate entered username
function validateUsername() {
   var unInput = document.getElementById("uname");
   var errorDiv = document.getElementById("usernameError");
   try {
//	if (unInput.value.length < 4) { //if length of uname is < 4, the if statment throws an error
	  if (/.{4,}/.test(unInput.value) === false) {
	     throw "Please consider using at least 4 characters";
	  } else if (/\W/.test(unInput.value) === true) {
         throw "Please consider only letters and/or numbers";
      }

      // remove any username error styling and message
      unInput.style.background = "";
      errorDiv.style.display = "none";
      errorDiv.innerHTML = "";
      // copy valid username value to profile object
      profile.username = unInput.value;
      // copy profile.username value to profile section
      document.getElementById("profileUsername").innerHTML = profile.username;
      // make profile section and username section visible
      document.getElementById("profile").style.display = "block";
      document.getElementById("usernameSection").style.display = "block";
   }
   catch(msg) {
      // display error message
      errorDiv.style.display = "block";
      errorDiv.innerHTML = msg;
      // change input style
      unInput.style.background = "rgb(255,233,233)";
   }
}

// validate entered password
function validatePassword() {
   var pw1Input = document.getElementById("pw1");
   var pw2Input = document.getElementById("pw2");
   var errorDiv = document.getElementById("passwordError");
   try {
	//   if (pw1Input.value.length < 8) { //if password is < 8 char in length, if statement throws an error
	   if (/.{8,}/.test(pw1Input.value) === false) {
	   throw "Please consider using at least 8 characters";
		   // password2 msut match the first
	   } else if (pw1Input.value.localeCompare(pw2Input.value) !== 0) {
		   throw "error: Please try again. Passwords to match";
	   } else if (/[a-zA-Z]/.test(pw1Input.value) === false) {
         throw "Please consider using least one letter";
      } else if (/\d/.test(pw1Input.value) === false) {
         throw "Please consider adding at least one number";
      } /*else if (/[!@#$%^&*()_]/.test(pw1Input.value) === false) {
         throw "Please consider using at least one symbol: !@#$%^&*()_";
      }*/

      // remove any password error styling and message
      pw1Input.style.background = "";
      pw2Input.style.background = "";
      errorDiv.style.display = "none";
      errorDiv.innerHTML = "";
      // copy valid password to profile object
      profile.password = pw1Input.value;
   }
   catch(msg) {
      // display error message
      errorDiv.style.display = "block";
      errorDiv.innerHTML = msg;
      // change input style
      pw1Input.style.background = "rgb(255,233,233)";
      pw2Input.style.background = "rgb(255,233,233)";
   }
}

// validate entered email
function validateEmail() {
   var emailInput = document.getElementById("emailbox");
   var errorDiv = document.getElementById("emailError");
   var emailCheck = /^[_\w\-]+(\.[_\w\-]+)*@[\w\-]+(\.[\w\-]+)*(\.[\D]{2,6})$/;
   try { 
		   if (emailCheck.test(emailInput.value) === false) {
         throw "Please provide a valid email address";
      }
      // remove any email error styling and message
      emailInput.style.background = "";
      errorDiv.innerHTML = "";
      errorDiv.style.display = "none";
      // convert email address to lowercase
	  emailInput.value = emailInput.value.toLowerCase();
      // copy valid email value to profile object
      profile.email = emailInput.value;
      // copy profile.email value to profile section
      document.getElementById("profileEmail").innerHTML = profile.email;
      // make profile section and email section visible
      document.getElementById("profile").style.display = "block";
      document.getElementById("emailSection").style.display = "block";
   }
   catch(msg) {
      // display error message
      errorDiv.innerHTML = msg;
      errorDiv.style.display = "block";
      // change input style
      emailInput.style.background = "rgb(255,233,233)";
   }
}

// convert form input to strings for submission
function convertToString() {
   // convert investing array to string which makes it easier to read -- separated by commas
   //convert profile object to string
   objectString = JSON.stringify(profile);
}

function createEventListeners() {
   var unInput = document.getElementById("uname");
   var pw2Input = document.getElementById("pw2");
   var emailInput = document.getElementById("emailbox");
   if (unInput.addEventListener) {
	   /*listen for the 'change' event for when the focus leaves the box and the value has changed */
      unInput.addEventListener("change", validateUsername, false);
      pw2Input.addEventListener("change", validatePassword, false);
      emailInput.addEventListener("change", validateEmail, false);
   } else if (unInput.attachEvent) { //IE8 compatibility
      unInput.attachEvent("onchange", validateUsername);
      pw2Input.attachEvent("onchange", validatePassword);
      emailInput.attachEvent("onchange", validateEmail);
   }



   var button = document.getElementById("createBtn");
   if (button.addEventListener) {
      button.addEventListener("click", convertToString, false);
   } else if (button.attachEvent) {//IE8 compatibility
      button.attachEvent("onclick", convertToString);
   }
}

if (window.addEventListener) {
   window.addEventListener("load", createEventListeners, false);
} else if (window.attachEvent) {//IE8 compatibility
   window.attachEvent("onload", createEventListeners);
}
