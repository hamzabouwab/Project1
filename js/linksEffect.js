
const menuLinks= document.querySelectorAll(".menu .nav-item .nav-link")
const hoverEffect= document.querySelector("span.hoverEffect")
 function menuLinksHoverEffect(){

   menuLinks.forEach(link => {
     link.addEventListener("mouseover",()=>{
       hoverEffect.style.transform="scale(1) "
       hoverEffect.style.borderRadius="6px"
       hoverEffect.style.left=link.offsetLeft+"px" ;
       hoverEffect.style.top=link.offsetTop+"px"
       hoverEffect.style.width=link.offsetWidth+"px";
       hoverEffect.style.opacity="1";
     })
   });
   menuLinks.forEach(link => {
     link.addEventListener("mouseleave",()=>{
       hoverEffect.style.left=link.offsetLeft+"px" ;
       hoverEffect.style.transform=" scale(0)";
       hoverEffect.style.borderRadius="20px";
       hoverEffect.style.opacity="0"; 
     })
   });
 }
 menuLinksHoverEffect()