var button = document.getElementsByClassName("signupButton")[0];
var submit = document.getElementById("submit");
var form = document.getElementById("form");
var formBg = document.getElementById("formBg");
var name = document.getElementById("name");
var email = document.getElementById("email");
var tel = document.getElementById("tel");

button.onclick = function() {
   form.style.display = "block";
   formBg.style.display = "block";
}

function signupSubmit() {
   form.style.display = "none";
   formBg.style.display = "none";
   name.value = "";
   email.value = "";
   tel.value = "";
   alert("Your details has been submitted successfully");
}

form.addEventListener('submit', signupSubmit);

window.onclick = function(event) {
   if (event.target == formBg) {
      form.style.display = "none";
      formBg.style.display = "none";
   }
}
