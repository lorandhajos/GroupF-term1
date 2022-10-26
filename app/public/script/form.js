var button = document.getElementsByClassName("signupButton")[0];
var submit = document.getElementById("submit");
var form = document.getElementById("form");
var formBg = document.getElementById("formBg");

button.onclick = function() {
   form.style.display = "block";
   formBg.style.display = "block";
}

submit.onclick = function() {
   form.style.display = "none";
   formBg.style.display = "none";
   alert("Your details have been submitted successfully");
}

window.onclick = function(event) {
   if (event.target == formBg) {
      form.style.display = "none";
      formBg.style.display = "none";
   }
}
