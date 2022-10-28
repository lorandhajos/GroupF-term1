const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
var formBg1 = document.getElementById("formBg1");

hamburger.addEventListener("click", function(){
   hamburger.classList.toggle("active");
   navMenu.classList.toggle("active");

   // toggle formBg1
   if (formBg1.style.display === "block") {
      formBg1.style.display = "none";
   } else {
      formBg1.style.display = "block";
   }
});

document.querySelectorAll(".nav-link").forEach(n => n.
addEventListener("click",function(){
   hamburger.classList.remove("active");
   navMenu.classList.remove("active");

   // remove formBg1 when clicking a link
   formBg1.style.display = "none";
}))
