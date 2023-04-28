
const menuLinks= document.querySelectorAll(".menu .nav-item .nav-link")
const menuHoverEffect= document.querySelector(".menu span#menuHoverEffect")
const hoverLinks= document.querySelectorAll(" span.hoverEffect")
const submit=document.querySelector("#submit")
const navbarTogglerIcon= document.querySelectorAll(".custom-navbar-toggler-icon")
const navbarToggler= document.querySelector(".navbar-toggler")
const collapse= document.querySelector(".collapse")

const hoverEffect = document.querySelector(".register-btn #signHoverEffect");
const registerNav = document.getElementById("register");

// Add an event listener to window to detect when the viewport size changes
window.addEventListener("resize", function() {
  // Check if the viewport is smaller than a certain width (e.g. 768px)
  if (window.innerWidth > 768) {
    // Set the width of the hoverEffect span to match the width of the registerNav element
    hoverEffect.style.width = registerNav.offsetWidth + "px";
    hoverEffect.style.left = registerNav.offsetLeft + "px";
  } else {
    // Set the width of the hoverEffect span to its default value
    hoverEffect.style.width = "";
  }
});

//add transition to hoverLinks
window.onload=()=>{
  hoverLinks.forEach(element => {
    element.style.transition=".4s"
  });
}
menuLinks.forEach(link => {
  link.addEventListener("click",()=>{
    if (collapse.classList.contains("show")) {
      navbarToggler.click();
    }
  });
});

//navbar button toggle effect function
function toggleEffect(){
  if(navbarTogglerIcon[0].style.transform===""){
    navbarTogglerIcon[0].style.transform="translate(-50%,-50%)rotate(-45deg)"
  }else{
      navbarTogglerIcon[0].style.transform=""
    }
    if(navbarTogglerIcon[1].style.opacity===""){
      navbarTogglerIcon[1].style.opacity="0"
    }else{
      navbarTogglerIcon[1].style.opacity=""
    }
    if(navbarTogglerIcon[2].style.transform===""){
      navbarTogglerIcon[2].style.transform="translate(-50%,-50%)rotate(45deg)"
    }else{
      navbarTogglerIcon[2].style.transform=""
    }
  }

  navbarToggler.addEventListener("click",()=>{
    toggleEffect()
  })
  menuLinks.forEach(link => {
     link.addEventListener("mouseover",()=>{
       menuHoverEffect.style.transform="scale(1) "
       menuHoverEffect.style.borderRadius="6px"
       menuHoverEffect.style.left=link.offsetLeft+"px" ;
       menuHoverEffect.style.top=link.offsetTop+"px"
       menuHoverEffect.style.width=link.offsetWidth+"px";
       menuHoverEffect.style.opacity="1";
     })
   });
   menuLinks.forEach(link => {
     link.addEventListener("mouseleave",()=>{
       menuHoverEffect.style.left=link.offsetLeft+"px" ;
       menuHoverEffect.style.transform=" scale(0)";
       menuHoverEffect.style.borderRadius="20px";
       menuHoverEffect.style.opacity="0"; 
     })
   });
   if(document.querySelector(".register-btn span#signHoverEffect") != null){
    const signLinks= document.querySelectorAll(".register-btn .nav-item .nav-link")
    const signHoverEffect= document.querySelector(".register-btn span#signHoverEffect")
    signHoverEffect.style.width=signLinks[1].offsetWidth+"px"
    signHoverEffect.style.left=signLinks[1].offsetLeft+"px"
    signLinks[0].addEventListener("mouseover",()=>{
      signHoverEffect.style.left=signLinks[0].offsetLeft+"px";
      signHoverEffect.style.top=signLinks[0].offsetTop+"px"
      signHoverEffect.style.width=signLinks[0].offsetWidth+"px";
      signLinks[0].classList.add("text-white")
      signLinks[0].classList.remove("text-primary")
      signLinks[1].classList.remove("text-white")
      signLinks[1].classList.add("text-primary")
     })
     signLinks[0].addEventListener("mouseleave",()=>{
         signHoverEffect.style.left=signLinks[1].offsetLeft+"px";
         signHoverEffect.style.width=signLinks[1].offsetWidth+"px";
         signLinks[0].classList.remove("text-white")
         signLinks[0].classList.add("text-primary")
         signLinks[1].classList.remove("text-primary")
         signLinks[1].classList.add("text-white")
    })
 }
